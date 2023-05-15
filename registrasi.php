<?php
    include 'koneksi1.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR PESERTA DIDIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>

<?php
    $error_nopendaftaran = "";
    $error_jenis_pendaftaran = "";
    $error_tanggal_masuk_sekolah = "";
    $error_nis = "";
    $error_nomor_peserta_ujian = "";
    $error_apakah_pernah_paud = "";
    $error_apakah_pernah_tk = "";
    $error_no_seri_skhun_sebelumnya = "";
    $error_no_seri_ijazah_sebelumnya = "";
    $error_hobi = "";
    $error_citacita = "";

    $nopendaftaran = "";
    $jenis_pendaftaran = "";
    $tanggal_masuk_sekolah = "";
    $nis = "";
    $nomor_peserta_ujian = "";
    $apakah_pernah_paud = "";
    $apakah_pernah_tk = "";
    $no_seri_skhun_sebelumnya = "";
    $no_seri_ijazah_sebelumnya = "";
    $hobi = "";
    $citacita = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nis"])) {
            $error_nis = "Kolom NIS tidak boleh kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "Kolom NIS hanya dapat diisi angka";
            }
        }

        if (empty($_POST["nomor_peserta_ujian"])) {
            $error_nomor_peserta_ujian = "Kolom no. peserta ujian tidak boleh kosong";
        } else {
            $nomor_peserta_ujian = cek_input($_POST["nomor_peserta_ujian"]);
            if (!is_numeric($nomor_peserta_ujian)) {
                $error_nomor_peserta_ujian = "Kolom no. peserta ujian hanya dapat diisi angka";
            }
        }

        if (empty($_POST["no_seri_skhun_sebelumnya"])) {
            $error_no_seri_skhun_sebelumnya = "Kolom nomor seri SKHUN tidak boleh kosong";
        } else {
            $no_seri_skhun_sebelumnya = cek_input($_POST["no_seri_skhun_sebelumnya"]);
            if (!is_numeric($no_seri_skhun_sebelumnya)) {
                $error_no_seri_skhun_sebelumnya = "Nomor seri SKHUN hanya dapat diisi angka";
            }
        }

        if (empty($_POST["no_seri_ijazah_sebelumnya"])) {
            $error_no_seri_ijazah_sebelumnya = "Kolom no seri ijazah tidak boleh kosong";
        } else {
            $no_seri_ijazah_sebelumnya = cek_input($_POST["no_seri_ijazah_sebelumnya"]);
            if (!is_numeric($no_seri_ijazah_sebelumnya)) {
                $error_no_seri_ijazah_sebelumnya = "Kolom nomor Seri Ijazah hanya dapat diisi angka";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
   
<div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                FORMULIR PESERTA DIDIK
                </div>
                <div class="card-footer">
                    1. FORM REGISTRASI
                </div>
                <div class="card-body">
                    <form method="post" action="prosesregistrasi.php">

                    <div class="form-group row">
                        <label for="nopendaftaran" class="col-sm-2 col-form-label">No. Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopendaftaran" id="nopendaftaran" class="form-control <?php echo ($error_nopendaftaran !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nopendaftaran; ?>"> <span class="warning"><?php echo $error_nopendaftaran ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="jenis_pendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jenis_pendaftaran" value="Siswa Baru">Siswa Baru</label><br>
                            <input type="radio" name="jenis_pendaftaran" value="Pindahan">Pindahan</label>
                            <span class="warning" ><?php echo $error_jenis_pendaftaran; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="web" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text" name="tanggal_masuk_sekolah" id="tanggal_masuk_sekolah" class="form-control <?php echo ($error_tanggal_masuk_sekolah !="" ? "is-invalid" : ""); ?>" placeholder="XX - Bulan - XXXX" value="<?php echo $tanggal_masuk_sekolah; ?>"> <span class="warning"><?php echo $error_tanggal_masuk_sekolah ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" name="nis" id="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" placeholder="Nomor Induk Siswa" value="<?php echo $nis; ?>"> <span class="warning"><?php echo $error_nis ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nomor_peserta_ujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                        <div class="col-sm-10">
                            <input type="text" name="nomor_peserta_ujian" id="nomor_peserta_ujian" class="form-control <?php echo ($error_nomor_peserta_ujian !="" ? "is-invalid" : ""); ?>" placeholder="No Peserta Ujian" value="<?php echo $nomor_peserta_ujian; ?>"> <span class="warning"><?php echo $error_nomor_peserta_ujian ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="    apakah_pernah_paud" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                        <div class="col-sm-10">
                            <input type="radio" name="  apakah_pernah_paud" value="Ya">Ya</label><br>
                            <input type="radio" name="  apakah_pernah_paud" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_apakah_pernah_paud; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="    apakah_pernah_tk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                        <div class="col-sm-10">
                            <input type="radio" name="  apakah_pernah_tk" value="Ya">Ya</label><br>
                            <input type="radio" name="  apakah_pernah_tk" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_apakah_pernah_tk; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="no_seri_skhun_sebelumnya" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="   no_seri_skhun_sebelumnya" id="  no_seri_skhun_sebelumnya" class="form-control <?php echo ($error_no_seri_skhun_sebelumnya !="" ? "is-invalid" : ""); ?>" placeholder="SKHUN Sebelumnya" value="<?php echo $no_seri_skhun_sebelumnya; ?>"> <span class="warning"><?php echo $error_no_seri_skhun_sebelumnya ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_seri_ijazah_sebelumnya" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_seri_ijazah_sebelumnya" id="no_seri_ijazah_sebelumnya" class="form-control <?php echo ($error_no_seri_ijazah_sebelumnya !="" ? "is-invalid" : ""); ?>" placeholder="Seri Ijazah Sebelumnya" value="<?php echo $no_seri_ijazah_sebelumnya; ?>"> <span class="warning"><?php echo $error_no_seri_ijazah_sebelumnya ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="hobi">
                            <option value=""></option>
                            <option value="Olahraga"> Olahraga </option>
                            <option value="Kesenian"> Kesenian</option>
                            <option value="Membaca"> Membaca</option>
                            <option value="Menulis"> Menulis </option>
                            <option value="Traveling"> Traveling </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_hobi; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="citacita" class="col-sm-2 col-form-label "> Cita Cita </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="citacita">
                            <option value=""></option>
                            <option value="PNS"> PNS </option>
                            <option value="TNI/POLRI"> TNI/POLRI</option>
                            <option value="Guru/Dosen"> Guru/Dosen</option>
                            <option value="Dokter"> Dokter </option>
                            <option value="Politikus"> Politikus </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_citacita; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>