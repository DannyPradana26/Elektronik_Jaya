<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$type = $_POST['type'];
$beli = $_POST['beli'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into beli values('','$nama','$type','$beli')");
 
// mengalihkan halaman kembali ke index.php
header("location:keranjang.php");
 
?>