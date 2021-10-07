<!DOCTYPE html>
<html>
<head>
    <title>Surat Izin&Cuti</title>
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

    <?php 
        if($_SESSION['sebagai'] == 'anggota'){ 
    ?>
        <form action="cutiProcess.php" method="post"><br><br><br><br>
            <div class="form">
                <h1>Surat Izin & Cuti</h1><br><br><br>
            <p>
                <label>Kode Anggota:</label>
                <input type="text" name="kode_anggota" placeholder="Raider..." />
            </p>
            <p>
                <label>Nama:</label>
                <input type="text" name="nama" placeholder="Nama personil..." />
            </p>
             <p>
                <label>Jabatan:</label>
                <input type="text" name="jabatan" placeholder="Jabatan personil..." />
            </p>
            <p>
                <label>Tanggal Mulai:</label>
                <input type="date" name="tanggal_mulai" />
            </p>
            <p>
                <label>Tanggal Akhir:</label>
                <input type="date" name="tanggal_akhir" />
            </p>
            <p>
                <label>Alasan:</label><br>
                <textarea name="alasan"></textarea>
            </p>
            <p>
                <label>Keterangan:</label>
                <label><input type="radio" name="keterangan" value="izin" /> Izin</label>
                <label><input type="radio" name="keterangan" value="cuti" /> Cuti</label>
            </p><br>
            <div class="navbar">
                <button type="submit" class="kegiatanbtn" value="simpan">SUBMIT</button>
            </div><br>
            </div>
        </form> 
    <?php
        } else {
    ?>
        <h1>Data Cuti</h1>
        <table border="1" width="100%" style="text-align: center">
            <tr>
                <th>NO</th><th>KODE ANGGOTA</th><th>NAMA</th><th>JABATAN</th>
                <th>TANGGAL MULAI</th><th>TANGGAL AKHIR</th><th>ALASAN</th><th>KETERANGAN</th>
                <?php
                    include 'koneksi.php';
                    $cuti = mysqli_query($koneksi, "SELECT * from cuti");
                    $no=1;
                    foreach ($cuti as $row) {
                        echo "<tr>
                            <td>$no</td>
                            <td>".$row['kode_anggota']."</td>
                            <td>".$row['nama']."</td>
                            <td>".$row['jabatan']."</td>
                            <td>".$row['tanggal_mulai']."</td>
                            <td>".$row['tanggal_akhir']."</td>
                            <td>".$row['alasan']."</td>
                            <td>".$row['keterangan']."</td>
                            </tr>";
                        $no++;
                    }
                ?>
        </table> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php       
        }
    ?>
    <footer><p>@Copyright IrsyadhaAR 2021</p></footer>
</body>
</html>