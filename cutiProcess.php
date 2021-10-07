<?php
include 'koneksi.php';
$kode_anggota		= $_POST['kode_anggota'];
$nama				= $_POST['nama'];
$jabatan		    = $_POST['jabatan'];
$tanggal_mulai		= $_POST['tanggal_mulai'];
$tanggal_akhir		= $_POST['tanggal_akhir'];
$alasan				= $_POST['alasan'];
$keterangan			= $_POST['keterangan'];
$query="INSERT INTO cuti SET kode_anggota='$kode_anggota',nama='$nama',jabatan='$jabatan'
,tanggal_mulai='$tanggal_mulai',tanggal_akhir='$tanggal_akhir',alasan='$alasan',keterangan='$keterangan'";
mysqli_query($koneksi, $query);
header("location:cuti.php");
?>