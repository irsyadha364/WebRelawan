<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Inputan Data</title>
	<link rel="stylesheet" href="absen.css">
</head>
<body>
	<div class="navbar">
            <a class="link" href="absen.php">Absensi</a>
            <a class="link" href="kegiatan.html">Kegiatan</a>
            <a class="link" href="hari.php">Hari Efektif</a>
            <a class="link" href="karyawan.php">Karyawan</a>
        <div class="dropdown">
            <button class="dropbtn">Laporan</button>
            <div class="dropdown-content">
                <a href="paramedic.html">Data Kegiatan</a>
                <a href="evakuasi.html">Data Absensi</a>
            </div>
        </div> 
        <a class="link" href="cuti.php">Cuti & Izin</a>
        <button type="submit" class="logoutbtn" value="logout"> <a class="logoutlink" href="logoutProcess.php"> LogOut </a></button>
    </div><br>

	<form action="hariProcess.php" method="post">
        <div class="form">
            <h1>Hari Efektif</h1><br><br><br>
        <p>
            <label>Bulan:</label>
            <input type="text" name="bulan" placeholder="Bulan..." />
        </p>
        <p>
            <label>Tahun:</label>
            <input type="text" name="tahun" placeholder="Tahun..." />
        </p>
         <p>
            <label>Jumlah Hari:</label>
            <input type="number" name="hari" placeholder="Hari..." />
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