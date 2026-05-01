<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Gagan Parkaash</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="images/logo_footer.png">
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/stlye.css">
</head>

<body>
<section class="topbar">
  <div class="container d-flex justify-content-between align-items-center ">

    <div class="topbar_left ">
      <span class="mx-2"><a href="https://maps.app.goo.gl/zyFUAutULNLyekxs7" target="blank">
        <i class="fas fa-map-marker-alt" ></i>
        Sitto Road, Near Assumption Convent School, Abohar (152116), Punjab
      </a>
        
      </span>

      <span class="mx-2"><a href="tel:+918054550024"><i class="fas fa-phone-alt"></i>
        Contact Us +918054550024</a>
        
      </span>

      <span class="mx-2 text-decoration-none"><a href=""><i class="far fa-clock"></i>
        Open 24x7</a>
        
      </span>
    </div>

    <div class="topbar_right d-flex align-items-center ">
      <a class="d-flex justify-content-center align-items-center" href="https://www.facebook.com/gaganparkaashivf" target="blank"><i class="m-0 fab fa-facebook-f"></i></a>
      <a class="d-flex justify-content-center align-items-center" href="https://x.com/gphivf" target="blank"><i class="m-0  fa-brands fa-x-twitter"></i></a>
      <a class="d-flex justify-content-center align-items-center" href="https://www.instagram.com/gaganparkaashivf" target="blank"><i class="m-0 fab fa-instagram"></i></a>
    </div>

  </div>
</section>
    <!-- Navbar start  -->

    <section class="container-fluid cstm_navbar sticky-top">
        <div class="container">
            <nav class=" navbar navbar-expand-lg py-0">
                <div class="d-flex align-items-center brand_logo">
                    <div class="logo-wrapper d-flex align-items-center">
                        <a href="index.php"><img src="images/logo_web.png" alt="logo">
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav cstm_nav">
                        <li class="nav-item">
                            <a class="active show nav-link <?= ($currentPage == 'index') ? 'active' : '' ?>" href="index.php">Home</a>
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
                    <div class="d-flex  justify-content-start my-lg-0 my-2 ms-md-4">
                        <button class="primery_btn ms-lg-5 cstm_btn" onclick="location.href='appointment.php'">
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