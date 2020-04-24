<?php
include '../koneksi.php';

if(isset($_POST['simpan']))
{
	$nama_odp = $_POST['nama_odp'];
	$umur_odp = $_POST['umur_odp'];
	$alamat_odp = $_POST['alamat_odp'];
	$suhu_odp = $_POST['suhu_odp'];

	$sql = "INSERT INTO data_odp (nama_odp, umur_odp, alamat_odp, suhu_odp) VALUES ('$nama_odp', '$umur_odp', '$alamat_odp', '$suhu_odp')";

	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);

	if($count == 1)
	{
		header("Location: data-odp.php");
	}
	else{
		header("Location: tambah-data.php");
	}
}
else
{
	header("Location: tambah-data.php");
}
?>
