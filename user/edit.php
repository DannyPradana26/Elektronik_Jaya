<?php
include "header.php";
?>
<head>
<title>Elektronik Jaya</title>
</head>
<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from beli where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
<form method="post" action="update.php">
<div class="card" align="center">
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
	  <th scope="col">Nama Barang</th>
      <th scope="col">Type</th>
	  <th scope="col">Beli</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>
	  <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
	  </td>
	  <td>
	  <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
	  </td>
	  <td>
	  <input type="text" name="type" value="<?php echo $d['type']; ?>">
	  </td>
	   <td>
	  <input type="number" name="beli" value="<?php echo $d['beli']; ?>">
	  </td>
      <td>
		<input type="submit" value="Update">
	  </td>
    </tr>
  </tbody>
</table>
  </div>
</div>
</form>
<?php 
	}
	?>
<?php
include "footer.php";
?>