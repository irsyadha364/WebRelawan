<?php
    include "koneksi.php";
    session_start();

    $date = date("Y-m-d H:i:s");

    $username = $_SESSION['username'];

    $query="INSERT INTO absensi SET username='$username', jam_masuk='$date'";
    mysqli_query($koneksi, $query);
    header("location:absen.php");
?>