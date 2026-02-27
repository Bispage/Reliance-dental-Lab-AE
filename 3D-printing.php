
<?php include __DIR__ . '/Global/header.php'; ?>

<?php
$pageTitle = "3D Printing";

$breadcrumb = [
    ["label" => "Home", "url" => "default.php"],
    ["label" => "Products", "url" => ""],
    ["label" => "Digital Dentistry", "url" => ""],
    ["label" => "3D Printing", "url" => ""]
];

include __DIR__ . '/Global/page-title.php';

?>

<section class="py-5 bg-light">
<div class="container py-4">

    <div class="text-center mb-5">
        <h2 class="fw-bold">Dental 3D Printing – Services & Machinery</h2>
        <p class="text-muted">Advanced additive manufacturing solutions from Reliance Dental Laboratory – Sharjah</p>
    </div>

    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-lg-4">
            <div class="card modern-card h-100">
                <img src="img/products/3DM.png" class="card-img-top" alt="3D Printing Services">

                <div class="card-body">
                    <h5 class="card-title">Professional 3D Printing Services</h5>

                    <p class="card-text text-muted small">
                        High-precision dental 3D printing services delivering accurate, fast, and reliable solutions for clinics and dental professionals.
                    </p>

                    <ul class="small text-muted">
                        <li>Same-day production capability</li>
                        <li>High resolution dental prints</li>
                        <li>Biocompatible materials</li>
                        <li>Open STL file acceptance</li>
                        <li>Cost-effective digital workflow</li>
                    </ul>

                    <span class="badge bg-primary-subtle text-primary me-2">Fast Turnaround</span>
                    <span class="badge bg-primary-subtle text-primary">High Precision</span>
                </div>
            </div>
        </div>


        <!-- Card 2 -->
        <div class="col-lg-4">
            <div class="card modern-card h-100">
                <img src="img/products/3dp.jpg" class="card-img-top" alt="Dental Models">

                <div class="card-body">
                    <h5 class="card-title">3D Printed Dental Models</h5>

                    <p class="card-text text-muted small">
                        Accurate dental study and working models printed directly from digital impressions with micron-level precision.
                    </p>

                    <ul class="small text-muted">
                        <li>Orthodontic study models</li>
                        <li>Clear aligner models</li>
                        <li>Crown and bridge working models</li>
                        <li>Implant planning models</li>
                        <li>High surface detail reproduction</li>
                    </ul>

                    <span class="badge bg-primary-subtle text-primary me-2">Digital Models</span>
                    <span class="badge bg-primary-subtle text-primary">Lab Accuracy</span>
                </div>
            </div>
        </div>


        <!-- Card 3 -->
        <div class="col-lg-4">
            <div class="card modern-card h-100">
                <img src="img/products/cad-0.jpg" class="card-img-top" alt="Surgical Guides">

                <div class="card-body">
                    <h5 class="card-title">Implant Surgical Guides</h5>

                    <p class="card-text text-muted small">
                        Precisely printed surgical guides designed for accurate implant placement and predictable clinical outcomes.
                    </p>

                    <ul class="small text-muted">
                        <li>Fully guided implant surgery</li>
                        <li>CBCT integrated planning</li>
                        <li>High-strength biocompatible resin</li>
                        <li>Custom patient-specific design</li>
                        <li>Enhanced surgical accuracy</li>
                    </ul>

                    <span class="badge bg-primary-subtle text-primary me-2">Implant Solutions</span>
                    <span class="badge bg-primary-subtle text-primary">Guided Surgery</span>
                </div>
            </div>
        </div>


        <!-- Card 4 -->
        <!--<div class="col-lg-4">-->
        <!--    <div class="card modern-card h-100">-->
        <!--        <img src="img/products/3dt.jpg" class="card-img-top" alt="Temporary Restorations">-->

        <!--        <div class="card-body">-->
        <!--            <h5 class="card-title">3D Printed Temporaries</h5>-->

        <!--            <p class="card-text text-muted small">-->
        <!--                Durable and aesthetic temporary crowns, bridges, and restorations produced using advanced dental 3D printing resins.-->
        <!--            </p>-->

        <!--            <ul class="small text-muted">-->
        <!--                <li>PMMA-based temporary crowns</li>-->
        <!--                <li>Long-span temporary bridges</li>-->
        <!--                <li>Immediate chairside solutions</li>-->
        <!--                <li>Natural tooth shades</li>-->
        <!--                <li>Smooth surface finish</li>-->
        <!--            </ul>-->

        <!--            <span class="badge bg-primary-subtle text-primary me-2">Aesthetic Temporaries</span>-->
        <!--            <span class="badge bg-primary-subtle text-primary">Quick Delivery</span>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->


        <!-- Card 5 – Printing Machinery -->
        <div class="col-lg-4">
            <div class="card modern-card h-100">
                <img src="img/products/3dpm.jpg" class="card-img-top" alt="3D Printing Machinery">

                <div class="card-body">
                    <h5 class="card-title">Dental 3D Printing Machinery</h5>

                    <p class="card-text text-muted small">
                        Reliance Dental Laboratory utilizes and supplies professional-grade dental 3D printing equipment for modern digital labs.
                    </p>

                    <ul class="small text-muted">
                        <li>SLA / DLP dental printers</li>
                        <li>High-speed production units</li>
                        <li>Automated calibration systems</li>
                        <li>Industrial-grade build platforms</li>
                        <li>Reliable post-processing units</li>
                        <li>End-to-end printing ecosystem</li>
                    </ul>

                    <span class="badge bg-primary-subtle text-primary me-2">Professional Equipment</span>
                    <span class="badge bg-primary-subtle text-primary">Lab Technology</span>
                </div>
            </div>
        </div>


        <!-- Card 6 – Materials & Standards -->
        <div class="col-lg-4">
            <div class="card modern-card h-100">
                <img src="img/products/smile.png" class="card-img-top" alt="3D Printing Materials">

                <div class="card-body">
                    <h5 class="card-title">Certified Materials & Quality</h5>

                    <p class="card-text text-muted small">
                        All 3D printed products are manufactured using internationally certified dental materials under strict quality protocols.
                    </p>

                    <ul class="small text-muted">
                        <li>CE and FDA approved resins</li>
                        <li>Biocompatible class materials</li>
                        <li>High strength engineering resins</li>
                        <!--<li>ISO compliant processes</li>-->
                        <li>Calibrated workflows</li>
                        <li>Traceable production system</li>
                    </ul>

                    <span class="badge bg-primary-subtle text-primary me-2">Medical Grade</span>
                    <span class="badge bg-primary-subtle text-primary">ISO Standards</span>
                </div>
            </div>
        </div>

    </div>


    <!-- CTA Section -->
    <!--<div class="text-center mt-5 pt-4">-->

    <!--    <h4 class="mb-3">Partner With Reliance Dental Labo LLC – Sharjah</h4>-->

    <!--    <p class="text-muted col-lg-8 mx-auto">-->
    <!--        Empower your dental practice with cutting-edge 3D printing services and advanced machinery solutions backed by expert technicians and reliable digital workflows.-->
    <!--    </p>-->

    <!--    <a href="contact.php" class="btn btn-primary btn-lg px-5">-->
    <!--        Send 3D Printing Case Now-->
    <!--    </a>-->
    <!--</div>-->

</div>


<style>
.modern-card {
    border: none;
    border-radius: 16px;
    overflow: hidden;
    transition: all .3s ease;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

.modern-card img {
    height: 220px;
    object-fit: cover;
}

.modern-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.modern-card .card-body {
    padding: 22px;
}
</style>

</section>



<?php include __DIR__ . '/Global/footer.php'; ?>
