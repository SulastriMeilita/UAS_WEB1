<!DOCTYPE html>
<html lang="en">
<head>
	<title>UAS PEMROGRAMAN1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>List Data Siswa</h1>
  <a href="add.php"> Add data baru </a>
  <tr>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Hobby</th>
	<th>Alamat</th>
	<th>Action</th>
</tr>
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM uas_web1");
while($datasiswa = mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $datasiswa ['nama'];?></td>
    <td><?php echo $datasiswa ['jenis_kelamin'];?></td>
    <td><?php echo $datasiswa ['hobby'];?></td>
    <td><?php echo $datasiswa ['alamat'];?></td>
    
    <td>
        <a href="edit.php?id=<?php echo $datasiswa['id']; ?>">EDIT</a>
        <a href="hapus.php?id=<?php echo $datasiswa ['id']; ?>">HAPUS</a>
    </td>
</tr>
<?php
}
?>
</body>
</html>
