<?php
session_start();

if (!isset($_SESSION['user_username'])) {
    header("Location: login.php");
    exit();
}
?>
