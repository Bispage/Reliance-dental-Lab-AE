  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
            <!-- Standard favicon -->
        <link rel="icon" type="image/png" href="./img/logo.avif">
        
        <!-- For older browsers -->
        <link rel="shortcut icon" href="./img/logo.avif">
        
        <!-- Apple Touch Icon -->
        <link rel="apple-touch-icon" href="./img/logo.avif">
        
        <!-- Android Chrome -->
        <link rel="icon" sizes="192x192" href="./img/logo.avif">
        <link rel="icon" sizes="512x512" href="./img/logo.avif">
        
        <!-- Microsoft Tiles -->
        <meta name="msapplication-TileImage" content="./img/logo.avif">
        <meta name="msapplication-TileColor" content="#ffffff">
        
        <!-- Theme Color -->
        <meta name="theme-color" content="#ffffff">

    
    
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>Sharjah, UAE</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 09am-5pm, Sun Closed</small>
                </div>
            <nav class="breadcrumb mb-0">
                <div class="ms-auto d-none d-lg-flex">
                    <a class="btn btn-sm-square btn-primary ms-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </nav>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-5"></i>
                    <div class="ms-3">
                        <!--<h5 class="text-white mb-0">Call Now</h5>-->
                        <span>+971 581 539 789</span>
                    </div>
                </div>

                <a href="default.php" class="navbar-brand">
                    <img src="img/logo.avif" alt="Reliance Dental Laboratory Logo" class="img-fluid" style="max-height: 60px;">
                </a>
                
                <div class="d-flex">
                    <i class="bi bi-envelope fs-5"></i>
                    <div class="ms-3">
                        <!--<h5 class="text-white mb-0">Mail Now</h5>-->
                        <span>sales@reliancedentallab.ae</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">

            <a href="default.php" class="navbar-brand d-lg-none">
                <img src="img/Logo.png" alt="Reliance Dental Laboratory Logo" class="img-fluid"
                    style="max-height: 60px;">
            </a>

            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">

                <div class="navbar-nav mx-auto text-center align-items-center px-4 py-2">

                    <a href="default.php" 
                       class="nav-item nav-link <?= ($currentPage == 'default.php') ? 'active' : ''; ?>">
                       Home
                    </a>

                    <a href="about.php" 
                       class="nav-item nav-link <?= ($currentPage == 'about.php') ? 'active' : ''; ?>">
                       About Us
                    </a>

                    <div class="nav-item dropdown d-lg-none">
                        <a href="#" class="nav-link dropdown-toggle <?= in_array($currentPage, ['products.php']) ? 'active' : ''; ?>" data-bs-toggle="dropdown">
                            Products
                        </a>
                        <div class="dropdown-menu bg-light rounded-3 m-0">
                            <a href="orthodontic.php" class="dropdown-item">Orthodontic Appliances</a>
                            <a href="Aligners.php" class="dropdown-item">Aligners</a>
                            <a href="Retainers.php" class="dropdown-item">Retainers</a>
                            
                            <a href="crowns.php" class="dropdown-item">Crowns & Bridges</a>
                            <a href="dentures.php" class="dropdown-item">Dentures</a>
                            <a href="Veneers.php" class="dropdown-item">Veneers</a>
                            
                            <a href="CAD-CAM.php" class="dropdown-item">CAD/CAM</a>
                            <a href="3D-printing.php" class="dropdown-item">3D Printing</a>
                            <a href="Digital-implants.php" class="dropdown-item">Digital Implants</a>
                            
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown position-static d-none d-lg-block">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            Products
        </a>

        <div class="dropdown-menu w-100 mega-menu-container p-4">
            <div class="row">

                <div class="col-lg-3">
                    <h6 class="mega-title">Orthodontics</h6>
                    <a href="orthodontic.php" class="dropdown-item">Orthodontic Appliances</a>
                    <a href="Aligners.php" class="dropdown-item">Aligners</a>
                    <a href="Retainers.php" class="dropdown-item">Retainers</a>
                </div>

                <div class="col-lg-3">
                    <h6 class="mega-title">Prosthetics</h6>
                    <a href="crowns.php" class="dropdown-item">Crowns & Bridges</a>
                    <a href="dentures.php" class="dropdown-item">Dentures</a>
                    <a href="Veneers.php" class="dropdown-item">Veneers</a>
                </div>

                <div class="col-lg-3">
                    <h6 class="mega-title">Digital Dentistry</h6>
                    <a href="CAD-CAM.php" class="dropdown-item">CAD/CAM</a>
                    <a href="3D-printing.php" class="dropdown-item">3D Printing</a>
                    <a href="Digital-implants.php" class="dropdown-item">Digital Implants</a>
                </div>

                <div class="col-lg-3 bg-light rounded p-3">
                    <h6 class="mega-title text-primary">Premium Solutions</h6>
                    <p class="small">
                        Advanced digital dental solutions with precision and fast delivery.
                    </p>
                    <a href="services.php" class="btn btn-primary btn-sm">View Services</a>
                </div>

            </div>
        </div>
    </div>
    

                    <!--<a href="services.php" -->
                    <!--   class="nav-item nav-link <?= ($currentPage == 'services.php') ? 'active' : ''; ?>">-->
                    <!--   Services-->
                    <!--</a>-->

                    <a href="career.php" 
                       class="nav-item nav-link <?= ($currentPage == 'career.php') ? 'active' : ''; ?>">
                       Career
                    </a>

                    <a href="contact.php" 
                       class="nav-item nav-link <?= ($currentPage == 'contact.php') ? 'active' : ''; ?>">
                       Contact
                    </a>

                </div>

            </div>

        </nav>
    </div>
</div>
<!-- Navbar End -->

<style>
    /* ===== Mega Menu Styles ===== */

@media (min-width: 992px) {

    .mega-menu-container {
        left: 0 !important;
        right: 0 !important;
        border-radius: 0 0 10px 10px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        border: none;
    }

    .mega-title {
        font-weight: 600;
        margin-bottom: 10px;
        color: #0d6efd;
    }

    .mega-menu-container .dropdown-item {
        padding: 6px 10px;
        font-size: 14px;
    }

    .navbar-nav {
        margin-left: auto !important; /* Align Right */
    }
}


/* ===== Mobile Hamburger Inner Margin ===== */

@media (max-width: 991px) {

    #navbarCollapse {
        margin-top: 10px;
        padding: 15px;
        border-radius: 10px;
        background: #ffffff;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .navbar-nav {
        text-align: right !important;
    }

}

</style>
