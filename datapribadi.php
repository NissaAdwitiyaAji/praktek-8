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
    $error_nama_lengkap = "";
    $error_jenis_kelamin = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tempat_lahir = "";
    $error_tanggal_lahir = "";
    $error_agama = "";
    $error_berkebutuhan_khusus = "";
    $error_alamat = "";
    $error_rt = "";
    $error_rw = "";
    $error_nama_dusun = "";
    $error_nama_kel = "";
    $error_kecamatan = "";
    $error_kode_pos = "";
    $error_tempat_tinggal = "";
    $error_transportasi = "";
    $error_no_hp = "";
    $error_no_telp = "";
    $error_email = "";
    $error_kpspkh = "";
    $error_nokpspkh = "";
    $error_kewarganegaraan = "";
    $error_nama_negara = "";

    $nama_lengkap = "";
    $jenis_kelamin = "";
    $nisn = "";
    $nik = "";
    $tempat_lahir = "";
    $tanggal_lahir = "";
    $agama = "";
    $berkebutuhan_khusus = "";
    $alamat = "";
    $rt = "";
    $rw = "";
    $nama_dusun = "";
    $nama_kel = "";
    $kecamatan = "";
    $kode_pos = "";
    $tempat_tinggal = "";
    $transportasi = "";
    $no_hp = "";
    $no_telp = "";
    $email = "";
    $kpspkh = "";
    $nokpspkh = "";
    $kewarganegaraan = "";
    $nama_negara = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nisn"])) {
            $error_nisn = "Kolom NISN tidak boleh kosong";
        } else {
            $nisn = cek_input($_POST["nisn"]);
            if (!is_numeric($nisn)) {
                $error_nisn = "Kolom NISN hanya dapat diisi angka";
            }
        }

        if (empty($_POST["nik"])) {
            $error_nik = "Kolom NIK tidak boleh kosong";
        } else {
            $nik = cek_input($_POST["nik"]);
            if (!is_numeric($nik)) {
                $error_nik = "NIK hanya dapat diisi angka";
            }
        }

        if (empty($_POST["no_hp"])) {
            $error_no_hp = "Kolom nomor HP tidak boleh kosong";
        } else {
            $no_hp = cek_input($_POST["no_hp"]);
            if (!is_numeric($no_hp)) {
                $error_no_hp = "Nomor HP hanya dapat diisi angka";
            }
        }

        if (empty($_POST["email"])) {
            $error_email = "Email tidak boleh kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format Email Invalid";
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
                    2. FORM DATA DIRI
                </div>
                <div class="card-body">
                    <form method="post" action="prosesdatapribadi.php">

                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" <?php echo ($error_nama_lengkap !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nama_lengkap; ?>"> <span class="warning"><?php echo $error_nama_lengkap ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="    jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="radio" name="  jenis_kelamin" value="Laki Laki">Laki-Laki</label>
                            <input type="radio" name="  jenis_kelamin" value="Perempuan">Perempuan</label> 
                            <span class="warning" ><?php echo $error_jenis_kelamin; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                        <div class="col-sm-10">
                            <input type="text" name="nisn" id="nisn" class="form-control" <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nisn; ?>"> <span class="warning"><?php echo $error_nisn ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" name="nik" id="nopesunikjian" class="form-control" <?php echo ($error_nik !="" ? "is-invalid" : ""); ?> placeholder="3524xxxxxxxx" value="<?php echo $nik; ?>"> <span class="warning"><?php echo $error_nik ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" <?php echo ($error_tempat_lahir !="" ? "is-invalid" : ""); ?> placeholder="" value="<?php echo $tempat_lahir; ?>"> <span class="warning"><?php echo $error_tempat_lahir ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" <?php echo ($error_tanggal_lahir !="" ? "is-invalid" : ""); ?> placeholder="XX-Bulan-XXXX" value="<?php echo $tanggal_lahir; ?>"> <span class="warning"><?php echo $error_tanggal_lahir ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label "> Agama </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="agama">
                            <option value=""></option>
                            <option value="Islam"> Islam </option>
                            <option value="Kristen/Protestan"> Kristen/Protestan </option>
                            <option value="Katholik"> Katholik </option>
                            <option value="Hindu"> Hindu </option>
                            <option value="Budha"> Budha </option>
                            <option value="Konghucu"> Konghucu </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="berkebutuhan_khusus" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="berkebutuhan_khusus">
                            <option value=""></option>
                            <option value="Tidak"> Tidak </option>
                            <option value="Netra (A)"> Netra (A) </option>
                            <option value="Rungu (B)"> Rungu (B) </option>
                            <option value="Grahita Ringan (C)"> Grahita Ringan (C) </option>
                            <option value="Grahita Sedang (C1)"> Grahita Sedang (C1) </option>
                            <option value="Daksa Ringan (D)"> Daksa Ringan (D) </option>
                            <option value="Laras (E)"> Laras (E) </option>
                            <option value="Wicara (F)"> Wicara (F) </option>
                            <option value="Tuna Ganda (G)"> Tuna Ganda (G) </option>
                            <option value="Hiper Aktif (H)"> Hiper Aktif (H) </option>
                            <option value="Cerdas Istimewa (I)"> Cerdas Istimewa (I) </option>
                            <option value="Bakat Istimewa (J)"> Bakat Istimewa (J) </option>
                            <option value="Kesulitan Belajar (K)"> Kesulitan Belajar (K) </option>
                            <option value="Narkoba (N)"> Narkoba (N) </option>
                            <option value="Indigo (O)"> Indigo (O) </option>
                            <option value="Down Syndrom (P)"> Down Syndrom (P) </option>
                            <option value="Autis (Q)"> Autis (Q) </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_berkebutuhan_khusus; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" id="alamat" class="form-control" <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $alamat; ?>"> <span class="warning"><?php echo $error_alamat ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rt" class="col-sm-2 col-form-label">RT</label>
                        <div class="col-sm-10">
                            <input type="text" name="rt" id="rt" class="form-control" <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $rt; ?>"> <span class="warning"><?php echo $error_rt ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rw" class="col-sm-2 col-form-label">RW</label>
                        <div class="col-sm-10">
                            <input type="text" name="rw" id="rw" class="form-control" <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $rw; ?>"> <span class="warning"><?php echo $error_rw ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="nama_dusun" class="col-sm-2 col-form-label">Nama Dusun</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_dusun" id="nama_dusun" class="form-control" <?php echo ($error_nama_dusun !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nama_dusun; ?>"> <span class="warning"><?php echo $error_nama_dusun ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="nama_kel" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_kel" id="nama_kel" class="form-control" <?php echo ($error_nama_kel !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nama_kel; ?>"> <span class="warning"><?php echo $error_nama_kel ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="kecamatan" id="kecamatan" class="form-control" <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $kecamatan; ?>"> <span class="warning"><?php echo $error_kecamatan ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-10">
                            <input type="text" name="kode_pos" id="kode_pos" class="form-control" <?php echo ($error_kode_pos !="" ? "is-invalid" : ""); ?>" placeholder="xxxxxx" value="<?php echo $kode_pos; ?>"> <span class="warning"><?php echo $error_kode_pos ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="tempat_tinggal" class="col-sm-2 col-form-label "> Tempat Tinggal </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="tempat_tinggal">
                            <option value=""></option>
                            <option value="Bersama Orang Tua"> Bersama Orang Tua </option>
                            <option value="Wali"> Wali </option>
                            <option value="Kos"> Kos </option>
                            <option value="Asrama"> Asrama </option>
                            <option value="Panti Asuhan"> Panti Asuhan </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_tempat_tinggal; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="    transportasi" class="col-sm-2 col-form-label "> Moda Transportasi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name=" transportasi">
                            <option value=""></option>
                            <option value="Jalan Kaki"> Jalan Kaki </option>
                            <option value="Kendaraan Pribadi"> Kendaraan Pribadi </option>
                            <option value="Kendaraan Umum/Angkot/Pete-Pete"> Kendaraan Umum/Angkot/Pete-Pete </option>
                            <option value="Jemputan Sekolah"> Jemputan Sekolah </option>
                            <option value="Kereta Api"> Kereta Api </option>
                            <option value="Ojek"> Ojek </option>
                            <option value="Andong/Bedi/Sado/Dokar/Delman/Becak"> Andong/Bedi/Sado/Dokar/Delman/Becak </option>
                            <option value="Perahu Penyebrangan/Rakit/Getek"> Perahu Penyebrangan/Rakit/Getek </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_transportasi; ?></span>
                        </div>
                    </div> <br>
                    
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_hp" id="no_hp" class="form-control" <?php echo ($error_no_hp !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $no_hp; ?>"> <span class="warning"><?php echo $error_no_hp ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telp</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_telp" id="no_telp" class="form-control" <?php echo ($error_no_telp !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $no_telp; ?>"> <span class="warning"><?php echo $error_no_telp ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email Pribadi</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" class="form-control" <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $email; ?>"> <span class="warning"><?php echo $error_email ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="kpspkh" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
                        <div class="col-sm-10">
                            <input type="radio" name="kpspkh" value="Ya">Ya</label>
                            <input type="radio" name="kpspkh" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_kpspkh; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nokpspkh" class="col-sm-2 col-form-label">Nomor KPS/PKH/KIP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nokpspkh" id="nokpspkh" class="form-control" <?php echo ($error_nokpspkh !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $nokpspkh; ?>"> <span class="warning"><?php echo $error_nokpspkh ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                            <input type="radio" name="kewarganegaraan" value="Indonesia (WNI)">Indonesia (WNI)</label>
                            <input type="radio" name="kewarganegaraan" value="Asing (WNA)">Asing (WNA)</label> 
                            <span class="warning" ><?php echo $error_kewarganegaraan; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nama_negara" class="col-sm-2 col-form-label">Nama Negara</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_negara" id="nama_negara" class="form-control" <?php echo ($error_nama_negara !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nama_negara; ?>"> <span class="warning"><?php echo $error_nama_negara ?></span>
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