<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide-1" data-bs-ride="carousel">
        <div class="carousel-item active" style="background-image: url(<?= base_url(); ?>/assets/img/background/ilya-pavlov-OqtafYT5kTw-unsplash.jpg)">
            <div class="carousel-container">
                <div class="container">
                    <h2>SatSet Website</h2>
                    <p>Melayani Jasa Pembuatan Berbagai Macam Website</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Daftar Paket Section ======= -->
<section id="paket" class="ulasan section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Paket</h2>
            <h3>Daftar Paket</h3>
            <p>Berikut ini adalah beberapa paket yang kami sediakan.</p>
        </div>

        <div class="row justify-content-center mx-3">

            <!-- Paket 1 -->

            <?php foreach ($daftarpaket as $dp) : ?>
                <div class="col-sm-3">
                    <div class="card text-center">
                        <h5 class="card-header bg-primary text-light fw-bold pt-4 pb-4">
                            <?= $dp['namapaket']; ?>
                        </h5>
                        <div class="card-body">
                            <h2 class="card-title fw-bold mt-3 mb-4">Rp.<?= number_format($dp['hargapaket']); ?></h2>
                            <p class="card-text"><?= $dp['deskripsi1']; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $dp['deskripsi2']; ?></li>
                            <li class="list-group-item"><?= $dp['deskripsi3']; ?></li>
                            <li class="list-group-item"><?= $dp['deskripsi4']; ?></li>
                            <li class="list-group-item"><?= $dp['deskripsi5']; ?></li>
                            <li class="list-group-item"><?= $dp['deskripsi6']; ?></li>
                            <li class="list-group-item"><?= $dp['deskripsi7']; ?></li>
                            <li class="list-group-item"><?= $dp['deskripsi8']; ?></li>
                            <li class="list-group-item"><?= $dp['deskripsi9']; ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="#Form" class="btn btn-primary rounded-pill my-2 px-4"> Order Sekarang </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
</section><!-- End Daftar Paket Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container-fluid">
        <div class="section-title">
            <h2>Portfolio</h2>
            <h3>Daftar Portofolio</h3>
            <p>Ini adalah beberapa Portofolio Web yang sudah kami kerjakan</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter=".all">All</li>
                    <li data-filter=".tokoonline">Toko Online</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container justify-content-center">
            <div class="col-lg-11">
                <div class="row justify-content-center">
                    <?php foreach ($portfolio as $dp) : ?>
                        <!-- Portfolio item -->
                        <!-- kurang gambar nya :C -->
                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item tokoonline">
                            <div class="portfolio-wrap border">
                                <img src="<?= base_url(); ?>/assets/img/portfolio/<?= $dp['gambar']; ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><?= $dp['nama']; ?></h4>
                                    <div class="portfolio-links">
                                        <a href="<?php echo $dp['link']; ?>" target="_blank" title="More Details"><i class="bi bi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End portfolio item -->
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Section -->

<!-- ======= Ulasan Section ======= -->
<section id="ulasan" class="ulasan section-bg">
    <div class="container-fluid">
        <div class="section-title">
            <h2>Ulasan</h2>
            <h3>Daftar Ulasan</h3>
            <p>Berikut ini adalah beberapa ulasan dari pelanggan kami.</p>
        </div>


        <div class="row justify-content-center mx-3">
            <?php foreach ($ulasan as $u) : ?>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/assets/ulasan/ulasan 0.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?= $u['nama']; ?></h5>
                            <p class="card-text text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></i></p>
                            <p class="card-text" style="font-size: 14px"><?= $u['deskripsiulasan']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>



        </div>

        <!-- End testimonial-item -->
    </div>
</section><!-- End Ulasan Section -->

<!-- ======= Form Section ======= -->
<section id="Form">
    <div class="justify-content-center">
        <?php if (session()->getFlashData('sukses')) : ?>
            <div class="alert alert-success solid alert-dismissible fade show" style="text-align: center;">
                <strong>Berhasil ! <?= session()->getFlashdata('sukses'); ?></strong>
                <button type="button" data-dismiss="alert" aria-label="Close">
                    <i class="bi bi-x-square"></i>
                </button>
            </div>
        <?php endif; ?>
        <div class="section-title">
            <h2>Form</h2>
            <h1 class="mt-2">Formulir</h1>
        </div>
        <div>
            <form action="<?= base_url() ?>/Home/TambahForm" class="container-sm" method="post">
                <?= csrf_Field() ?>
                <div class="mt-1 sm">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Masukkan Nama" name="inputNama">
                </div>
                <div class="mt-3 sm">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Masukkan Email" name="inputEmail">
                </div>
                <div class="mt-3 sm">
                    <label for="inputWA" class="form-label">Nomor WA</label>
                    <input type="text" class="form-control" id="inputWA" placeholder="Masukkan Alamat" name="inputWA">
                </div>
                <div class="mt-3 sm">
                    <label for="inputPaket" class="form-label">Paket</label>
                    <select id="inputPaket" class="form-select" name="inputPaket">
                        <option setActive>Blog Pribadi</option>
                        <option>Website Perusahaan</option>
                        <option>Toko Online</option>
                        <option>Website Donasi</option>
                    </select>
                </div>
                <div class="mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Form Ulasan -->
<section id="FormUlasan">
    <div class="justify-content-center">
        <?php if (session()->getFlashData('suksesulasan')) : ?>
            <div class="alert alert-success solid alert-dismissible fade show" style="text-align: center;">
                <strong>Berhasil ! <?= session()->getFlashdata('suksesulasan'); ?></strong>
                <button type="button" data-dismiss="alert" aria-label="Close">
                    <i class="bi bi-x-square"></i>
                </button>
            </div>
        <?php endif; ?>
        <div class="section-title">
            <h2>Form</h2>
            <h1 class="mt-2">Ulasan</h1>
        </div>
        <div>
            <form action="<?= base_url() ?>/Home/tambahulas" class="container-sm" method="post">
                <?= csrf_Field() ?>
                <div class="mt-1 sm">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="inputNamaUlas" placeholder="Masukkan Nama">
                </div>
                <div class="mt-3 sm">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Masukkan Email" name="inputEmailUlas">
                </div>
                <div class="mt-3 sm">
                    <label for="exampleFormControlTextarea1" class="form-label">Ulasan</label>
                    <textarea class="form-control" name="inputUlas" rows="3" placeholder="Masukkan Ulasan"></textarea>
                </div>
                <div class="mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Form Ulasan -->


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
<!-- End Form Section -->
<?= $this->endSection(); ?>