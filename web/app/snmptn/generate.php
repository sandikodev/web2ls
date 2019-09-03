<?php

if (!isset($_POST["submit"])) {
    header('Location: https://naufalist.com/snmptn');
}

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Hasil Seleksi SNMPTN 2019</title>
    <!--link href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous"-->
    <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
    <style>
    .alert a {
        font-weight: 400;
        color: #fff;
        text-decoration: underline;
    }
    .snmptn {
      color: #4682b4;
    }
    .container {
       max-width: 680px;
    }
    .table-program td {
        font-size: 1.1em;
    }    
    .alert-success {
        min-height: 203px;
        min-width: 650px;
    }
    </style>
</head>

<body>
    <div id="wrap">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container" style="padding-top: 10px;">
                <div class="navbar-header">
                    <span class="h2">HASIL SELEKSI <a class="snmptn" href="http://www.snmptn.ac.id/">SNMPTN 2019</span></a>
                </div>
            </div>
        </div>
        <div class="container">
            <!--http://pengumuman.snmptn.ac.id/pengumuman2019.pdf-->
            <p><a class="btn btn-default" href="#">Pengumuman Hasil Seleksi SNMPTN 2019 (PDF)</a></p>
            <div class="alert alert-warning">
                Jadwal pencetakan ulang kartu pendaftaran: 25 Maret 2019 - 25 April 2019.
            </div>
            <div class="well">
                <fieldset>
                    <legend>Masukkan Nomor Pendaftaran SNMPTN dan Tanggal Lahir</legend>
                    <div class="form-group">
                        <label>No. Pendaftaran</label>
                        <input type="text" class="form-control input-lg input-regno" id="regno" value="<?php echo $_POST["regno"]; ?>" />
                        <p class="help-block info">No. pendaftaran SNMPTN: 10 digit, tertera pada kartu peserta SNMPTN.</p>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div class="form-inline">
                            <div class="form-group input-birth">
                                <input class="form-control input-lg" size="3" id="day" value="<?php echo $_POST["day"]; ?>" placeholder="Tgl" />                                /
                                <input class="form-control input-lg" size="3" id="month" value="<?php echo $_POST["month"]; ?>" placeholder="Bln" />                                /
                                <input class="form-control input-lg" size="5" id="year" value="<?php echo $_POST["year"]; ?>" placeholder="Tahun" />
                            </div>
                            <p class="help-block info">Tgl. (1-31) / Bln. (1-12) / Tahun</p>
                        </div>
                    </div>
                </fieldset>
                <button class="btn btn-primary" id="searchBtn">Lihat Hasil Seleksi</button>
            </div>

            <div class="alert alert-danger hidden" id="divNotFound">
                Nomor pendaftaran dan/atau tanggal lahir tidak ditemukan. Silakan cek kembali nomor pendaftaran dan tanggal lahir yang Anda
                masukkan.
            </div>

            <div class="panel panel-info" id="divData">
                <div class="panel-heading">Data Siswa Pendaftar</div>
                <table class="table table-bordered fields">
                    <tbody><tr>
                        <td>Nomor Pendaftaran</td>
                        <td><span id="no"><?php echo $_POST["regno"]; ?></span></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td><span id="nama"><?php echo strtoupper($_POST["nama"]); ?></span></td>
                    </tr>
                    <tr>
                        <td>NISN Siswa</td>
                        <td><span id="nisn"><?php echo $_POST["nisn"]; ?></span></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td><span id="sekolah"><?php echo strtoupper($_POST["sekolah"]); ?></span></td>
                    </tr>
                    <tr>
                        <td>Kabupaten/Kota</td>
                        <td><span id="kota"><?php echo strtoupper($_POST["kabkota"]); ?></span></td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                        <td><span id="provinsi"><?php echo strtoupper($_POST["prov"]); ?></span></td>
                    </tr>
                </tbody></table>
            </div>

            <div class="alert alert-success" id="divResult">
                <table style="width: 100%">
                    <tbody><tr>
                        <td>
                            <p><strong>Selamat, Anda dinyatakan lulus SNMPTN 2019 pada</strong></p>
                            <table class="pull-left table table-program">
                                <tbody><tr>
                                    <td width="120px">PTN</td>
                                    <td><b><span id="ptn"><?php echo strtoupper($_POST["kodeptn"]); ?></span></b></td>
                                </tr>
                                <tr>
                                    <td>Program Studi</td>
                                    <td><b><span id="prodi"><?php echo strtoupper($_POST["prodi"]); ?></span></b></td>
                                </tr>
                            </tbody></table>
                        </td>
                        <td width="180px">
                            <img style="margin-left:5px;float:right;width: 175px;" src="qrimg.png" id="qr" alt="QRCode SNMPTN 2019">
                        </td>
                    </tr>
                </tbody></table>
            </div>

            <div class="alert alert-warning" id="divInfoResult1">
                <!-- text 2019 -->
                <p>
                    Status penerimaan Anda sebagai mahasiswa di PTN tujuan, akan ditentukan berdasarkan verifikasi data akademik (rapor dan portofolio) dan persyaratan yang akan ditentukan PTN, yang akan dilaksanakan oleh PTN tempat Anda diterima. Silakan anda melihat peraturan tentang penerimaan mhs baru di laman PTN yang meluluskan Anda. Ketidakcermatan Anda dalam memenuhi ketentuan PTN dapat berdampak pada status penerimaan Anda. Setelah Anda dinyatakan lolos verifikasi, maka status Anda ditetapkan diterima sebagai mahasiswa di PTN tujuan tersebut.
                </p>
                <p>
                    Bagi Anda peserta bidikmisi, selain dilakukan verifikasi terhadap data akademik Anda, PTN tujuan dapat juga melakukan verifikasi data ekonomi dan/atau kunjungan ke alamat tinggal Anda untuk menetapkan status penerimaan Anda sebagai mahasiswa.
                </p>
                <p>
                    Pengumuman Resmi Tim Pelaksana Lembaga Tes Masuk Perguruan Tinggi 2019, <a href="#">klik disini</a>.
                </p>
                <!-- text 2018
                <p>Status penerimaan Anda sebagai mahasiswa di PTN tujuan, akan ditentukan berdasarkan verifikasi data akademik
                    (rapor dan portofolio) yang akan dilaksanakan oleh PTN tempat Anda diterima. Kehadiran pada saat registrasi
                    tanggal 8 Mei 2019 menentukan proses verifikasi dan status penerimaan Anda. Setelah Anda dinyatakan
                    lolos verifikasi, maka status Anda ditetapkan diterima sebagai mahasiswa di PTN tujuan tersebut.</p>
                <p>Bagi Anda peserta bidikmisi, selain dilakukan verifikasi terhadap data akademik Anda, PTN
                    tujuan dapat juga melakukan verifikasi data ekonomi dan/atau kunjungan ke alamat tinggal Anda untuk menetapkan
                    status penerimaan Anda sebagai mahasiswa.</p>
                <p>Pengumuman Resmi Panitia Pusat Seleksi Nasional PMB PTN 2019, <a href="http://pengumuman.snmptn.ac.id/pengumuman2019.pdf">klik disini</a>.</p>
                -->
            </div>

            <div class="alert alert-danger" id="divInfoResult2">
                <!-- text 2019 -->
                <p><strong>Penting: Anda harus melakukan pendaftaran ulang di PTN tempat Anda diterima.</strong><p>Informasi pendaftaran ulang di PTN Anda dapat dilihat pada <em>link</em> di bawah (klik pada tulisan Informasi Pendaftaran Ulang).</p>
                <h4 style="margin-top:10px;margin-bottom:0"><a id="url1" href="<?php echo $_POST["ptnweb"]; ?>"><strong>Informasi Pendaftaran Ulang »</strong></a></h4>
                <p><a id="url2" href="<?php echo $_POST["ptnweb"]; ?>"><span id="url3"><?php echo $_POST["ptnweb"]; ?></span></a></p>
                <!-- text 2018
                <p><strong>Penting: Anda harus melakukan pendaftaran ulang di PTN tempat Anda diterima.</strong></p>
                <p>Informasi pendaftaran ulang di PTN Anda dapat dilihat pada <em>link</em> di bawah (klik pada tulisan Informasi
                    Pendaftaran Ulang).</p>
                <h4 style="margin-top:10px;margin-bottom:0"><a id="url1" href="<?php echo $_POST["ptnweb"]; ?>"><strong>Informasi Pendaftaran Ulang »</strong></a></h4>
                <p><a id="url2" href="<?php echo $_POST["ptnweb"]; ?>"><span id="url3"><?php echo $_POST["ptnweb"]; ?></span></a></p>
                -->
            </div>

            <div class="alert alert-danger hidden" id="divNotAccepted">
                Anda dinyatakan tidak lulus seleksi SNMPTN 2019. Silakan mengikuti SBMPTN 2019.
            </div>

            <div id="push"></div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <p class="muted">Tim Pelaksana Lembaga Tes Masuk Perguruan Tinggi 2019</p>
            <!--p class="muted">Panitia Pusat Seleksi Nasional PMB PTN 2019</p--><!-- 2018 -->
        </div>
    </div>

</body>

</html>