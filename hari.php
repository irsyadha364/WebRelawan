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
    <h1>Hari Efektif</h1>
    <table border="1" width="100%" style="text-align: center">
        <tr>
            <th>NO</th><th>BULAN</th><th>TAHUN</th><th>JUMLAH HARI</th>
            
            <?php
                if($_SESSION['sebagai'] == 'admin'){ 
            ?>
                <th>ACTION</th></tr>

            <?php 
                }

                include 'koneksi.php';
                $hari_efektif = mysqli_query($koneksi, "SELECT * from hari_efektif");
                $no=1;
                foreach ($hari_efektif as $row) {
                    echo "<tr>
                        <td>$no</td>
                        <td>".$row['bulan']."</td>
                        <td>".$row['tahun']."</td>
                        <td>".$row['jumlah_hari']."</td>";
                    if ($_SESSION['sebagai'] == 'admin') {
                        echo "<td><a href='hari-edit.php?id_bulan=$row[id_bulan]'>Edit</a>
                            <a href='deleteHari.php?id_bulan=$row[id_bulan]'>Delete</a>
                        </td>";    # code...
                    }
                        echo "</tr>";
                    $no++;
                }
            ?>
    </table>
    <?php
        if($_SESSION['sebagai'] == 'admin'){ 
    ?>
    <p> Belum punya data?
         <a href="hari-input.php">Input di sini</a>
    </p>
    <?php 
        }
    ?>
</body>
</html>