<?php
$koneksi = mysqli_connect("localhost", "root", "", "covid");
session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
	header("location: index.php"); // Kita Redirect ke halaman welcome.php
}
?>

<html>
<head>
	<title></title>

</head>
<body background="5.jpeg">

	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center><h1>Form Login</h1>
		<?php
		// Cek apakah terdapat cookie dengan nama message
		if(isset($_COOKIE["message"])){ // Jika ada
			echo $_COOKIE["message"]; // Tampilkan pesannya
		}
		?>
	</div>
	<h1><font color="white">Halaman Login</font></h1>
	<br>
	
	<form method="post" action="proses-login.php">
		<table>
			<tr>
				<td><h2><font color="white">Username</font></h2></td>
				<td>:</td>
				<td><input type="text" name="nama_admin"></td>
			</tr>
			<tr>
				<td><h2><font color="white">Password</font></h2></td>
				<td>:</td>
				<td><input type="password" name="password_admin"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><h2><input type="submit" value="LOGIN"></h2></td>
			</tr>
		</table>			
	</form>
</body>
</html>
