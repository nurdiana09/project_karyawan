<?php

include("koneksi.php");
global $koneksi;

if (!isset($_SESSION["login"])){
  header("Location: login.php");
}else {
  $id=$_SESSION["login"];
  $tz = 'Asia/Jakarta';
  $dt = new DateTime("now", new DateTimeZone($tz));
  $timestamp = $dt->format('G:i:s');
  $user = query("SELECT * FROM karyawan WHERE id_karyawan='$id'");
  $absenUser = query("SELECT * FROM absensi WHERE id_karyawan='$id'");
  $absensi = mysqli_query($koneksi,"SELECT * FROM absensi WHERE id_karyawan='$id'");
  if (isset($_POST["submit"])) {
    absen($_POST,$id); 
  }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Absensi</title>
  <link rel="stylesheet" href="css/absen.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <!-- <img src="img/PT. Tertib Industri.png"> -->
          <span class="nav-item">Logo PT</span>
        </a></li>
        <li><a href="home.php">
          <i class="fas fa-home"></i>
          <span class="nav-item">home</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-database"></i>
          <span class="nav-item">Slip Gaji</span>
        </a></li>
        <li><a href="absen.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Absensi</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-user-circle"></i>
          <span class="nav-item">Profile</span>
        </a></li>

        <li><a href="login.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <!-- absen -->
    <div class="isi">
        <div class="absen">
            <h1>Silahkan Isi Absen</h1>
            <form action="" method="POST">
                <!-- <div class="title">
                  <h1>Silahkan Isi absen</h1>
                </div> -->
                <?php foreach($user as $key) : ?>
                    <div class="input-box">
                    <label for="">Nama</label>
                    <input type="text" placeholder="Masukan Username" name="nama" value="<?= $key["nama"] ?>">
                  </div>
                  <div class="input-box">
                    <label for="">nip</label>
                    <input type="text" placeholder="masukan nip" name="nip" value="<?= $key["nip"] ?>">
                  </div>
                  <div class="input-box">
                    <label for="">Tanggal</label>
                    <input type="text" placeholder="" name="tanggal" value="<?= date("Y-m-d") ?>">
                  </div>
                  <div class="input-box">
                    <label for="">Waktu</label>
                    <input type="text" placeholder="" name="waktu" value="<?= $timestamp ?>">
                  </div>
                <?php endforeach; ?>
                <div class="btn-submit">
                  <button name="submit" type="submit">Absen</button>
                </div>
            </form>
        </div>
        <section class="attendance">
        <div class="attendance-list">
          <h1>confirm</h1>
          <?php if(mysqli_num_rows($absensi) == 1) : ?>
            <?php foreach($absenUser as $absen) : ?>
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>NIP</th>
                  <th>Tanggal</th>
                  <th>Waktu Absensi</th>
                  <th>Status</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td><?= $absen["nama"] ?></td>
                  <td><?= $absen["nip"] ?></td>
                  <td><?= $absen["absen_tanggal"] ?></td>
                  <td><?= $absen["absen_waktu"] ?></td>
                  <td><?= $absen["absen_status"] ?></td>
                  <td><button>back</button></td>
                </tr>
              </tbody>
             <?php endforeach; ?>
            <?php endif; ?>
          </table>
        </div>
      </section>
    </div> 
  </div>

</body>
</html>
