<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stlye/stlye.css">
    <link rel="icon" type="image/x-icon" href="images/logo_footer.png">
    <title>Gagan Parkaash</title>

</head>

<body>
    <section class="container-fulid cstm_head bg-primary d-flex justify-content-between">
        <div class=" d-flex justify-content-evenly">
            <a class="mx-4" href="https://maps.app.goo.gl/gFNReGiZCk1WMVqt6" target="blank"><i class="fa-solid fa-location-dot"></i>Sitto Road, Near Assumption Convent School, Abohar (152116), Punjab</a>
            <a class="mx-4" href="tel:+918054550024"><i class="fa-solid fa-phone"></i> Contact Us +91 8054550024</a>
            <h6 class="mx-4">Open 24x7</h6>
        </div>
        <div class="d-flex justify-content-center align-items-center px-1 ">
            <a href="https://www.facebook.com/gaganparkaashivf" target="blank"><i class="fa-brands fa-facebook mx-3"></i></a>
            <a href="https://www.instagram.com/gaganparkaashivf" target="blank"><i class="fa-brands fa-instagram mx-3"></i></a>
            <a href="https://x.com/gphivf" target="blank"><i class="text-white fa-brands fa-x-twitter"></i></a>   
        </div>
    </section>
    <!-- Navbar start  -->

    <section class="cstm_navbar sticky-ta">
        <div class="container">
            <nav class="navbar navbar-expand-lg py-0">
                <div class="d-flex align-items-center brand_logo">
                    <div class="logo-wrapper d-flex align-items-center">
                        <img src="images/logo_web.png" alt="logo" onclick="location.href='./index.php'">
                    </div>
                </div>
                <button class="navbar-toggler" id="mobileNavToggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="custom-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav cstm_nav">
                        <li class="nav-item">
                            <a class="nav-link <?= ($currentPage == 'index') ? 'active' : '' ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($currentPage == 'about') ? 'active' : '' ?>" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($currentPage == 'about') ? 'active' : '' ?>" href="our_serivces.php">Our Serivces</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($currentPage == 'gallery') ? 'active' : '' ?>" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($currentPage == 'contact') ? 'active' : '' ?>" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-end">

                        <button  class="primery_btn ms-lg-5 cstm_btn" onclick="location.href='appointment.php'">
                            <span>Appointment</span>
                        </button>
                    </div>

                </div>
            </nav>
        </div>


    </section>


    <!-- Navbar End -->


    <!-- <script src="js/javascript.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>