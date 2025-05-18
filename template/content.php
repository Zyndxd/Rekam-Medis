<main class="main">

<!-- Hero Section -->
<section id="Home" class="hero section">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Selamat Datang di Sistem Rekam Medis</h1>
        <p>Optimalkan pelayanan kesehatan dengan manajemen data pasien yang terintegrasi.</p>
        <div class="d-flex">
          <a href="#about" class="btn-get-started">Get Started</a>
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="assets/assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Rekam Medis</h2>
        <p>Kelola data pasien, dokter, dan tindakan medis secara digital dan terintegrasi.</p>
      </div><!-- End Section Title -->

      <div class="container">

      <div class="row gy-4 align-items-stretch">
<?php if (in_array("pasien", $_SESSION['admin_akses'])) { ?>
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex flex-column align-items-center justify-content-center text-center position-relative">
                <i class="bi bi-person-circle"></i>
              <h4><a href="Pasien.php" class="stretched-link">Pasien</a></h4>
              <p>Kelola data pasien dengan mudah dan cepat untuk pelayanan yang lebih baik.</p>
            </div>
          </div><!-- End Service Item -->
<?php } ?>
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex flex-column align-items-center justify-content-center text-center position-relative">
                <i class="bi bi-person-lines-fill"></i>
              <h4><a href="" class="stretched-link">Dokter</a></h4>
              <p>Atur jadwal dan profil dokter dengan sistem yang terintegrasi</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex flex-column align-items-center justify-content-center text-center position-relative">
                <i class="bi bi-capsule"></i>
              <h4><a href="" class="stretched-link">Obat</a></h4>
              <p>Pantau dan kelola stok obat secara efisien dalam satu sistem.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex flex-column align-items-center justify-content-center text-center position-relative">
                <i class="bi bi-hospital"></i>
              <h4><a href="" class="stretched-link">Poliklinik</a></h4>
              <p>Kelola informasi poliklinik, layanan, dan tenaga medis dalam satu tampilan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex flex-column align-items-center justify-content-center text-center position-relative">
              <i class="bi bi-clipboard2-pulse-fill"></i>
              <h4><a href="" class="stretched-link">Tindakan</a></h4>
              <p>Kelola informasi poliklinik, layanan, dan tenaga medis dalam satu tampilan.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->
