<?php
include '../aset/footer.php';
?>

<?php

include '../koneksi.php';
include '../aset/header.php';
include '../aset/footer.php';

$id = $_GET["id_odp"];

$query = mysqli_query($kon, "SELECT * FROM tes WHERE 
							id_odp = '$id'");
$data = mysqli_fetch_assoc($query);

?>

<div class="container">
	<div class ="row mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width: 100%;">
				<div class="card-header" style="width:100%;">
					<h2 class="card-tittle"><i class="fas fa-user-edit"></i>Edit Data ODP</h2>
				</div>
				<div class="card-body">

				<form action="update_data.php" method="post">

				<table class="table">
					<input type="hidden" name="id_odp" value="<?= $data['id_odp']; ?>">
					<tr>
						<td>Nama ODP</td>
						<td><input style="width: 100%" type="text" name="nama_odp" value="<?= $data['nama_odp']; ?>" required></td>
					</tr>
					<tr>
						<td>Gejala</td>
						<td><input  style="width: 100%" type="text" name="gejala" value="<?= $data['gejala']; ?>" required></td>
					</tr>
					<tr>
						<td>Tanggal Cek</td>
						<td><input style="width: 100%" type="text" name="tanggal_cek" value="<?= $data['tanggal_cek']; ?>" required></td>
					</tr>
									
					<tr>
						<th></th>
						<th><input type="submit" class="btn btn-primary" name="simpan" value="Simpan"></th>
					</tr>

				</table>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>	
			</center>
</body>
</html>
