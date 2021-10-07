<?php
include 'koneksi.php';
$username			= $_POST['username'];
$nama			    = $_POST['nama'];
$tanggal		    = $_POST['tanggal'];
$goldar     	    = $_POST['goldar'];
$alamat			    = $_POST['alamat'];
$handphone			= $_POST['handphone'];
$agama			    = $_POST['agama'];
$status_perkawinan	= $_POST['status_perkawinan'];
$pekerjaan			= $_POST['pekerjaan'];
$kewarganegaraan    = $_POST['kewarganegaraan'];
$sebab			    = $_POST['sebab'];
$password			= $_POST['password'];

$query="INSERT INTO user SET username='$username',nama='$nama',tanggal='$tanggal'
,goldar='$goldar',alamat='$alamat',handphone='$handphone',agama='$agama',status_perkawinan='$status_perkawinan'
,pekerjaan='$pekerjaan',kewarganegaraan='$kewarganegaraan',sebab='$sebab',password='$password', sebagai='anggota'";
mysqli_query($koneksi, $query);
header("location:loginRelawan.html");
?>