<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];   
   $sql = "SELECT * FROM admin WHERE username = '$username'";
   $query = $koneksi->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
    header('location:formregister.php');
   } else {
     if($password <> $hasil['password']) {
        header('location:index.php');
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:home.php');
     }
   }
?>