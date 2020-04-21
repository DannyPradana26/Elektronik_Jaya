<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$type = $_POST['type'];
$harga = $_POST['harga'];


 
// update data ke database
mysqli_query($koneksi,"update produk set nama='$nama', type='$type', harga='$harga' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:elektronik.php");
 
?>