<?php
include 'koneksi.php';
$id			= $_POST['id'];
$Nama		= $_POST['Nama'];
$jkel		= $_POST['jkel'];
$Email		= $_POST['Email'];
$Alamat		= $_POST['Alamat'];
$Kota		= $_POST['Kota'];
$Pesan		= $_POST['Pesan'];
$query="INSERT INTO mahasiswa SET id='$id',Nama='$Nama',jkel='$jkel',Email='$Email',Alamat='$Alamat',Kota='$Kota',Pesan='$Pesan'";
mysqli_query($koneksi, $query);
header("location:index.php");
?>