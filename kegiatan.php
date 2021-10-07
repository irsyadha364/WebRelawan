<!DOCTYPE html>
<html>
<head>
	<title>Laporan Kegiatan</title>
	<link rel="stylesheet" href="absen.css">
</head>
<body>
	<div class="navbar">
            <?php
                session_start();
                if($_SESSION['sebagai'] == 'anggota'){ 
            ?>
            <a class="link" href="absen.php">Absensi</a>
            <a class="link" href="kegiatan.php">Kegiatan</a>
            <?php 
                }
            ?>
            <a class="link" href="hari.php">Hari Efektif</a>
            <a class="link" href="karyawan.php">Karyawan</a>
            <?php
                if($_SESSION['sebagai'] == 'admin'){ 
            ?>
            <div class="dropdown">
                <button class="dropbtn">Laporan</button>
                <div class="dropdown-content">
                    <a href="dataKegiatan.php">Data Kegiatan</a>
                    <a href="dataAbsen.php">Data Absensi</a>
                </div>
            </div> 
            <?php 
                }
            ?>
        <a class="link" href="cuti.php">Cuti & Izin</a>
        <button type="submit" class="logoutbtn" value="logout"> <a class="logoutlink" href="logoutProcess.php"> LogOut </a></button>
    </div><br>
    <img src="img/1.png" align="left">
    <img src="img/2.png" align="right">

    <form action="giatProcess.php" method="post"><br><br><br>
        <div class="form">
            <h1>Laporan Kegiatan</h1><br><br><br>
        <p>
            <label>Tanggal Kegiatan:</label>
            <input type="date" name="tanggal" />
        </p>
        <p>
            <label>Ambulance:</label>
            <select name="ambulance">
                <option value="unit1">Unit 1</option>
                <option value="unit2">Unit 2</option>
                <option value="unit3">Unit 3</option>
                <option value="unit4">Unit 4</option>
            </select>
        </p>
        <p>
            <label>Giat:</label>
            <select name="giat">
                <option value="rescue">Rescue</option>
                <option value="pelayanan">Pelayanan</option>
                <option value="yayasan">Yayasan</option>
                <option value="pelatihan">Pelatihan</option>
            </select>
        </p>
        <p>
            <label>Jenis Giat:</label>
            <input type="text" name="jenis_giat" placeholder="Kegiatan..." />
        </p>
        <p>
            <label>Alamat:</label>
            <input type="text" name="alamat" placeholder="Alamat tujuan..." />
        </p>
        <p>
            <label>Waktu Pemberangkatan:</label>
            <input type="time" name="waktu" />
        </p>
        <p>
            <label>Personil:</label><br>
            <textarea name="personil"></textarea>
        </p>
        <p>
            <label>APD dan Peralatan:</label><br>
            <textarea name="apd"></textarea>
        </p>
        <p>
            <label>Pembuat Laporan:</label>
            <input type="text" name="pelapor" placeholder="Kode personil..." />
        </p><br><br><br><br><br>
        <div class="navbar">
            <button type="submit" class="kegiatanbtn" value="simpan">SUBMIT</button>
        </div><br>
        </div>
    </form> 
        
    <footer><p>@Copyright IrsyadhaAR 2021</p></footer>
</body>
</html>