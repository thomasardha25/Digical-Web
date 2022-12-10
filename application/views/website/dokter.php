<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="<?= base_url('website'); ?>">Digical</a></h1>


        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="<?= base_url('website') ?>">Beranda</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('website/berita') ?>">Berita</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('website/gejala') ?>">Gejala</a></li>
                <li><a class="nav-link scrollto active" href="<?= base_url('website/dokter') ?>">Dokter</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="dropdown">
            <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #1fac96; border: none; width: 70px; margin-left: 20px; border-radius: 50px;"> -->
            <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: white; border: none; margin-left: 20px;">
                <img class="rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="30px">
            </button>
            <ul class="dropdown-menu shadow animated--grow-in" aria-labelledby="dropdownMenuButton1" style="border: none;">
                <li>
                    <a class="dropdown-item small" href="<?= base_url('user'); ?>">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profil Saya
                    </a>
                </li>
                <div class="dropdown-divider" style="opacity: 0.5"></div>
                <li>
                    <a class="dropdown-item small" href="<?= base_url('auth/logout') ?>">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>

    </div>
</header><!-- End Header -->


<main id="main">

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
        <div class="container">

            <div class="section-title">
                <h2>Dokter</h2>
                <p>Konsultasi Dengan Dokter Siaga Kami</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="<?= base_url('assets/'); ?>assets/img/doctors/abdullah.jpeg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Muhammad Abdullah Alwahdi</h4>
                            <span>Dokter Umum</span>
                            <p>Dokter umum adalah seorang dokter yang berfokus untuk menangani gejala dan penyakit pada pasien secara umum</p>
                            <div class="social">
                                <a href="https://wa.me/082112459616"><i class="ri-whatsapp-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="<?= base_url('assets/'); ?>assets/img/doctors/timothy.jpeg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Timothy Ardhaneswara</h4>
                            <span>Dokter Kulit</span>
                            <p>Dokter kulit adalah dokter yang fokus menangani beragam masalah pada kesehatan kulit , baik pria maupun wanita</p>
                            <div class="social">
                                <a href="https://wa.me/082112459616"><i class="ri-whatsapp-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 offset-lg-3">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="<?= base_url('assets/'); ?>assets/img/doctors/subkhan.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Subhan Avina Dewanto</h4>
                            <span>Dokter saraf</span>
                            <p>Dokter saraf atau neurologis adalah dokter spesialis yang mendiagnosis dan mengobati masalah yang berkaitan dengan otak dan sistem saraf</p>
                            <div class="social">
                                <a href="https://wa.me/082112459616"><i class="ri-whatsapp-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Doctors Section -->

</main><!-- End #main -->