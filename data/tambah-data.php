<?php 
$koneksi = mysqli_connect("localhost", "root", "", "covid");

if(isset($_POST['sumbit'])){
	$nama_odp = $_POST['nama_odp'];
	$umur_odp = $_POST['umur_odp'];
	$alamat_odp = $_POST['alamat_odp'];
	$suhu_odp = $_POST['suhu_odp'];

	$query = ("INSERT INTO data_odp VALUES ('', '$nama_odp', '$umur_odp', '$alamat_odp', '$suhu_odp')");
	$data = mysqli_query($kon, $query);

	var_dump($data);
}
?>

<?php
include '../aset/header.php';
?>

<div class="container">
 <div class="row mt-4">
  <div class="col-md-9">
   <div class="card">
    <div class="card-header">
    <h2>Tambah Data ODP</h2>
		</div>
    <div class="card-body">
         <form method="post" action="proses-tambah.php">
                <div class="form-group">
                 <label for="data_odp">Nama ODP</label>
                 <input type="text" class="form-control" name="nama_odp" id="nama_odp" placeholder="Masukkan nama">
                </div>

                <div class="form-group">
                 <label for="data_odp">Umur ODP</label>
                 <input type="number" class="form-control" name="umur_odp" id="umur_odp" placeholder="Masukkan umur">
                </div>

                <div class="form-group">
                 <label for="data_odp">Alamat ODP</label>
                 <input type="text" class="form-control" name="alamat_odp" id="alamat_odp" placeholder="Masukkan alamat">
                </div>

                <div class="form-group">
                 <label for="data_odp">Suhu ODP</label>
                 <input type="text" class="form-control" name="suhu_odp" id="suhu_odp" placeholder="Masukkan suhu">
                </div>

                 </select>
                </div>
                
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                 
      </form>

