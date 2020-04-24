<?php
include '../koneksi.php';

if(isset($_POST['simpan']))
{
	$nama_odp = $_POST['nama_odp'];
	$gejala = $_POST['gejala'];
	$tanggal_cek = $_POST['tanggal_cek'];

	$sql = "INSERT INTO tes (nama_odp, gejala, tanggal_cek) VALUES ('$nama_odp', '$gejala', '$tanggal_cek')";

	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);

	if($count == 1)
	{
		header("Location: index.php");
	}
	else{
		header("Location: tambah_tes.php");
	}
}
else
{
	header("Location: tambah_tes.php");
}
?>
