<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Pelayanan Desa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets/img/sipedes.png" rel="icon">
  <link href="<?= base_url(); ?>assets/img/sipedes.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="<?= base_url(); ?>assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="view_home.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/sipedes.png" alt="">
        <h1>SIPEDES<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="#"><span>Profil Desa</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a class="nav-link scrollto" href="#onfocus">Selayang Pandang</a>
              </li>
              <li>
                <a class="nav-link scrollto" href="#about">Visi & Misi</a>
              </li>
              <li>
                <a class="nav-link scrollto" href="#features">Program Kerja</a>
              </li>
              <li>
                <a class="nav-link scrollto" href="#cta">Struktur Organisasi</a>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Pelayanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="<?= base_url() ?>Formulir/Domisili">Surat Keterangan Domisili</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url() ?>Formulir/Usaha">Surat Keterangan Usaha</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url() ?>formulir/SKTM">Surat Keterangan Tidak Mampu</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url() ?>formulir/Kematian">Surat Keterangan Kematian</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url() ?>formulir">Suratku</a></li>
            </ul>
          </li>
          <a class="btn-getstarted scrollto" href="<?= base_url() ?>autentifikasi">Login Pegawai</a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <!-- <a class="btn-getstarted scrollto" href="index.html#about">Login RT</a> -->

    </div>
  </header><!-- End Header -->