<?php 
include 'koneksi1.php';
    if (isset($_POST['submit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $nama_dusun = $_POST['nama_dusun'];
    $nama_kel = $_POST['nama_kel'];
    $kecamatan = $_POST['kecamatan'];
    $kode_pos = $_POST['kode_pos'];
    $tempat_tinggal = $_POST['tempat_tinggal'];
    $transportasi = $_POST['transportasi'];
    $no_hp = $_POST['no_hp'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $kpspkh = $_POST['kpspkh'];
    $nokpspkh = $_POST['nokpspkh'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $nama_negara = $_POST['nama_negara'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO pribadi (nama_lengkap, jkelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus,alamat, rt, rw, nama_dusun, nama_kel, kecamatan, kode_pos, tempat_tinggal, transportasi, no_hp, no_telp, email, kpspkh, nokpspkh, kewarganegaraan, nama_negara)
        VALUES ('$nama_lengkap', '$jkelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$berkebutuhan_khusus', '$alamat', '$rt', '$rw', '$nama_dusun', '$nama_kel', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$transportasi', '$no_hp', '$no_telp', '$email', '$kpspkh', '$nokpspkh', '$kewarganegaraan', '$nama_negara')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya lengkapi formulir data ayah!'); window.location.href='formdataayah.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data gagal ditambahkan!!');";
        }
      }
?>