<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Hasil Seleksi SNMPTN 2019</title>
    <!--link href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous"-->
    <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
    <script src="merge.js" type="text/javascript"></script>
    <!-- Sweet Alert -->
    <link rel="stylesheet" type="text/css" href="sweetalert.css">
    <script type="text/javascript" src="sweetalert.min.js"></script>
    <!-- Validasi Form -->
    <script>
    function validateForm() {
        var x = document.forms["snm"]["regno"].value;
        var y = document.forms["snm"]["nisn"].value;
        if (x.length !== 10) {
            setTimeout(function () { swal("Invalid!","Nomor Pendaftaran harus berjumlah 10","error")}, 1000);
            //alert("Nomor Pendaftaran harus berjumlah 10!");
            return false;
        }
        if (y.length !== 10) {
            setTimeout(function () { swal("Invalid!","NISN harus berjumlah 10","error")}, 1000);
            //alert("NISN harus berjumlah 10!");
            return false;
        }
    }
    </script>
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
                    <span class="h2"><a class="snmptn" href="http://www.snmptn.ac.id/">SNMPTN 2019</a> FAKE GENERATOR </span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="well">
                <fieldset>
                    <legend>Masukkan Data</legend>
                    <div class="form-group">
                        <form name="snm" method="POST" onsubmit="return validateForm()" action="generate.php">

                        <label>No. Pendaftaran</label>
                        <input type="number" class="form-control input-md input-regno" id="regno" name="regno" value ="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="-- 1234567890 --" maxlength="10" size="10" autocomplete="off" required="">
                        <!--input type="text" class="form-control input-md input-regno" id="regno" name="regno" value="" placeholder="Ex: 8180454470" autocomplete="off" required="" /-->
                        <p class="help-block info">No. pendaftaran SNMPTN: 10 digit, tertera pada kartu peserta SNMPTN.<br>Gak punya kartu SNMPTN? isi asal aja gan, selow ntar disensor aja nmr nya :v</p>

                        <label>Nama Siswa</label>
                        <input type="text" class="form-control input-md input-nama" id="nama" name="nama" value="" placeholder="-- Muhammad Fatah --" style="text-transform:uppercase" autocomplete="off" required="" /><br>

                        <label>NISN (Nomor Induk Siswa Nasional)</label>
                        <input type="number" class="form-control input-md input-nisn" id="nisn" name="nisn" value ="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="-- 9991234000 --" maxlength="10" size="10" autocomplete="off" required=""><br>

                        <!--label>NISN (Nomor Induk Siswa Nasional)</label>
                        <input type="text" class="form-control input-md input-nisn" id="nisn" name="nisn" value="" placeholder="-- 9991234098 --" style="text-transform:uppercase" autocomplete="off" required="" /-->

                        <label>Asal Sekolah</label>
                        <input type="text" class="form-control input-md input-sekolah" id="sekolah" name="sekolah" value="" placeholder="-- SMAN 00 JAKARTA --" style="text-transform:uppercase" autocomplete="off" required="" /><br>

                        <!--label>Kabupaten/Kota</label>
                        <input type="text" class="form-control input-md input-kota" id="kota" name="kota" value="" placeholder="Ex: Kota Pekanbaru" autocomplete="off" required="" />

                        <label>Provinsi</label>
                        <input type="text" class="form-control input-md input-prov" id="prov" name="prov" value="" placeholder="Ex: Riau" autocomplete="off" required="" /-->

                        <label>Provinsi</label>
                        <select class="form-control input-md input-prov" name="prov" id="provinsiSel" required="">
                            <option value="" selected="selected">-- Provinsi --</option>
                        </select><br>

                        <label>Kabupaten/Kota</label>
                        <select class="form-control input-md input-kota" name="kabkota" id="kabkotaSel" required="">
                            <option value="" selected="selected">-- Kabupaten/Kota --</option>
                        </select><br>

                        <!--label>Kecamatan/Kelurahan</label-->
                        <select name="keckel" id="keckelSel" hidden="">
                            <option value="" selected="selected">-- Kecamatan/Kelurahan --</option>
                        </select>

                        <label>Nama PTN</label>
                        <select class="form-control input-md input-kota" name="kodeptn" id="kodeptn" required="">
                            <option value="" selected="selected">-- PTN --</option>
                        </select><br>

                        <label>Jurusan</label>
                        <select class="form-control input-md input-kota" name="jurusan" id="jurusan" required="">
                            <option value="" selected="selected">-- Jurusan --</option>
                        </select><br>

                        <label>Nama Prodi</label>
                        <select class="form-control input-md input-kota" name="prodi" id="prodi" required="">
                            <option value="" selected="selected">-- Prodi --</option>
                        </select><br>

                        <!--label>Nama PTN</label>
                        <input type="text" class="form-control input-md input-ptn" id="ptn" name="ptn" value="" placeholder="Ex: Universitas Indonesia" style="text-transform:uppercase" autocomplete="off" required="" />

                        <label>Nama Prodi</label>
                        <input type="text" class="form-control input-md input-prodi" id="" name="prodi" value="" placeholder="Ex: Fisika" style="text-transform:uppercase" autocomplete="off" required="" /-->

                        <label>Website PTN</label>
                        <input type="text" class="form-control input-md input-ptnweb" id="" name="ptnweb" value="http://www." placeholder="http://www." style="text-transform:lowercase" autocomplete="off" required="" />
                        <p class="help-block info">Alamat website PTN. Contoh: https://www.ipb.ac.id</p>
                        <br>

                        <label>Tanggal Lahir</label>
                        <div class="form-inline">
                            <!--div class="form-group input-birth">
                                <input class="form-control input-md" size="3" id="day" name="day" value="" placeholder="Tgl" autocomplete="off" required="" />                                /
                                <input class="form-control input-md" size="3" id="month" name="month" value="" placeholder="Bln" autocomplete="off" required="" />                                /
                                <input class="form-control input-md" size="5" id="year" name="year" value="" placeholder="Tahun" autocomplete="off" required="" />
                            </div-->
                            <div class="form-group input-birth">
                                <select class="form-control input-md" id="day" name="day" autocomplete="off" required="">
                                    <option value="" disabled="" selected="">Tgl</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>                                /
                                <select class="form-control input-md" id="month" name="month" autocomplete="off" required="">
                                    <option value="" disabled="" selected="">Bln</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>                                /
                                <select class="form-control input-md" id="year" name="year" autocomplete="off" required="">
                                    <option value="" disabled="" selected="">Tahun</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                </select>
                            </div>
                            <p class="help-block info">Tgl. (1-31) / Bln. (1-12) / Tahun</p>
                        </div>

                    </div>
                </fieldset>
                <button class="btn btn-primary" id="searchBtn" name="submit">Buat Orang Tuamu Bangga!</button>
            </div>

            <div id="push"></div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <p class="muted"><strike>Tim Pelaksana Lembaga Tes Masuk Perguruan Tinggi 2019</strike></p>
        </div>
    </div>

</body>

</html>