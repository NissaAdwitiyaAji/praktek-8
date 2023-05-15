<?php 
include 'koneksi1.php';
    if (isset($_POST['submit'])) {
        $nopendaftaran = $_POST['nopendaftaran'];
        $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
        $tanggal_masuk_sekolah = $_POST['tanggal_masuk_sekolah'];
        $nis = $_POST['nis'];
        $nomor_peserta_ujian= $_POST['nomor_peserta_ujian'];
        $apakah_pernah_paud = $_POST['apakah_pernah_paud'];
        $apakah_pernah_tk = $_POST['apakah_pernah_tk'];
        $no_seri_skhun_sebelumnya = $_POST['no_seri_skhun_sebelumnya'];
        $no_seri_ijazah_sebelumnya = $_POST['no_seri_ijazah_sebelumnya'];
        $hobi = $_POST['hobi'];
        $citacita = $_POST['citacita'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO registrasi (nopendaftaran, jenis_pendaftaran, tanggal_masuk_sekolah, nis, nomor_peserta_ujian, apakah_pernah_paud, apakah_pernah_tk, no_seri_skhun_sebelumnya,   no_seri_ijazah_sebelumnya, hobi, citacita) VALUES ('$nopendaftaran', '$jenis_pendaftaran', '$tanggal_masuk_sekolah', '$nis', '$nomor_peserta_ujian', '$apakah_pernah_paud,'$apakah_pernah_tk', '$no_seri_skhun_sebelumnya', '$no_seri_ijazah_sebelumnya', '$hobi', '$citacita')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya lengkapi formulir data diri!'); window.location.href='datapribadi.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data gagal ditambahkan!');";
        }
      }
?>