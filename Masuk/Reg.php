<?php

include('../koneksi/koneksi.php');

$Nama = $_POST['nama'];
$Email = $_POST['email'];
$Password = $_POST['password'];

if (!empty($Nama) && !empty($Email) && !empty($Password)) {

    $HashedPassword = password_hash($Password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Register (Nama, Email, Password)
            VALUES ('$Nama', '$Email', '$HashedPassword')";
    
    $hasil = mysqli_query($connection, $sql);

    if ($hasil) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Data tidak dapat disimpan: " . mysqli_error($connection);
    }

} else {
    echo "Data masih kosong";
}

?>
