<?php
include "header.php";
?>
<title>Coffee Shop</title>
<div class="card" align="center">
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Type</th>
      <th scope="col">Harga</th>
    </tr>
	<?php 
		include 'koneksi.php';
		$produk = mysqli_query($koneksi,"SELECT * FROM produk");
		$no = 1;		
		while($d = mysqli_fetch_array($produk)){
			?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['type']; ?></td>
      <td><?php echo $d['harga']; ?></td>
    </tr>
	<?php 
		}
		?>
  </tbody>
</table>
  </div>
</div>

<?php
include "footer.php";
?>