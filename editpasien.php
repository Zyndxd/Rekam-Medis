

<?php
include 'koneksi/koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit();
}

$no_pasien = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM pasien WHERE no_pasien='$no_pasien'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}

if (isset($_POST['update'])) {
    $nama       = $_POST['nm_pasien'];
    $jk         = $_POST['j_kel'];
    $agama      = $_POST['agama'];
    $alamat     = $_POST['alamat'];
    $tgl_lhr    = $_POST['tgl_lhr'];
    $usia       = $_POST['usia'];
    $telp       = $_POST['no_telp'];
    $kk         = $_POST['nm_kk'];
    $hub_kel    = $_POST['hub_kel'];

    $update = mysqli_query($connection, "UPDATE pasien SET 
        nm_pasien='$nama',
        j_kel='$jk',
        agama='$agama',
        alamat='$alamat',
        tgl_lhr='$tgl_lhr',
        usia='$usia',
        no_telp='$telp',
        nm_kk='$kk',
        hub_kel='$hub_kel'
        WHERE no_pasien='$no_pasien'");

    if ($update) {
        header("Location: TDpasien.php?status=sukses_edit");
        exit();
    } else {
        echo "Gagal update data.";
    }
}
?>

<?php include('template/header.php') ?>

<div class="container section-title" data-aos="fade-up">
<h2>Edit Data Pasien</h2>
</div>

<div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="row gy-4">
          <form method="POST" action="">
            <div class="mb-3">
              <label>No Pasien</label>
              <input type="text" name="no_pasien" class="form-control" value="<?= $data['no_pasien']; ?>" readonly>
            </div>
            <div class="mb-3">
              <label>Nama Pasien</label>
              <input type="text" name="nm_pasien" class="form-control" value="<?= $data['nm_pasien']; ?>" required>
            </div>
            <div class="mb-3">
              <label>Jenis Kelamin</label>
              <select name="j_kel" class="form-control" required>
                <option value="Laki-laki" <?= $data['j_kel'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                <option value="Perempuan" <?= $data['j_kel'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
              </select>
            </div>
            <div class="mb-3">
              <label>Agama</label>
              <input type="text" name="agama" class="form-control" value="<?= $data['agama']; ?>">
            </div>
            <div class="mb-3">
              <label>Alamat</label>
              <textarea name="alamat" class="form-control"><?= $data['alamat']; ?></textarea>
            </div>
            <div class="mb-3">
              <label>Tanggal Lahir</label>
              <input type="date" name="tgl_lhr" class="form-control" value="<?= $data['tgl_lhr']; ?>">
            </div>
            <div class="mb-3">
              <label>Usia</label>
              <input type="number" name="usia" class="form-control" value="<?= $data['usia']; ?>">
            </div>
            <div class="mb-3">
              <label>No Telepon</label>
              <input type="text" name="no_telp" class="form-control" value="<?= $data['no_telp']; ?>">
            </div>
            <div class="mb-3">
              <label>Nama Kepala Keluarga</label>
              <input type="text" name="nm_kk" class="form-control" value="<?= $data['nm_kk']; ?>">
            </div>
            <div class="mb-3">
              <label>Hubungan Keluarga</label>
              <input type="text" name="hub_kel" class="form-control" value="<?= $data['hub_kel']; ?>">
            </div>
            <button type="submit" name="update" class="btn btn-success">Simpan Perubahan</button>
            <a href="TDpasien.php" class="btn btn-secondary">Kembali</a>
          </form>
        </body>
  </form>
</body>
</html>

<?php include('template/footer.php') ?>