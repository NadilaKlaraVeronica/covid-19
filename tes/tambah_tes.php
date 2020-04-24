<?php 
$koneksi = mysqli_connect("localhost", "root", "", "covid");

include '../aset/header.php';

if(isset($_POST['sumbit'])){
	$nama_odp = $_POST['nama_odp'];
	$gejala = $_POST['gejala'];
	$tanggal_cek = $_POST['tanggal_cek'];

	$query = ("INSERT INTO cek_suhu VALUES ('', '$nama_odp', '$gejala', '$tanggal_cek')");
	$data = mysqli_query($kon, $query);

	var_dump($data);
}
?>

<div class="container">
 <div class="row mt-4">
  <div class="col-md-9">
   <div class="card">
    <div class="card-header">
    <h2>Tambah Data Tes ODP</h2>
		</div>
    <div class="card-body">
         <form method="post" action="proses_tambah.php">
                <div class="form-group">
                 <label for="tes">Nama ODP</label>
                 <input type="text" class="form-control" name="nama_odp" id="nama_odp" placeholder="Masukkan nama">
                </div>

                <div class="form-group">
                 <label for="tes">Gejala</label>
                 <textarea name="gejala" id="gejala" class="form-control" placeholder="Masukkan gejala apa saja yang dirasakn OPD"></textarea>
                </div>

                <div class="form-group">
                 <label for="tes">Tanggal Cek</label>
                 <input type="text" class="form-control" name="tanggal_cek" id="tanggal_cek" placeholder="Masukkan tanggal cek">
                </div>

                 </select>
                </div>
                
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                 
      </form>

	</div>
   </div>
  </div>
 </div>
</div> 

</body>
</html>
