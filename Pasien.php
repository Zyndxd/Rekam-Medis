<?php 
include('template/header.php'); 
  if (!in_array("pasien", $_SESSION['admin_akses'])) {
    echo "
    <div class='container section-title' data-aos='fade-up'>
    <h2>Kamu Tidak Punya Akses</h2>
    </div>
    ";
    include('template/footer.php');
    exit();
  }
?>
  <!-- Features Section -->
  <section id="features" class="features section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Pasien</h2>
  <p>Data Pasien</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4 justify-content-center">

    <div class="col-lg-3 col-md-4 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <a href="TDpasien.php" class="features-item-link">
            <div class="features-item">
                <i class="bi bi-eye" style="color: #ffbb2c;"></i>
                <h3>Lihat Data</h3>
            </div>
        </a>

    </div><!-- End Feature Item -->

    <div class="col-lg-3 col-md-4 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <a href="inputPasien.php" class="features-item-link">
            <div class="features-item">
                <i class="bi bi-input-cursor" style="color: #5578ff;"></i>
                <h3>Input Data</h3>
            </div>
        </a>
    </div><!-- End Feature Item -->
        
  </div>

</div>
<div class="text-center mt-4" data-aos="fade-up" data-aos-delay="300">
  <a href="index.php" class="btn-kembali">← Kembali</a>
</div>

</section><!-- /Features Section -->
<?php include('template/footer.php') ?>