<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="<?= base_url('website'); ?>">Digical</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">

            <ul>
                <li><a class="nav-link scrollto active" href="<?= base_url('website') ?>">Beranda</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('website/berita') ?>">Berita</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('website/gejala') ?>">Gejala</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('website/dokter') ?>">Dokter</a></li>
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
                        <i class="fas fa-user fa-sm fa-fw mr-2"></i>
                        Profil Saya
                    </a>
                </li>
                <div class="dropdown-divider" style="opacity: 0.5"></div>
                <li>
                    <a class="dropdown-item small" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <h1>Selamat datang di Digical</h1>
        <h2>Informasi Kesahatan Terlengkap</h2>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Kenapa Memilih Digical?</h3>
                        <p>
                            Digital Medical Information merupakan sebuah website yang memberikan informasi mengenai kesehatan,
                            berita seputar kesehatan dan juga informasi terkait gejala–gejala penyakit dan cara mencegah agar tidak
                            terkena penyakit tersebut.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bi bi-newspaper"></i>
                                    <h4>Berita</h4>
                                    <p>Bacalah berita-berita terkini mengenai dunia kesehatan</p>
                                    <div class="text-center">
                                        <a href="<?= base_url('website/berita'); ?>" class="more-btn">Lanjut Baca <i class="bx bx-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bi bi-list-ol"></i>
                                    <h4>Gejala</h4>
                                    <p>Ketahuilah gejala-gejala dari penyakit-penyakit yang ada</p>
                                    <div class="text-center">
                                        <a href="<?= base_url('website/gejala'); ?>" class="more-btn">Lanjut Baca <i class="bx bx-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bi bi-person-fill"></i>
                                    <h4>Dokter</h4>
                                    <p>Konsultasikan dirimu ke dokter-dokter siaga kami</p>
                                    <div class="text-center">
                                        <a href="<?= base_url('website/dokter'); ?>" class="more-btn">Lanjut Baca <i class="bx bx-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?= base_url('assets/') ?>assets/images/faces/face2.jpg" class="testimonial-img" alt="">
                                <h3>Dewi</h3>
                                <h4>Pengunjung</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Website nya sangat membantu dalam mencari informasi seputar kesehatan!!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?= base_url('assets/') ?>assets/images/faces/face10.jpg" class="testimonial-img" alt="">
                                <h3>Sarah</h3>
                                <h4>Pengunjung</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Website ini membuat saya menjadi tidak tertinggal berita tentang kesehatan saat ini, cool!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?= base_url('assets/') ?>assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena</h3>
                                <h4>Pengunjung</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Beritanya sangat up to date!!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?= base_url('assets/') ?>assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Budi</h3>
                                <h4>Pengujung</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Websitenya sangat user friendly, kerennn
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?= base_url('assets/') ?>assets/images/faces/face6.jpg" class="testimonial-img" alt="">
                                <h3>Toni</h3>
                                <h4>Pengunjung</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Website ini mempunyai tampilan yang menarik sehingga kami sebagai pengunjung
                                    nyaman untuk menjelajahi website ini.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- <section id="comment" class="comment">
        <div class="container">
            <div class="section-title">
                <h2>Komentar</h2>
                <p>Tinggalkan Komentar Disini</p>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form action="">
                        <textarea class="input-comment px-4 py-4 shadow" name="" id="" rows="10" placeholder="Tinggalkan komentar" style="width: 100%; border: #fff; border-radius: 0.5rem;"></textarea>
                        <button class="submit-comment">
                            Kirim komentar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

</main><!-- End #main -->