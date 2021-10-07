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
        <h1>Data Anggota</h1>
        <table border="1" style="text-align: center" width="100%">
            <tr>
                <th>NO</th><th>USERNAME</th><th>NAMA</th><th>TANGGAL LAHIR</th><th>GOLONGAN DARAH</th><th>ALAMAT</th><th>NO. HANDPHONE</th>
                <th>PEKERJAAN</th><th>SEBAGAI</th>
                
                <?php
                    if($_SESSION['sebagai'] == 'admin'){ 
                ?>
                    <th>ACTION</th></tr>

                <?php 
                    }

                    include 'koneksi.php';
                    $user = mysqli_query($koneksi, "SELECT * from user");
                    $no=1;
                    foreach ($user as $row) {
                        echo "<tr>
                            <td>$no</td>
                            <td>".$row['username']."</td>
                            <td>".$row['nama']."</td>
                            <td>".$row['tanggal']."</td>
                            <td>".$row['goldar']."</td>
                            <td>".$row['alamat']."</td>
                            <td>".$row['handphone']."</td>
                            <td>".$row['pekerjaan']."</td>
                            <td>".$row['sebagai']."</td>";
                        if ($_SESSION['sebagai'] == 'admin') {
                            echo "<td><a href='karyawan-edit.php?username=$row[username]'>Edit</a>
                                <a href='deleteKaryawan.php?username=$row[username]'>Delete</a>
                            </td>"; 
                        }
                            echo "</tr>";
                        $no++;
                    }
                ?>
        </table>
</body>
</html>