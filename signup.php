<?php

include("koneksi.php");

if(isset($_POST["submit"])){
    register($_POST);
}

?>


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<link rel="stylesheet" href="css/signup.css">
<body>
    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <h1>Sign up</h1>
                <hr>
                <label for="">Nama</label>
                <input type="text" placeholder="Masukan Nama" name="nama">
                <br>
                <label for="">NIP</label>
                <input type="text" placeholder="Masukan nip" name="nip">
                <br>
                <label for="jabatan">Jabatan</label>
                <select name="jabatan" id="jabatan">
                    <option value="manager">manager</option>
                    <option value="direktur">direktur</option>
                    <option value="sekretaris">sekretaris</option>
                    <option value="satpam">satpam</option>
                </select>
                <!-- <input type="text" placeholder="jabatan" name="jabatan"> -->
                <br>
                <label for="">Password</label>
                <input type="password" placeholder="Password" name="password">
                <br>
                <label for="">nomer telepon</label>
                <input type="text" placeholder="masukan nomor telpon" name="telp">
                <br>
                <button type="submit" name="submit">Register</button>
            </form>

        </div>

    </div>

</body>
</html>

