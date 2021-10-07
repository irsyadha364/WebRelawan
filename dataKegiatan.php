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
    <h1>Data Kegiatan</h1>
    <table border="1" width="100%" style="text-align: center">
        <tr>
            <th>NO</th><th>TANGGAL</th><th>AMBULANCE</th><th>GIAT</th>
            <th>JENIS GIAT</th><th>ALAMAT</th><th>WAKTU</th><th>PERSONIL</th>
            <th>APD</th><th>PELAPOR</th>
            <?php
                include 'koneksi.php';
                $kegiatan = mysqli_query($koneksi, "SELECT * from kegiatan");
                $no=1;
                foreach ($kegiatan as $row) {
                    echo "<tr>
                        <td>$no</td>
                        <td>".$row['tanggal']."</td>
                        <td>".$row['ambulance']."</td>
                        <td>".$row['giat']."</td>
                        <td>".$row['jenis_giat']."</td>
                        <td>".$row['alamat']."</td>
                        <td>".$row['waktu']."</td>
                        <td>".$row['personil']."</td>
                        <td>".$row['apd']."</td>
                        <td>".$row['pelapor']."</td>
                        </tr>";
                    $no++;
                }
            ?>
    </table>
</body>
</html>