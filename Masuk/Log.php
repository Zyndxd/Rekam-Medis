<?php

include('../koneksi/koneksi.php');

$Email = $_POST['email'];
$Password = $_POST['password'];

if (!empty($Email) && !empty($Password)) {

    $sql = "SELECT * FROM Register WHERE Email = '$Email'";
    $hasil = mysqli_query($connection, $sql);

    if (mysqli_num_rows($hasil) > 0) {
        $user = mysqli_fetch_assoc($hasil);
        
        if (password_verify($Password, $user['Password'])) {
            header("Location: ../index.php");
            exit();
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Email tidak terdaftar.";
    }
} else {
    echo "Data masih kosong.";
}

?>
