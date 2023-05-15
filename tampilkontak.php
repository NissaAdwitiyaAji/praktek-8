<h2>DATA KONTAK</h2>
<table border="1">
	<tr><th>ID</th><th>NAMA</th><th>JKEL</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
	<?php
	include 'koneksikontak.php';
	$kontak = mysqli_query($koneksi, "SELECT * from kontak");
	$no=1;
	foreach ($kontak as $row){
		
		echo "<tr>
		<td>$no</td>
		
		<td>".$row['Nama']."</td>
		<td>".$row['jkel']."</td>
		<td>".$row['Email']."</td>
		<td>".$row['Alamat']."</td>
		<td>".$row['Kota']."</td>
		<td>".$row['Pesan']."</td>
		</tr>";
		$no++;
	}
	?>
</table>
