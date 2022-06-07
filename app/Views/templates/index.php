<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $title; ?></title>
    <meta content="SatSet Website adalah website yang menyediakan jasa layanan pembuatan website mulai dari daftar list sampai pembuatan website custom" name="description">
    <meta content="Satset,jasa,pembuatan,website, murah" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/assets/img/Icon/icons8-lightning-bolt-color-glass-16.png" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>/assets/css/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.html"><img src="<?= base_url(); ?>/assets/img/Icon/icons8-lightning-bolt-color-glass-32.png" alt="" class="img-fluid"> &nbsp; Satset Website</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#paket">Paket Website</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#ulasan">ulasan</a></li>
                    <li><a class="nav-link scrollto" href="https://api.whatsapp.com/send?phone=6281936666423&text=Halo,%20saya%20mau%20bertanya%20tentang%20jasa%20pembuatan%20website" target="_blank">Hubungi Kami</a></li>
                    <li><a class="nav-link scrollto" href="#login">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <?= $this->renderSection('content'); ?>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row">

                            <div class="col-lg-5 footer-info">
                                <h4>About SatSet Website</h4>
                                <p>
                                    Satset Website adalah Website yang <br>
                                    menyediakan layanan jasa pembuatan <br>
                                    macam website mulai dari paket yang <br>
                                    tersedia hingga custom website</p>
                                <div class="social-links mt-3">
                                    <a href="https://id-id.facebook.com/fajaridn" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/fajaridn/" class="instagram" target="_blank"><i class="bi bi-instagram"></i></i></a>
                                    <a href="https://wa.me/6281936666423" class="whatsapp" target="_blank"><i class="bi bi-whatsapp"></i></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 footer-links">
                                <h4>Useful Links</h4>
                                <p> </p>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#paket">Paket Website</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#ulasan">Ulasan</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="https://wa.me/message/NWZAHPLLWVHSL1">Hubungi Kami</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#login">Login</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 footer-contact">
                                <h4>Contact Us</h4>
                                <p>
                                    Ketintang No.156<br>
                                    Surabaya, Jawa Timur<br>
                                    Indonesia <br>
                                    <strong>Phone : </strong><a href="telp:6281936666423">+62819-3666-6423</a><br>
                                    <strong>Email : </strong><a href="mailto:satsetwebsite@gmail.com">satsetwebsite@gmail.com</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SatSet Website</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by SatSet Website
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/assets/css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>
</body>

</html>