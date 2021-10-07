<?php
include 'koneksi.php';
$id_bulan		= $_POST['id_bulan'];
$bulan			= $_POST['bulan'];
$tahun			= $_POST['tahun'];
$hari			= $_POST['hari'];
$query="UPDATE hari_efektif SET bulan='$bulan',tahun='$tahun',jumlah_hari='$hari' where id_bulan='$id_bulan'";
mysqli_query($koneksi, $query);
header("location:hari.php");
?>