

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
  
<?php include __DIR__ . '/Global/header.php'; ?>
<?php
$pageTitle = "Contact";

$breadcrumb = [
    ["label" => "Home", "url" => "default.php"],
    ["label" => "Contact", "url" => ""]
];

include __DIR__ . '/Global/page-title.php';

?>


  <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Have Any Query? Feel Free To Contact Us</h1>
                <p class="mb-5">
                  Get in touch with Reliance Dental Lab LLC., UAE for reliable, high-quality dental solutions and professional support. Whether you have inquiries about our services, need technical assistance, or would like to discuss a new project, our team is ready to assist you with prompt and personalized attention.
                </p>

            </div>
            <div class="row contact-info position-relative g-0 mb-5">
                <div class="col-lg-6">
                    <a href="tel:+971581539789" class="d-flex justify-content-lg-center bg-primary p-4">
                        <div class="icon-box-light flex-shrink-0">
                            <i class="bi bi-phone text-dark"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">Call Us</h5>
                            <h2 class="text-white mb-0">+971 58 1539789</h2>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="mailto:sales@reliancedentallab.ae" class="d-flex justify-content-lg-center bg-primary p-4">
                        <div class="icon-box-light flex-shrink-0">
                            <i class="bi bi-envelope text-dark"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">Mail Us</h5>
                            <h2 class="text-white mb-0">sales@reliancedentallab.ae</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="container-fluid px-3 px-md-4" style="max-width:1300px;">
                
            <div class="row g-5">

  <!-- LEFT COLUMN - FORM -->
  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
    <form id="contactForm">

      <!-- ROW 1 -->
      <div class="row g-4 mb-3 mb-md-5">
        <div class="col-md-6">
          <label class="d-block mb-1" style="font-size:12px;letter-spacing:.08em;">
            Name
          </label>
          <input required name="name"
            class="w-100"
            style="border:none;border-bottom:1px solid #e5e5e5;
                   padding:12px 0;font-size:16px;outline:none;">
        </div>

        <div class="col-md-6">
          <label class="d-block mb-1" style="font-size:12px;letter-spacing:.08em;">
            Email
          </label>
          <input required type="email" name="email"
            class="w-100"
            style="border:none;border-bottom:1px solid #e5e5e5;
                   padding:12px 0;font-size:16px;outline:none;">
        </div>
      </div>

      <!-- ROW 2 -->
      <div class="row g-4 mb-3 mb-md-5">
        <div class="col-md-6">
          <label class="d-block mb-1" style="font-size:12px;letter-spacing:.08em;">
            Company
          </label>
          <input name="company"
            class="w-100"
            style="border:none;border-bottom:1px solid #e5e5e5;
                   padding:12px 0;font-size:16px;outline:none;">
        </div>

        <div class="col-md-6">
          <label class="d-block mb-1" style="font-size:12px;letter-spacing:.08em;">
            WhatsApp Number
          </label>
          <input type="tel" name="phone"
            class="w-100"
            style="border:none;border-bottom:1px solid #e5e5e5;
                   padding:12px 0;font-size:16px;outline:none;">
        </div>
      </div>

      <!-- MESSAGE -->
      <div class="mb-4 mb-md-5">
        <label class="d-block mb-1" style="font-size:12px;letter-spacing:.08em;">
          Tell us about your project
        </label>
        <textarea required name="message"
          class="w-100"
          style="border:none;border-bottom:1px solid #e5e5e5;
                 padding:12px 0;font-size:16px;
                 min-height:140px;resize:none;outline:none;">
        </textarea>
      </div>

      <input type="hidden" name="cf-turnstile-response" id="cf-token">

      <!-- TURNSTILE + BUTTON -->
      <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-3 gap-sm-4">

        <div class="cf-turnstile"
             data-sitekey="0x4AAAAAACYxeVy2-1XkJsAC"
             data-callback="turnstileCallback">
        </div>

        <button id="submitBtn" disabled
          style="position:relative;padding:14px 40px;border:none;
                 background:#000;color:#fff;font-size:14px;
                 letter-spacing:.08em;border-radius:30px;
                 min-width:200px;opacity:.5;cursor:not-allowed;">

          <span id="btnText">Send Message</span>

          <span id="btnLoader"
                class="spinner-border spinner-border-sm text-light"
                style="display:none;position:absolute;right:22px;
                       top:50%;transform:translateY(-50%);">
          </span>
        </button>
      </div>

      <p id="successMsg" class="mt-3 text-success d-none">
        Message sent successfully
      </p>

      <p id="errorMsg" class="mt-3 text-danger d-none">
        Submission failed. Try again.
      </p>

    </form>
  </div>


  <!-- RIGHT COLUMN - MAP -->
  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

    <div style="height:100%;min-height:450px;border-radius:10px;overflow:hidden;">

      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.4220386072684!2d55.390474875181035!3d25.35716827760831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5b01431a7c59%3A0xe9f80a1e2b3619f4!2sReliance%20dental%20lab!5e0!3m2!1sen!2sin!4v1770450130183!5m2!1sen!2sin"
        width="100%"
        height="100%"
        style="border:0;"
        allowfullscreen=""
        loading="lazy">
      </iframe>
      
     

    </div>

  </div>

</div>


    </div>
  </div>
        </div>
  </div>






<!-- Cloudflare Turnstile -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<!-- Lottie -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>

<!-- Cloudflare Turnstile -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<script>
const form = document.getElementById("contactForm");
const btn = document.getElementById("submitBtn");
const btnText = document.getElementById("btnText");
const loader = document.getElementById("btnLoader");

let turnstileOK = false;
let turnstileWidgetId = null;

/* ==============================
   TURNSTILE CALLBACK
============================== */
function turnstileCallback(token) {
    document.getElementById("cf-token").value = token;
    turnstileOK = true;
    validateForm();
}

window.onloadTurnstileCallback = function () {
    turnstileWidgetId = turnstile.render('.cf-turnstile', {
        sitekey: "0x4AAAAAACYxeVy2-1XkJsAC",
        callback: turnstileCallback
    });
};

function validateForm() {
    const valid = form.checkValidity() && turnstileOK;
    btn.disabled = !valid;
    btn.style.opacity = valid ? "1" : ".5";
    btn.style.cursor = valid ? "pointer" : "not-allowed";
}

form.addEventListener("input", validateForm);

/* ==============================
   POPUP FUNCTION
============================== */
function showPopup(type) {

    const popup = document.getElementById("resultPopup");
    const animContainer = document.getElementById("lottieAnimation");
    const messageText = document.getElementById("popupMessage");

    popup.classList.add("active");

    animContainer.innerHTML = "";

    let animationURL = "";

    if (type === "success") {
        messageText.textContent = "Message Sent Successfully!";
        animationURL = "https://assets10.lottiefiles.com/packages/lf20_jbrw3hcz.json";
    } else {
        messageText.textContent = "Submission Failed. Please try again.";
        animationURL = "https://assets10.lottiefiles.com/packages/lf20_qp1q7mct.json";
    }

    lottie.loadAnimation({
        container: animContainer,
        renderer: "svg",
        loop: false,
        autoplay: true,
        path: animationURL
    });

    setTimeout(() => {
        window.location.href = "contact.php";
    }, 3000);
}

function closePopup() {
    document.getElementById("resultPopup").classList.remove("active");
}

/* ==============================
   FORM SUBMIT
============================== */
form.addEventListener("submit", async function(e) {
    e.preventDefault();

    btn.disabled = true;
    btnText.textContent = "SENDING...";
    loader.style.display = "inline-block";

    try {
        const response = await fetch("submit.php", {
            method: "POST",
            body: new FormData(form)
        });

        const data = await response.json();

        if (data.status === "success") {
            showPopup("success");
            form.reset();
            turnstile.reset(turnstileWidgetId);
            turnstileOK = false;
        } else {
            showPopup("error");
        }

    } catch (error) {
        showPopup("error");
    }

    btnText.textContent = "SEND MESSAGE";
    loader.style.display = "none";
});
</script>

<!-- =========================
     MODERN RESULT POPUP
========================= -->
<div id="resultPopup" class="popup-overlay">
  <div class="popup-card">
    <button class="popup-close" onclick="closePopup()">×</button>

    <div id="lottieAnimation" style="width:140px;height:140px;margin:auto;"></div>

    <h3 id="popupMessage" class="mt-3"></h3>
  </div>
</div>

<style>
.popup-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.55);
    backdrop-filter: blur(8px);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    opacity: 0;
    visibility: hidden;
    transition: all .3s ease;
}

.popup-overlay.active {
    opacity: 1;
    visibility: visible;
}

.popup-card {
    background: rgba(255,255,255,0.75);
    backdrop-filter: blur(20px);
    border-radius: 20px;
    padding: 40px 30px;
    text-align: center;
    width: 90%;
    max-width: 400px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.25);
    animation: scaleIn .3s ease;
    position: relative;
}

.popup-close {
    position: absolute;
    top: 12px;
    right: 15px;
    background: transparent;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #333;
}

@keyframes scaleIn {
    from { transform: scale(.8); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}
</style>

<?php include __DIR__ . '/Global/footer.php'; ?>
