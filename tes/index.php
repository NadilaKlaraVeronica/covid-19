<?php

include '../koneksi.php';

$sql = "SELECT * FROM tes ORDER BY nama_odp";

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
		<h2 class="card-title"><i class="fas fa-book"></i>Tes ODP</h2>
<br>
			<h3 class="card-title"><i class="fas fa-user-plus"></i><a href="tambah_tes.php">Tambah Data Tes ODP</a></h3> 
	 
	</div>
	<div class="card-body">
		
<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">Nama ODP</th>
			<th scope="col">Gejala</th>
			<th scope="col">Tanggal cek</th>
			
		</tr>
	</thead>
	<?php
	  $id = 1;
	  foreach ($index as $p ) { ?>
	  	<tr>
	  		<th scope="row"><?= $id ?></th>
	  		<td><?= $p['nama_odp'] ?></th>
	  		<td><?= $p['gejala'] ?></th>
	  		<td><?= $p['tanggal_cek'] ?></th>
	  	  		
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
