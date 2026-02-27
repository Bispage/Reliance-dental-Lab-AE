<?php include __DIR__ . '/Global/header.php'; ?>

<?php
$pageTitle = "Crown & Bridge – Fixed Prosthetics";

$breadcrumb = [
    ["label" => "Home", "url" => "default.php"],
    ["label" => "Products", "url" => ""],
    ["label" => "Crown & Bridge", "url" => ""],
];

include __DIR__ . '/Global/page-title.php';
?>

<section class="py-5 bg-light">
<div class="container py-4">

    <div class="text-center mb-5">
        <h2 class="fw-bold">Crown & Bridge (Fixed)</h2>
        <p class="text-muted">
            Precision-crafted fixed dental restorations from Reliance Dental Laboratory using advanced CAD/CAM technology and premium materials
        </p>
    </div>

    <div class="row g-4">

        <!-- Zirconia Crowns & Bridges -->
        <div class="col-lg-4">
            <div class="card modern-card h-100">
                <img src="img/products/zirconia.jpg" class="card-img-top" alt="Zirconia Crowns and Bridges">

                <div class="card-body">
                    <h5 class="card-title">Zirconia Crowns & Bridges</h5>

                    <p class="card-text text-muted small">
                        High-strength all-ceramic restorations offering superior aesthetics, durability, and biocompatibility.
                    </p>

                    <ul class="small text-muted">
                        <li>Monolithic and layered zirconia options</li>
                        <li>High fracture resistance</li>
                        <li>Excellent marginal fit</li>
                        <li>Natural tooth-like translucency</li>
                        <li>CAD/CAM precision manufacturing</li>
                    </ul>

                    <span class="badge bg-primary-subtle text-primary me-2">Metal Free</span>
                    <span class="badge bg-primary-subtle text-primary">High Strength</span>
                </div>
            </div>
        </div>


        <!-- PFM Crowns & Bridges -->
        <div class="col-lg-4">
            <div class="card modern-card h-100">
                <img src="img/products/pfm.png" class="card-img-top" alt="PFM Crowns and Bridges">

                <div class="card-body">
                    <h5 class="card-title">PFM Crowns & Bridges</h5>

                    <p class="card-text text-muted small">
                        Porcelain fused to metal restorations combining strength of metal with natural porcelain aesthetics.
                    </p>

                    <ul class="small text-muted">
                        <li>Strong metal coping foundation</li>
                        <li>Natural porcelain layering</li>
                        <li>Long-term durability</li>
                        <li>Excellent functional performance</li>
                        <li>Cost-effective restorative solution</li>
                    </ul>

                    <span class="badge bg-primary-subtle text-primary me-2">Proven Reliability</span>
                    <span class="badge bg-primary-subtle text-primary">Aesthetic Finish</span>
                </div>
            </div>
        </div>


        <!-- Full Metal Crowns -->
        <div class="col-lg-4">
            <div class="card modern-card h-100">
                <img src="img/products/metal.jpeg" class="card-img-top" alt="Full Metal Crowns">

                <div class="card-body">
                    <h5 class="card-title">Full Metal Crowns</h5>

                    <p class="card-text text-muted small">
                        Highly durable restorations ideal for posterior teeth requiring maximum strength and longevity.
                    </p>

                    <ul class="small text-muted">
                        <li>Precious and non-precious alloys</li>
                        <li>Excellent wear resistance</li>
                        <li>Precise marginal adaptation</li>
                        <li>Minimal tooth reduction required</li>
                        <li>Long clinical lifespan</li>
                    </ul>

                    <span class="badge bg-primary-subtle text-primary me-2">Maximum Durability</span>
                    <span class="badge bg-primary-subtle text-primary">Precision Fit</span>
                </div>
            </div>
        </div>




        <!-- Inlays & Onlays -->
        <div class="col-lg-4">
            <div class="card modern-card h-100">
                <img src="img/products/inlays.png" class="card-img-top" alt="Inlays and Onlays">

                <div class="card-body">
                    <h5 class="card-title">Inlays & Onlays</h5>

                    <p class="card-text text-muted small">
                        Conservative restorations designed to restore damaged teeth while preserving healthy structure.
                    </p>

                    <ul class="small text-muted">
                        <li>Zirconia, ceramic, and Metal options</li>
                        <li>Excellent marginal accuracy</li>
                        <li>Durable and aesthetic restorations</li>
                        <li>CAD/CAM fabricated precision</li>
                        <li>Long-term functional performance</li>
                    </ul>

                    <span class="badge bg-primary-subtle text-primary me-2">Conservative Treatment</span>
                    <span class="badge bg-primary-subtle text-primary">Precision Restorations</span>
                </div>
            </div>
        </div>


        <!-- Temporary Crowns -->
        <div class="col-lg-4">
            <div class="card modern-card h-100">
                <img src="img/products/temp.png" class="card-img-top" alt="Temporary Crowns">

                <div class="card-body">
                    <h5 class="card-title">Temporary Crowns</h5>

                    <p class="card-text text-muted small">
                        High-quality provisional restorations designed to protect teeth during treatment phases.
                    </p>

                    <ul class="small text-muted">
                        <!--<li>PMMA and composite materials</li>-->
                        <li>Comfortable and precise fit</li>
                        <li>Durable provisional strength</li>
                        <li>Natural aesthetic appearance</li>
                        <li>CAD/CAM milled or printed</li>
                    </ul>

                    <span class="badge bg-primary-subtle text-primary me-2">Provisional Solution</span>
                    <span class="badge bg-primary-subtle text-primary">Fast Delivery</span>
                </div>
            </div>
        </div>


    </div>


    <!-- CTA Section -->
 

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
