<?php

$koneksi = mysqli_connect("localhost","root","","db_absen_gaji");
session_start();

function query($query){
    global$koneksi;
    $result = mysqli_query($koneksi, "$query");
    $rows= [];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row; 
    }
   return $rows;
}


function register($post) {
    global $koneksi;
    $nama = $post["nama"];
    $password = $post["password"];
    $jabatan = $post["jabatan"];
    $nip = $post["nip"];
    $telp = $post["telp"];
    mysqli_query($koneksi, "INSERT INTO karyawan VALUES('','$nama','$password','$jabatan','$nip','$telp')");
     if(mysqli_affected_rows($koneksi)) { 
        echo "
         <script >
            alert('Data telah berhasil di simpan, silahkan login');
            document.location.href = 'login.php';
         </script>
        ";
     }
}

 
function login($post){
    global $koneksi;
    $nama = $post["nama"];
    $password = $post["password"];
    $table = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE nama='$nama'");
    $rows = mysqli_fetch_assoc($table);
    $pass = $rows["password"];
    $id = $rows["id_karyawan"];
    if($password == $pass) {
        $_SESSION["login"] = $id;
        echo "
        <script >
           alert('login telah berhasil');
           document.location.href = 'home.php';
        </script>
       ";
    }else {
        echo "
        <script >
           alert('login gagal');
           document.location.href = 'login.php';
        </script>
       ";
    }
}

function absen($post,$id_karyawan){
    global $koneksi;
    $nama = $post["nama"];
    $nip = $post["nip"];
    $tanggal = $post["tanggal"];
    $waktu = $post["waktu"];

    mysqli_query($koneksi, "INSERT INTO absensi VALUES('','$id_karyawan', '$nama','$nip','$tanggal','$waktu','Hadir')");
}
?>