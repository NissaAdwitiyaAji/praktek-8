<?php 
include 'koneksi1.php';
    if (isset($_POST['submit'])) {
        $nama_ayah = $_POST['nama_ayah'];
        $tahun_lahir = $_POST['tahun_lahir'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $penghasilan_bulanan = $_POST['penghasilan_bulanan'];
        $kebutuhan_khusus = $_POST['kebutuhan_khusus'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dataayah (nama_ayah, tahun_lahir, pendidikan, pekerjaan, penghasilan_bulanan, kebutuhan_khusus)
                                  VALUES ('$nama_ayah', '$tahun_lahir', '$pendidikan', '$pekerjaan', '$penghasilan_bulanan', '$kebutuhan_khusus')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya lengkapi formulir data ibu!'); window.location.href='formdataibu.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data gagal ditambahkan!');";
        }
      }
?>