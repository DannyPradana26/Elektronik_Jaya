<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Form Register</title>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:user/index.php'); }
?>
<div class="login">
	<p class="kotak_login">Register</p>
 
	<form action="registrasi.php" method="post">
		<label>username</label>
		<input type="text" name="username" class="form_login" placeholder=" Insert username ..">
 
		<label>Password</label>
		<input type="password" name="password" class="form_login" placeholder="insert Password ..">
		<div align="center">
		<input type="submit" class="tombol_login" value="Register">
        </div>
		<br/>
		<br/>
		<center>
			<a class="link" href="index.php">Back</a>
		</center>
	</form>
	
</div>