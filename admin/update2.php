<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$type = $_POST['type'];
$beli = $_POST['beli'];

 
// update data ke database
mysqli_query($koneksi,"update beli set nama='$nama', type='$type', beli='$beli' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:pesanan.php");
 
?>