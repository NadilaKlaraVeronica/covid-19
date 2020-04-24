<?php
session_start(); // Start session nya

include "koneksi.php"; // Load file koneksi.php

$nama_admin = mysqli_real_escape_string($kon, $_POST['nama_admin']); // Ambil value username yang dikirim dari form
$password_admin = mysqli_real_escape_string($kon, $_POST['password_admin']); // Ambil value password yang dikirim dari form

// Buat query untuk mengecek apakah ada data user dengan username dan password yang dikirim dari form
$sql = mysqli_query($kon, "SELECT * FROM admin_petugas WHERE nama_admin='".$nama_admin."' AND password_admin='".$password_admin."'");
$data = mysqli_fetch_array($sql); // Ambil datanya dari hasil query tadi

// Cek apakah variabel $data ada datanya atau tidak
if( ! empty($data)){ // Jika tidak sama dengan empty (kosong)
	$_SESSION['nama_admin'] = $data['nama_admin']; // Set session untuk username (simpan username di session)
	
	setcookie("message","delete",time()-1); // Kita delete cookie message
	
	header("location: index.php"); // Kita redirect ke halaman welcome.php
}else{ // Jika $data nya kosong
	// Buat sebuah cookie untuk menampung data pesan kesalahan
	setcookie("message", "", time()+3600);
	
	header("location: index.php"); // Redirect kembali ke halaman index.php
}
?>
