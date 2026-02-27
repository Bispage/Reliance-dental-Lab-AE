<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

/* ==============================
   CONFIGURATION
============================== */
$ADMIN_EMAIL   = "reliancelab@gmail.com";
$GMAIL_USER    = "reliancelab@gmail.com";
$GMAIL_PASS    = "qhusiaqysbomwypx"; // ⚠️ Use ENV in production
$SITE_NAME     = "Reliance Dental Lab";
$TURNSTILE_SECRET = "0x4AAAAAACYxea7L3fyDoHL3mbNWwMfaE30";

/* Optional Static CC/BCC */
$STATIC_CC  = ["sales@reliancedentallab.ae"];

// $STATIC_BCC = [""];

/* ==============================
   ALLOW ONLY POST
============================== */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["status" => "error"]);
    exit;
}

/* ==============================
   VERIFY TURNSTILE
============================== */
$token = $_POST['cf-turnstile-response'] ?? '';

if (!$token) {
    echo json_encode(["status" => "error"]);
    exit;
}

$verify = curl_init("https://challenges.cloudflare.com/turnstile/v0/siteverify");
curl_setopt_array($verify, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query([
        'secret'   => $TURNSTILE_SECRET,
        'response' => $token,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ]),
    CURLOPT_RETURNTRANSFER => true
]);

$response = curl_exec($verify);
curl_close($verify);

$result = json_decode($response, true);

if (empty($result['success'])) {
    echo json_encode(["status" => "error"]);
    exit;
}

/* ==============================
   SANITIZE INPUTS
============================== */
function clean($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

$name    = clean($_POST['name'] ?? '');
$email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$company = clean($_POST['company'] ?? '');
$phone   = clean($_POST['phone'] ?? '');
$message = clean($_POST['message'] ?? '');

/* Optional dynamic CC/BCC from form */
$ccInput  = filter_var($_POST['cc'] ?? '', FILTER_VALIDATE_EMAIL);
$bccInput = filter_var($_POST['bcc'] ?? '', FILTER_VALIDATE_EMAIL);

if (!$name || !$email || !$message) {
    echo json_encode(["status" => "error"]);
    exit;
}

/* ==============================
   MODERN SVG HEADER
============================== */
$svgLogo = '
<svg width="60" height="60" viewBox="0 0 100 100" fill="none">
  <circle cx="50" cy="50" r="45" fill="#0A66C2"/>
  <text x="50%" y="55%" text-anchor="middle" fill="white" font-size="38" font-family="Arial" dy=".3em">RD</text>
</svg>
';

/* ==============================
   MODERN EMAIL TEMPLATE
============================== */
function emailTemplate($title, $content, $footerNote, $svgLogo) {
    return "
    <html>
    <body style='margin:0;background:#eef2f7;font-family:Segoe UI,Arial,sans-serif;'>
    <div style='max-width:650px;margin:40px auto;background:#ffffff;
                border-radius:18px;overflow:hidden;
                box-shadow:0 15px 35px rgba(0,0,0,0.08);'>

        <div style='background:linear-gradient(135deg,#0A66C2,#004182);
                    padding:30px;text-align:center;color:white;'>
            {$svgLogo}
            <h1 style='margin:15px 0 0;font-weight:600;'>{$title}</h1>
        </div>

        <div style='padding:35px;font-size:15px;line-height:1.8;color:#333;'>
            {$content}
        </div>

        <div style='background:#f4f6f9;padding:20px;text-align:center;
                    font-size:12px;color:#777;'>
            {$footerNote}
        </div>

    </div>
    </body>
    </html>
    ";
}

/* ==============================
   EMAIL CONTENT
============================== */

$adminContent = "
<table width='100%' cellpadding='8' style='border-collapse:collapse;'>
<tr><td><strong>Name:</strong></td><td>{$name}</td></tr>
<tr><td><strong>Email:</strong></td><td>{$email}</td></tr>
<tr><td><strong>Company:</strong></td><td>{$company}</td></tr>
<tr><td><strong>Phone:</strong></td><td>{$phone}</td></tr>
</table>

<hr style='margin:25px 0;'>

<h3>Message</h3>
<div style='background:#f9fafc;padding:18px;border-radius:12px;border:1px solid #e3e8ef;'>
" . nl2br($message) . "
</div>
";

$userContent = "
<p>Hello <strong>{$name}</strong>,</p>

<p>Thank you for contacting us. Our team will get back to you shortly.</p>

<div style='margin:20px 0;padding:18px;background:#f9fafc;
            border-radius:12px;border:1px solid #e3e8ef;'>
<strong>Your Message:</strong>
<p>" . nl2br($message) . "</p>
</div>

<p>Warm Regards,<br><strong>{$SITE_NAME}</strong></p>
";

$admin_body = emailTemplate(
    "New Website Enquiry",
    $adminContent,
    "Sent from {$SITE_NAME} Website",
    $svgLogo
);

$user_body = emailTemplate(
    "We Received Your Message",
    $userContent,
    "This is an automated email. Please do not reply.",
    $svgLogo
);

/* ==============================
   SEND EMAIL FUNCTION
============================== */
function sendMail($to, $subject, $body, $replyTo = null, $ccList = [], $bccList = []) {
    global $GMAIL_USER, $GMAIL_PASS, $SITE_NAME;

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $GMAIL_USER;
    $mail->Password   = $GMAIL_PASS;
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom($GMAIL_USER, $SITE_NAME);
    $mail->addAddress($to);

    if ($replyTo) {
        $mail->addReplyTo($replyTo['email'], $replyTo['name']);
    }

    foreach ($ccList as $cc) {
        $mail->addCC($cc);
    }

    foreach ($bccList as $bcc) {
        $mail->addBCC($bcc);
    }

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $body;

    return $mail->send();
}

/* ==============================
   EXECUTION
============================== */
try {

    // Merge static + dynamic CC/BCC
    $ccList  = $STATIC_CC;
    $bccList = $STATIC_BCC;

    if ($ccInput)  $ccList[]  = $ccInput;
    if ($bccInput) $bccList[] = $bccInput;

    // Admin mail
    sendMail(
        $ADMIN_EMAIL,
        "New Contact Enquiry - {$SITE_NAME}",
        $admin_body,
        ['email' => $email, 'name' => $name],
        $ccList,
        $bccList
    );

    // User confirmation
    sendMail(
        $email,
        "We Received Your Message - {$SITE_NAME}",
        $user_body
    );

    echo json_encode(["status" => "success"]);

} catch (Exception $e) {
    echo json_encode(["status" => "error"]);
}
exit;
?>