<?php
include 'koneksi.php';
$username	= $_GET['username'];
$user	    = mysqli_query($koneksi, "select * from user where username='$username'");
$row		= mysqli_fetch_array($user);
function active_radio_button($value,$input){
    $result = $value==$input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Laporan Kegiatan</title>
	<link rel="stylesheet" href="absen.css">
</head>
<body>

	<form action="editKaryawan.php" method="post">
        <div class="form">
            <h1>Registrasi Anggota</h1>
        <p>
            <input type="hidden" value="<?php echo $row['username'];?>" name="username">
        </p>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $row['nama'];?>" />
        </p>
        <p>
            <label>Tanggal Lahir:</label><br><br>
            <input type="date" name="tanggal" value="<?php echo $row['tanggal'];?>" />
        </p><br>
        <p>
            <label>Golongan Darah:</label>
            <select name="goldar">
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="ab">AB</option>
                <option value="o">O</option>
            </select>
        </p><br>
        <p>
            <label>Alamat:</label>
            <input type="text" name="alamat" value="<?php echo $row['alamat'];?>"/>
        </p>
        <p>
            <label>Handphone:</label>
            <input type="text" name="handphone" value="<?php echo $row['handphone'];?>" />
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
            </select>
        </p><br>
        <p>
            <label>Status Perkawinan:</label><br><br>
            <label><input type="radio" name="status_perkawinan" value="kawin" /> Kawin</label>
            <label><input type="radio" name="status_perkawinan" value="belum kawin" /> Belum Kawin</label>
        </p><br>
        <p>
            <label>Pekerjaan:</label>
            <input type="text" name="pekerjaan" value="<?php echo $row['pekerjaan'];?>" />
        </p>
        <p>
            <label>Kewarganegaraan:</label><br><br>
            <label><input type="radio" name="kewarganegaraan" value="wni" /> WNI</label>
            <label><input type="radio" name="kewarganegaraan" value="wna" /> WNA</label>
        </p><br>
        <p>
            <label>Kenapa masuk Rescue020?:</label><br><br>
            <textarea name="sebab"><?php echo $row['sebab'];?></textarea>
        </p><br>
        <p>
            <label>Sebagai:</label><br><br>
            <label><input type="radio" name="sebagai" value="admin" /> Admin</label>
            <label><input type="radio" name="sebagai" value="anggota" /> Anggota</label>
        </p><br><br><br><br>
        <div class="navbar">
            <button type="submit" class="kegiatanbtn" value="simpan">SUBMIT</button>
        </div>
        </div>
    </form> 
        <footer><p>@Copyright IrsyadhaAR 2021</p>
        </footer>
</body>
</html>