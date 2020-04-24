<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
	$id				= $_POST['id_odp'];
	$nama_odp		= $_POST['nama_odp'];
	$gejala			= $_POST['gejala'];
	$tanggal_cek 	= $_POST['tanggal_cek'];
	
	$query="UPDATE tes SET nama_odp='$nama_odp', gejala='$gejala', tanggal_cek='$tanggal_cek' WHERE id_odp= $id";

	$res 	= mysqli_query($kon, $query);
	$count	= mysqli_affected_rows($kon);

	if($res > 0){
		header("Location: index.php");
	}
}
