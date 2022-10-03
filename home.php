<?php

include("koneksi.php");

if(!isset($_SESSION["login"])){
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>homescreen</title>
  <link rel="stylesheet" href="css/home.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <span class="nav-item">Logo PT</span>
        </a></li>
        <li><a href="home.php">
          <i class="fas fa-home"></i>
          <span class="nav-item">home</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-low-vision"></i>
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
    <h1>Wellcome To Website PT Tertib Industri</h1>
  </div>

</body>
</html>
