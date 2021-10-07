<?php
include 'koneksi.php';
$bulan			= $_POST['bulan'];
$tahun			= $_POST['tahun'];
$hari			= $_POST['hari'];
$query="INSERT INTO hari_efektif SET bulan='$bulan',tahun='$tahun',jumlah_hari='$hari'";
mysqli_query($koneksi, $query);
header("location:hari.php");
?>