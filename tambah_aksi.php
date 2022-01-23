<?php

// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hobby = $_POST['hobby'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into uas_web1 values('','$nama','$jenis_kelamin','$hobby','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
