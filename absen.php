<!DOCTYPE html>
<html>
    <head>
        <title>Time Right Now</title>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js">
        </script>
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
    if($_SESSION['login']){ ?>
        <br><h1>Welcome, <?php echo $_SESSION['nama']; ?> !</h1>
    <?php } ?>

    <h1 id='time'></h1><br><br><br>

    <div class='absen'>
    <form action="jamMasukProcess.php " align="left">
        <button value='submit' class='btn_absen'>Jam Masuk</button>
    </form>

    <form action="jamPulangProcess.php" align="right">
        <button value='submit' class='btn_absen'>Jam Pulang</button>
    </form>
    </div><br>

    <table style="width:100%; ">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Jam Masuk</th>
            <th>Jam Pulang</th>
            <th>Keterangan</th>
        </tr>
        
    <?php
        include "koneksi.php";
        $username = $_SESSION['username'];
        $query = "SELECT * FROM absensi INNER JOIN user 
        ON absensi.username = user.username WHERE absensi.username LIKE '%$username%'";
        $result = mysqli_query($koneksi, $query);
        $no = 1;
        
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td><?php 
        if($row['jam_masuk'] == NULL){
            $tanggal_pulang = date('Y-m-d', strtotime($row['jam_pulang']));
            echo $tanggal_pulang;
            ?>
            </td>
            <td>-</td>
            <td><?php
            $jam_pulang = date('H:i:s', strtotime($row['jam_pulang']));
            echo $jam_pulang; ?></td>
            <td>
                <?php
                    $jam_check = date('H:i:s', strtotime('21:00:00'));
                    if($jam_pulang < $jam_check){
                        echo('Terlalu Cepat Pulang');
                    } else {
                        echo('Tepat Waktu');
                    }
                ?>
            </td>
            <?php
        } else if($row['jam_pulang'] == NULL){
            $tanggal_masuk = date('Y-m-d', strtotime($row['jam_masuk']));
            echo $tanggal_masuk;
            ?>
            </td>
            <td><?php
            $jam_masuk = date('H:i:s', strtotime($row['jam_masuk']));
            echo $jam_masuk; ?></td>
            <td>-</td>
            <td>
                <?php
                    $jam_check_masuk = date('H:i:s',strtotime('17:00:00'));
                    if($jam_masuk > $jam_check_masuk){
                        echo('Terlambat Masuk');
                    } else {
                        echo('Tepat Waktu');
                    }
                ?>
            </td>
            <?php
        } 
         ?>
    </tr>

    <?php
            $no++;
            }
        } 
    ?>
       
    </table>    
    <h2 id='result'></h2>
    <!-- <script src="js/myscript.js"></script> -->
    	<script src="js/myscript.js"></script><br><br><br><br>
    
    <footer><p>@Copyright IrsyadhaAR 2021</p>
	</footer>
  </body>
</html>
