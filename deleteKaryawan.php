<?php
include 'koneksi.php';
$username	= $_GET['username'];
$query 		= "DELETE from user where username='$username'";
mysqli_query($koneksi, $query);
header("location:karyawan.php");
?>