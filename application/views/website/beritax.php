<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Digical - <?= $title ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('') ?>assets/img/logo/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/') ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/') ?>assets/css/berita.css" rel="stylesheet">

</head>
<style>
    .dropdown-toggle::after {
        content: none;
    }

    .dropdown-menu a {
        color: black;
    }

    .dropdown-menu i {
        color: lightgray;
        margin-right: 10px;
    }

    .dropdown-menu a:active {
        background-color: #1fac96;
        color: white;
    }
</style>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="<?= base_url('website'); ?>">Digical</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="<?= base_url('website') ?>">Beranda</a></li>
                <li><a class="nav-link scrollto active" href="<?= base_url('website/berita') ?>">Berita</a></li>
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

<div class="content-wrapper">
    <div class="container">


<?php foreach ($berita->articles as $news) { ?>        
        <div class="row">
            <div class="col-lg-12 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="<?= $news->urlToImage ?>" alt="thumb" class="img-fluid" />
                                    </div>
                                    <div class="badge-positioned">
                                        <span class="badge badge-danger font-weight-bold">Flash news</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8  grid-margin">
                                <h2 class="mb-2 font-weight-600">
                                    <a href="<?= $news->url ?>"><?= $news->title ?></a>
                                </h2>
                                <div class="fs-13 mb-2">
                                    <?= $news->publishedAt ?>
                                </div>
                                <p class="mb-0">
                                    <?= $news->description ?>
                                </p>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

        
</div>
<main id="main">

</main><!-- End #main -->