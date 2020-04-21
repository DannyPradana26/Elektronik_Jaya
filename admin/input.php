<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$type = $_POST['type'];
$harga = $_POST['harga'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into produk values('','$nama','$type','$harga')");
 
// mengalihkan halaman kembali ke index.php
header("location:elektronik.php");
 
?>