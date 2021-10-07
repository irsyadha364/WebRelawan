<?php
include 'koneksi.php';
$id_bulan		= $_GET['id_bulan'];
$query="DELETE from hari_efektif where id_bulan='$id_bulan'";
mysqli_query($koneksi, $query);
header("location:hari.php");
?>