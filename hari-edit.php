<?php
include 'koneksi.php';
$id_bulan	= $_GET['id_bulan'];
$hari_efektif	= mysqli_query($koneksi, "select * from hari_efektif where id_bulan='$id_bulan'");
$row		= mysqli_fetch_array($hari_efektif);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Laporan Kegiatan</title>
	<link rel="stylesheet" href="absen.css">
</head>
<body>

	<form action="editHari.php" method="post">
        <div class="form">
            <h1>Hari Efektif</h1><br><br><br>
        <p>
        	<input type="hidden" value="<?php echo $row['id_bulan'];?>" name="id_bulan">
        </p>
        <p>
            <label>Bulan:</label>
            <input type="text" name="bulan" value="<?php echo $row['bulan'];?>" />
        </p>
        <p>
            <label>Tahun:</label>
            <input type="text" name="tahun" value="<?php echo $row['tahun'];?>" />
        </p>
         <p>
            <label>Jumlah Hari:</label>
            <input type="number" name="hari" value="<?php echo $row['jumlah_hari'];?>" />
        </p>
		<a href="hari.php">Kembali ></a>
        <br><br><br><br><br><br><br><br>
    	
        <div class="navbar">
            <button type="submit" class="kegiatanbtn" value="simpan">SUBMIT</button>
        </div><br>
        </div>
    </form> 
    <footer><p>@Copyright IrsyadhaAR 2021</p></footer>
</body>
</html>