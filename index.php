<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<h2>LOGIN</h2>
	<br/>
	
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Username dan password salah. Coba lagi!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Silakan login untuk mengakses halaman!";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</body>
</html>