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
    <h1>Data Absensi</h1>
    <table border="1" width="100%" style="text-align: center">
        <tr>
            <th>NO</th><th>ANGGOTA</th><th>JAM MASUK</th><th>JAM PULANG</th>
            <?php
                include 'koneksi.php';
                $absensi = mysqli_query($koneksi, "SELECT * from absensi ab INNER JOIN user u ON ab.username = u.username ORDER BY ab.username ");
                $no=1;
                foreach ($absensi as $row) {
                    echo "<tr>
                        <td>$no</td>
                        <td>".$row['nama']."</td>
                        <td>".$row['jam_masuk']."</td>
                        <td>".$row['jam_pulang']."</td>
                        </tr>";
                    $no++;
                }
            ?>
    </table>
</body>
</html>