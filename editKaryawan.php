<?php
include 'koneksi.php';
$username			= $_POST['username'];
$nama				= $_POST['nama'];
$tanggal			= $_POST['tanggal'];
$goldar				= $_POST['goldar'];
$alamat				= $_POST['alamat'];
$handphone			= $_POST['handphone'];
$agama				= $_POST['agama'];
$status_perkawinan	= $_POST['status_perkawinan'];
$pekerjaan			= $_POST['pekerjaan'];
$sebab				= $_POST['sebab'];
$sebagai			= $_POST['sebagai'];
$query="UPDATE user SET nama='$nama',tanggal='$tanggal',goldar='$goldar',alamat='$alamat',handphone='$handphone',
		agama='$agama',status_perkawinan='$status_perkawinan',pekerjaan='$pekerjaan',sebab='$sebab',sebagai='$sebagai' where username='$username'";
mysqli_query($koneksi, $query);
header("location:karyawan.php");
?>