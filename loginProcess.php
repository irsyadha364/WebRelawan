<?php
    include "koneksi.php";

    $username = $_POST['nama'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $check = mysqli_num_rows($result);
    if($check > 0){
        session_start();
        $_SESSION['username'] = $username;     
        $_SESSION['nama'] = $row['nama'];     
        $_SESSION['login'] = true;
        $_SESSION['sebagai'] = $row['sebagai'];
        
        if ($row['sebagai'] == "admin") {
            header('Location:hari.php');
        }else{
            header('Location:absen.php');
        }
     
    } else {
        echo "<script>alert('The username or password you entered is incorrect. Please try again.'); window.location.href='loginRelawan.html'</script>";    
    }
?>