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
    
    <!-- Contact Section -->
    <section id="pasien" class="pasien section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Input Data Pasien</h2>
        <p>Menginput Data Pasien </p>
      </div><!-- End Section Title -->

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-7">
          <form action="koneksi/Dpasien.php" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-12">
                <label for="nm_pasien"><h4>Nama Pasien</h4></label>
                  <input type="text" name="nm_pasien" class="form-control" placeholder="Nama Pasien" required>
                </div>

                <div class="col-md-12">
                  <label for="j_kel"><h4>Jenis Kelamin</h4></label>
                  <input type="text" name="j_kel" class="form-control" placeholder="Laki-laki/Perempuan" required>
                </div>

                <div class="col-md-12">
                  <label for="agama"><h4>Agama</h4></label>
                  <input type="text" name="agama" class="form-control" placeholder="Agama" required>
                </div>

                <div class="col-md-12">
                <label for="alamat"><h4>Alamat</h4></label>
                  <textarea name="alamat" rows="2" class="form-control" placeholder="Alamat" required></textarea>
                </div>

                <div class="col-md-12">
                <label for="tgl-lhr"><h4>Tanggal Lahir</h4></label>
                  <input type="date" name="tgl_lhr" class="form-control" placeholder="Tanggal Lahir" required>
                </div>

                <div class="col-md-12">
                <label for="usia"><h4>Usia</h4></label>
                  <input type="number" name="usia" class="form-control" placeholder="Usia" required>
                </div>

                <div class="col-md-12">
                <label for="no_telp"><h4>Nomor Telepon</h4></label>
                  <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon" required>
                </div>

                <div class="col-md-12">
                <label for="nm_kk"><h4>Nama Kepala Keluarga</h4></label>
                  <input type="text" name="nm_kk" class="form-control" placeholder="Nama Kepala Keluarga" required>
                </div>

                <div class="col-md-12">
                <label for="hub_kel"><h4>Hubungan Keluarga</h4></label>
                  <input type="text" name="hub_kel" class="form-control" placeholder="Hubungan Keluarga" required>
                </div>

                <div class="col-md-12">
                  <div class="loading">Loading...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Data berhasil dikirim!</div>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit">Simpan Data Pasien</button>
                </div>

                <div class="text-center mt-4">
                  <a href="Pasien.php" class="btn-kembali">← Kembali</a>
                </div>
              </div>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

    <?php include('template/footer.php') ?>  