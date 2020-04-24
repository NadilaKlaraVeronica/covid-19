<?php

include '../koneksi.php';

$sql = "SELECT * FROM data_odp ORDER BY nama_odp";

$res = mysqli_query($kon, $sql);

$index = array();

while ($data = mysqli_fetch_assoc($res)){
	$index[] = $data;
}?>

<?php
include '../aset/header.php';
?>

<div class="container">
  <div class="row mt-4">
  	<div class="col-md">
  </div>
</div>
</div>
  	 
<div class="card">
	<div class="card-header">
		<h2 class="card-title"><i class="fas fa-book"></i>Data ODP</h2>
<br>
			<h3 class="card-title"><i class="fas fa-user-plus"></i><a href="tambah-data.php">Tambah Data ODP</a></h3> 
	</div>
	<div class="card-body">
		
<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama ODP</th>
			<th scope="col">Umur ODP</th>
			<th scope="col">Alamat ODP</th>
			<th scope="col">Suhu ODP</th>
		</tr>
	</thead>
	<?php
	  $id = 1;
	  foreach ($index as $p ) { ?>
	  	<tr>
	  		<th scope="row"><?= $id ?></th>
	  		<td><?= $p['nama_odp'] ?></th>
	  		<td><?= $p['umur_odp'] ?></th>
	  		<td><?= $p['alamat_odp'] ?></th>
	  		<td><?= $p['suhu_odp'] ?></th>
	  		
			<td>
	  			<a href="detail.php?id_odp=<?= $p['id_odp']; ?>" class="badge badge-success">Detail</a>
	  			<a href="edit.php?id_odp=<?= $p['id_odp']; ?>" class="badge badge-warning">Edit</a>
	  			<a href="hapus.php?id_odp=<?= $p['id_odp']; ?>" class="badge badge-danger">Hapus</a>
	  		</td>
	  	</tr>
	  	<?php
	  	$id++;

	  } ?>

</table>
	</div>
</div>  	 
  
  
<?php
include '../aset/footer.php';
?>
