<?php 

include("koneksi.php");

if (isset($_POST["submit"])) {
    login($_POST);
}

?>


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi dan Penggajian</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <h1>login</h1>
                <hr>
                <p>Absensi dan Penggajian Karyawan</p>
                <p>PT Tertib Industri</p>
                <label for="">Username</label>
                <input type="text" placeholder="Masukan Username" name="nama">
                <label for="">Password</label>
                <input type="password" placeholder="Masukan Password" name="password">
                <button name="submit" type="submit">Login</button>
                <button class="tombolc" formaction="signup.php">Sign Up</button>
            </form>
        </div>
        <div class="right">
            <img src="img/Boss_Two Color.png">

        </div>
    </div>
</body>
</html>
