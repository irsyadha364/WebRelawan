<?php
include 'koneksi.php';
$tanggal		= $_POST['tanggal'];
$ambulance		= $_POST['ambulance'];
$giat		    = $_POST['giat'];
$jenis_giat    	= $_POST['jenis_giat'];
$alamat			= $_POST['alamat'];
$waktu			= $_POST['waktu'];
$personil		= $_POST['personil'];
$apd			= $_POST['apd'];
$pelapor		= $_POST['pelapor'];
$query="INSERT INTO kegiatan SET tanggal='$tanggal',ambulance='$ambulance',giat='$giat'
,jenis_giat='$jenis_giat',alamat='$alamat',waktu='$waktu',personil='$personil',apd='$apd'
,pelapor='$pelapor'";
mysqli_query($koneksi, $query);
header("location:kegiatan.php");
?>