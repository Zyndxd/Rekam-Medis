<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php include('template/header.php') ?>

<section id="data-pasien" class="data-pasien section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Data Pasien</h2>
    <p>Berikut adalah daftar pasien yang telah terdaftar.</p>
  </div>

  <div class="container table-responsive" data-aos="fade-up" data-aos-delay="100">
    <table class="table table-hover custom-table">
      <thead class="table-primary text-center">
        <tr>
          <th>No</th>
          <th>No Pasien</th>
          <th>Nama Pasien</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Usia</th>
          <th>Telepon</th>
          <th>Nama KK</th>
          <th>Hub. Keluarga</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi/koneksi.php';

        if (!$connection) {
          die("Koneksi gagal: " . mysqli_connect_error());
        }

        $no = 1;
        $query = mysqli_query($connection, "SELECT * FROM pasien");

        while ($data = mysqli_fetch_array($query)) {
        ?>
          <tr class="text-center">
            <td><?= $no++; ?></td>
            <td><?= $data['no_pasien']; ?></td>
            <td><?= $data['nm_pasien']; ?></td>
            <td><?= $data['j_kel']; ?></td>
            <td><?= $data['agama']; ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><?= $data['tgl_lhr']; ?></td>
            <td><?= $data['usia']; ?></td>
            <td><?= $data['no_telp']; ?></td>
            <td><?= $data['nm_kk']; ?></td>
            <td><?= $data['hub_kel']; ?></td>
            <td>
              <a href="editpasien.php?id=<?= $data['no_pasien']; ?>" class="btn btn-sm btn-warning">Edit</a>
              <a href="hapuspasien.php?id=<?= $data['no_pasien']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <div class="text-center mt-4">
    <a href="Pasien.php" class="btn-kembali" data-aos="fade-up" data-aos-delay="200">← Kembali</a>
  </div>
</section>


<?php include('template/footer.php') ?>