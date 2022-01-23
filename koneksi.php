<?php

$koneksi = mysqli_connect("localhost", "root","","uas_web1");

//Check Koneksi

if( mysqli_connect_errno()){
    echo "Maaf Anda Gagal Untuk Terhubung : " . mysqli_connect_error();
}

?>
