
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>


<?php include __DIR__ . '/Global/header.php'; ?>

<?php
$pageTitle = "Careers";

$breadcrumb = [
    ["label" => "Home", "url" => "default.php"],
    ["label" => "Careers", "url" => ""]
];

include __DIR__ . '/Global/page-title.php';

?>


<style>
.step{display:none}
.step.active{display:block}

.input-line{
  border:none;
  border-bottom:1px solid #ddd;
  padding:14px 0;
  font-size:16px;
  width:100%;
}
.input-line:focus{
  outline:none;
  border-bottom-color:#000;
}

.label{
  font-size:12px;
  letter-spacing:.08em;
  text-transform:uppercase;
  color:#666;
  margin-bottom:6px;
  display:block;
}
</style>
</head>

<body>

<section class="py-5">
<div class="container" style="max-width:850px">

<h3 class="mb-2 text-primary">Career Application</h3>
<p class="text-muted mb-4">Apply in a few simple steps</p>

<!-- PROGRESS -->
<div class="progress mb-4" style="height:6px;">
  <div id="progressBar" class="progress-bar bg-dark" style="width:16%"></div>
</div>

<form action="career-submit.php" method="POST" enctype="multipart/form-data">

<!-- STEP 1 -->
<div class="step active">
  <h5 class="mb-4">Personal Details</h5>

  <label class="label">Full Name *</label>
  <input required name="name" class="input-line mb-4">

  <label class="label">Email *</label>
  <input required type="email" name="email" class="input-line mb-4">

  <label class="label">Phone *</label>
  <input required name="phone" class="input-line">
</div>

<!-- STEP 2 -->
<div class="step">
  <h5 class="mb-4">Professional Summary</h5>

  <label class="label">Position Applying For *</label>
  <input required name="position" class="input-line mb-4">

  <label class="label">Total Work Experience (Years) *</label>
  <input required name="experience" class="input-line mb-4">

  <label class="label">Brief Professional Summary *</label>
  <textarea required name="summary" class="input-line" style="min-height:120px"></textarea>
</div>

<!-- STEP 3 -->
<div class="step">
  <h5 class="mb-4">Previous Work Experience</h5>

  <label class="label">Previous Company *</label>
  <input required name="previous_company" class="input-line mb-4">

  <label class="label">Last Designation *</label>
  <input required name="last_designation" class="input-line mb-4">

  <label class="label">Key Responsibilities *</label>
  <textarea required name="responsibilities" class="input-line" style="min-height:120px"></textarea>
</div>

<!-- STEP 4 -->
<div class="step">
  <h5 class="mb-4">Salary & Expectations</h5>

  <label class="label">Previous Salary (Monthly / Annual) *</label>
  <input required name="previous_salary" class="input-line mb-4">

  <label class="label">Expected Salary *</label>
  <input required name="expected_salary" class="input-line mb-4">

  <label class="label">Notice Period *</label>
  <input required name="notice_period" class="input-line">
</div>

<!-- STEP 5 -->
<div class="step">
  <h5 class="mb-4">Education & Achievements</h5>

  <label class="label">Highest Qualification *</label>
  <input required name="qualification" class="input-line mb-4">

  <label class="label">University / Institution *</label>
  <input required name="institution" class="input-line mb-4">

  <label class="label">Key Achievements *</label>
  <textarea required name="achievements" class="input-line" style="min-height:120px"></textarea>
</div>

<!-- STEP 6 -->
<div class="step">
  <h5 class="mb-4">Resume & Verification</h5>

  <label class="label">Upload Resume (PDF, Max 2MB) *</label>
  <input required type="file"
         name="resume"
         accept=".pdf"
         class="form-control mb-3"
         onchange="validateFileSize(this)">

  <!-- TURNSTILE + SUBMIT -->
  <div class="d-flex justify-content-between align-items-center mt-4">

    <button type="button" id="prevBtnFinal" class="btn btn-outline-secondary">
      Back
    </button>
    
  </div>
  
    <div class="d-flex flex-column flex-md-row align-items-start gap-3 py-3">
      <div class="cf-turnstile"
           data-sitekey="0x4AAAAAACYxeVy2-1XkJsAC"
           data-callback="turnstileCallback"></div>

      <input type="hidden" name="cf-turnstile-response" id="cfToken">

      <button id="submitBtn"
        type="submit"
        class="btn btn-dark px-4 py-2 rounded-pill d-block d-md-inline-block mt-3"
        disabled
        style="opacity:.5;cursor:not-allowed;">
  Submit
</button>

    </div>
</div>

<!-- NAV -->
<div class="d-flex justify-content-between mt-5">
  <button type="button" id="prevBtn" class="btn btn-outline-secondary" disabled>
    Back
  </button>
  <button type="button" id="nextBtn" class="btn btn-dark">
    Next
  </button>
</div>

</form>
</div>
</section>

<script>
    
const steps=document.querySelectorAll('.step');
const progress=document.getElementById('progressBar');
let current=0;

function update(){
  steps.forEach((s,i)=>s.classList.toggle('active',i===current));
  document.getElementById('prevBtn').style.display=current===steps.length-1?'none':'inline-block';
  document.getElementById('nextBtn').style.display=current===steps.length-1?'none':'inline-block';
  document.getElementById('prevBtn').disabled=current===0;
  progress.style.width=((current+1)/steps.length)*100+'%';
}

document.getElementById('nextBtn').onclick=()=>{if(current<steps.length-1){current++;update();}};
document.getElementById('prevBtn').onclick=()=>{if(current>0){current--;update();}};
document.getElementById('prevBtnFinal').onclick=()=>{current--;update();};

function validateFileSize(input){
  if(input.files[0]?.size>2*1024*1024){
    alert("Resume must be under 2MB");
    input.value="";
  }
}

function turnstileCallback(token){
  document.getElementById('cfToken').value=token;
  const btn=document.getElementById('submitBtn');
  btn.disabled=false;
  btn.style.opacity=1;
  btn.style.cursor="pointer";
}
</script>

<?php include __DIR__ . '/Global/footer.php'; ?>