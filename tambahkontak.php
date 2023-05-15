<!DOCTYPE html>
<html>
<head>
	<title>	Form Input</title>
</head>
<body>
		<h2> Tambah Kontak </h2>
		<form method="post" action="simpan.php">
			<table>
			<tr><td>id</td><td><input type="text" onkeyup="isi_otomatis()" name="id"></td></tr>
			<tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
			<tr><td>Jkel</td><td> 
				<input type="radio" name="jenis_kelamin" value="L">Laki laki
				<input type="radio" name="jenis_kelamin" value="P">Perempuan
				</td></tr>
			<tr><td>Email</td><td><input type="text" name="email"></td></tr>
			<tr><td>Alamat</td><td><input type="text" name="alamat"></td></tr>
			<tr><td>Kota</td><td><input type="text" name="kota"></td></tr>
			<tr><td>Pesan</td><td><input type="text" name="pesan"></td></tr>
			
			<tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
		</table>
	</form>
</body>
</html>


