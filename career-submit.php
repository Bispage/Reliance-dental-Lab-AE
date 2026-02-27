<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: career.php");
    exit;
}


$TURNSTILE_SECRET = "0x4AAAAAACYxea7L3fyDoHL3mbNWwMfaE30";
$turnstileToken  = $_POST['cf-turnstile-response'] ?? '';

if (!$turnstileToken) {
    popup("Verification failed", "Security verification missing.", false);
}

$verify = file_get_contents(
    "https://challenges.cloudflare.com/turnstile/v0/siteverify",
    false,
    stream_context_create([
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-Type: application/x-www-form-urlencoded",
            'content' => http_build_query([
                'secret'   => $TURNSTILE_SECRET,
                'response' => $turnstileToken,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            ])
        ]
    ])
);

$result = json_decode($verify, true);

if (empty($result['success'])) {
    popup("Verification Failed", "Please refresh and try again.", false);
}

/* ======================================================
   HELPER
====================================================== */
function clean($v){ return htmlspecialchars(trim($v)); }

/* ======================================================
   REQUIRED FIELDS
====================================================== */
$required = [
    'name','email','phone','position','experience','summary',
    'previous_company','last_designation','responsibilities',
    'previous_salary','expected_salary','notice_period',
    'qualification','institution','achievements'
];

foreach ($required as $field) {
    if (empty($_POST[$field])) {
        popup("Missing Information", "All fields are required.", false);
    }
}

/* ======================================================
   SANITIZE
====================================================== */
$name              = clean($_POST['name']);
$email             = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$phone             = clean($_POST['phone']);
$position          = clean($_POST['position']);
$experience        = clean($_POST['experience']);
$summary           = clean($_POST['summary']);
$previous_company  = clean($_POST['previous_company']);
$last_designation  = clean($_POST['last_designation']);
$responsibilities  = clean($_POST['responsibilities']);
$previous_salary   = clean($_POST['previous_salary']);
$expected_salary   = clean($_POST['expected_salary']);
$notice_period     = clean($_POST['notice_period']);
$qualification     = clean($_POST['qualification']);
$institution       = clean($_POST['institution']);
$achievements      = clean($_POST['achievements']);

if (!$email) {
    popup("Invalid Email", "Please enter a valid email address.", false);
}

/* ======================================================
   RESUME VALIDATION
====================================================== */
if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
    popup("Upload Failed", "Resume upload failed.", false);
}

if ($_FILES['resume']['size'] > 2 * 1024 * 1024) {
    popup("File Too Large", "Resume must be under 2MB.", false);
}

$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime  = finfo_file($finfo, $_FILES['resume']['tmp_name']);
finfo_close($finfo);

if ($mime !== "application/pdf") {
    popup("Invalid File", "Only PDF resumes are allowed.", false);
}

/* ======================================================
   SAVE FILE
====================================================== */
$uploadDir = "uploads/resumes/";
if (!is_dir($uploadDir)) mkdir($uploadDir,0755,true);

$fileName = time()."_".bin2hex(random_bytes(5)).".pdf";
$filePath = $uploadDir.$fileName;

if (!move_uploaded_file($_FILES['resume']['tmp_name'], $filePath)) {
    popup("Upload Error", "Could not save resume.", false);
}

/* ======================================================
   EMAIL TO HR
====================================================== */

$hrTo = "sales@reliancedentallab.ae";
$hrSubject = "New Career Application – $position";

$hrMessage = "
Name: $name
Email: $email
Phone: $phone

Position: $position
Experience: $experience years

Previous Company: $previous_company
Designation: $last_designation

Previous Salary: $previous_salary
Expected Salary: $expected_salary
Notice Period: $notice_period

Qualification: $qualification
Institution: $institution

Achievements:
$achievements

Summary:
$summary

Responsibilities:
$responsibilities

Resume: $filePath
";

mail($hrTo, $hrSubject, $hrMessage, "From: career <sales@reliancedentallab.ae>");

/* ======================================================
   AUTO-REPLY EMAIL TO APPLICANT
====================================================== */

$appSubject = "We received your application";

$appMessage = '
<!DOCTYPE html>
<html>
<body style="margin:0;background:#f4f6f9;font-family:Arial">
<table width="100%" cellpadding="0" cellspacing="0">
<tr><td align="center" style="padding:40px">
<table width="100%" style="max-width:600px;background:#fff;border-radius:16px;box-shadow:0 20px 40px rgba(0,0,0,.08)">
<tr>
<td style="padding:30px;background:#111184;color:#E7E7E7;text-align:center">
<h2 style="margin:0">Application Received ✅</h2>
</td>
</tr>
<tr>
<td style="padding:30px;color:#333">
<p>Hi <strong>'.$name.'</strong>,</p>
<p>Thank you for applying for <strong>'.$position.'</strong>.</p>
<p>We have successfully received your application. Our HR team is reviewing your profile.</p>
<div style="background:#f1f3f6;padding:16px;border-radius:12px;font-size:14px">
<strong>Next Steps:</strong><br>
• Profile Review<br>
• Shortlisting<br>
• Interview Call (if selected)
</div>
<p style="margin-top:25px">Best regards,<br><strong>HR Team</strong></p>
</td>
</tr>
<tr>
<td style="padding:15px;text-align:center;font-size:12px;color:#999">
© '.date("Y").' bispage.com
</td>
</tr>
</table>
</td></tr>
</table>
</body>
</html>';

$appHeaders  = "MIME-Version: 1.0\r\n";
$appHeaders .= "Content-type:text/html;charset=UTF-8\r\n";
$appHeaders .= "From: career <reliancedentallab.ae>\r\n";

mail($email, $appSubject, $appMessage, $appHeaders);

/* ======================================================
   SUCCESS POPUP
====================================================== */
popup("Application Submitted",
      "Thank you for applying. Our HR team will contact you if shortlisted.",
      true);

/* ======================================================
   POPUP FUNCTION
====================================================== */

function popup($title, $msg, $success=true){
$statusColor = $success ? "#4ade80" : "#f87171";

echo <<<HTML
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Status</title>

<style>
body{
  margin:0;
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:transparent;
}

/* Transparent overlay */
.overlay{
  position:fixed;
  inset:0;
  background:transparent;
  display:flex;
  justify-content:center;
  align-items:center;
}

/* Glass popup */
.popup{
  background:rgba(255,255,255,0.22);
  backdrop-filter:blur(20px);
  -webkit-backdrop-filter:blur(20px);
  padding:30px;
  border-radius:22px;
  color:#111;
  max-width:420px;
  width:90%;
  box-shadow:0 30px 60px rgba(0,0,0,.25);
  position:relative;
  animation:pop .35s ease;
}

@keyframes pop{
  from{transform:scale(.9);opacity:0}
  to{transform:scale(1);opacity:1}
}

.close{
  position:absolute;
  top:14px;
  right:18px;
  font-size:22px;
  cursor:pointer;
  opacity:.6;
}

h3{margin:0 0 10px}
p{margin:0;color:#333}

.bar{
  height:4px;
  width:60px;
  background:$statusColor;
  border-radius:10px;
  margin-bottom:15px;
}
</style>
</head>

<body>

<div class="overlay" onclick="closeP()">
  <div class="popup" onclick="event.stopPropagation()">
    <div class="close" onclick="closeP()">×</div>
    <div class="bar"></div>
    <h3>$title</h3>
    <p>$msg</p>
  </div>
</div>

<script>
function closeP(){
  document.querySelector('.overlay').style.display='none';
  setTimeout(()=>{ window.location='career.php'; },300);
}
setTimeout(closeP,5000);
</script>

</body>
</html>
HTML;
exit;
}

