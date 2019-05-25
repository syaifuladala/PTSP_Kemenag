<html>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex">

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/2.22.0/css/uikit.almost-flat.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.min.css'>
<style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Open+Sans);

.pres-cell {
  width: 100%;
  height: calc(50vh - 100px);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}
.column.middle {
  width: 70%;
  text-align: justify;
  font-size: 16;
}
.column.side {
  width: 30%;
  text-align: justify;
  font-size: 16;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
    }
}
</style>
<head>
    <title>PTSP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/menu_utama.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <style media="screen">
    .navbar a:hover{
      background-color: #009c41;
    }
    </style>
</head>
<body style="background-image: url(<?php echo base_url('assets/gambar/bg.jpg') ?>)">

    
    <div style="position: fixed; top: 0px; z-index: 3 ; width: 100%">
    <nav class="navbar navbar-expand-lg navbar-success bg-success">
            <h6 class="navbar-brand" ><span class="text-white" >PTSP Kemenag DIY</span></h6>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/Home_controler/index')?>"><span class="text-white" >Beranda</span><span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/Home_controler/layanan')?>"><span class="text-white" >Layanan</span></a>
              </li>
              <li class="nav-item" style="margin-top: 7px">
                  <form action="<?php echo site_url('searching_layanan_controler/getstring')?>" method="GET">
                    <table>
                        <tr>
                            <td>
                      <input type="text" class="form-control" name="search" placeholder="Cari Layanan disini" style="width: 500px;"></td>
                      <td><input type="submit" class="btn btn-default" value="Cari" name=""></td>
                      </tr>
                      </table>
                  </form>
              </li>
            </ul>
            </div>
        </nav>
    </div>

    <div class="container">


    <div class="pres-container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 90px; z-index: 2">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php echo base_url('assets/gambar/wellcome.png'); ?>" style="width:100%;">
        <div class="carousel-caption">

        </div>
      </div>
        
        
        <div class="item">
        <img src="<?php echo base_url('assets/gambar/alur_home.png'); ?>" style="width:100%;">
        <div class="carousel-caption">

        </div>
      </div>

    
      <div class="item">
        <img src="<?php echo base_url('assets/gambar/sosmed.png'); ?>" style="width:100%;">
        <div class="carousel-caption">
          
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<div class="column middle">
    <p><h5>Pelayanan Terpadu Satu Pintu (PTSP) Kementrian Agama</h5>adalah wujud 
        mempermudah akses publik terhadap layanan yang ada di Kementrian Agama.
        "PTSP disiapkan sebagai ruang publik yang akan mengurus beragam pengajuan
        perizinan, informasi seputar bantuan, dan beasiswa, termasuk juga layanan aduan
    masyarakat"(Lukman Hakim Saifuddin, Menteri Agama Republik Indonesia)</p>        
</div>


<div class="column side">
    <h5>Masuk Akun PTSP</h5>
    <form action="<?php echo site_url('login_controler/login_user'); ?>" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK">
         
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password">
          <input type="checkbox" onclick="myFunction()">Lihat Password

                    <script>
                      function myFunction() {
                        var x = document.getElementById("password");
                        if (x.type === "password") {
                          x.type = "text";
                        } else {
                          x.type = "password";
                        }
                      }
                    </script>
        </div>
        <input type="submit" value="LOGIN" class="btn btn-primary"></input>
    </form>
    <table class="table">
        <tr>
            <td>Belum Punya Akun? <a href="<?php echo base_url('index.php/Home_controler/daftar');?>">Daftar</a></td>
        </tr>
    </table>
</div>

<table class="table">
    <tr>
        <th>Tipe Layanan</th>
        <th>Nama Layanan</th>
        <th>Tipe Layanan</th>
        <th>Nama Layanan</th>
    </tr>
    <tr>
        <th rowspan="18">One Day Service (ODS)</th>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods1')?>">IZIN BELAJAR S1 BAGI PNS DI LINGKUNGAN KANWIL KEMENAG DIY</a></td>
        <th rowspan="7">Non One Day Service (NODS)</th>
        <td><a href="<?php echo base_url('index.php/Home_controler/nods1')?>">IZIN PENDIRIAN RA & MADRASAH</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods2')?>">TUGAS BELAJAR S1 BAGI PNS DI LINGKUNGAN KANWIL KEMENAG DIY</a></td>
        <td><a href="<?php echo base_url('index.php/Home_controler/nods2')?>">PERMOHONAN AUDIENSI</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods3')?>">IZIN PENELITIAN</a></td>
        <td><a href="<?php echo base_url('index.php/Home_controler/nods3')?>">LEGALISASI LEMBAGA AMIL ZAKAT</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods4')?>">PENGAJUAN IJIN MAGANG PADA KANWIL KEMENAG DIY</a></td>
        <td><a href="<?php echo base_url('index.php/Home_controler/nods4')?>">PERMOHONAN REKOMENDASI PENYELENGGARA PERJALANAN IBADAH UMRAH (PPIU)</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods5')?>">SURAT KETERANGAN PENGGANTI IJAZAH</a></td>
        <td><a href="<?php echo base_url('index.php/Home_controler/nods5')?>">PERMOHONAN SURAT KETERANGAN PENYELENGGARA IBADAH HAJI KHUSUS (PIHK)</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods6')?>">PERMOHONAN INFORMASI KEAGAMAAN PADA KANWIL KEMENAG DIY</a></td>
        <td><a href="<?php echo base_url('index.php/Home_controler/nods6')?>">IZIN KANTOR CABANG PENYELENGGARA IBADAH HAJI KHUSUS DAN/ATAU PENYELENGGARA PERJALANAN IBADAH UMRAH</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods7')?>">PERMOHONAN SERTIFIKASI ARAH KIBLAT PADA KANWIL KEMENAG DIY</a></td>
        <td><a href="<?php echo base_url('index.php/Home_controler/nods7')?>">IZIN PENDIRIAN KELOMPOK BIMBINGAN IBADAH HAJI</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods8')?>">REKOMENDASI PINDAH SEKOLAH</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods9')?>">REKOMENDASI IJIN BELAJAR KE LUAR NEGERI</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods10')?>">REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods11')?>">REKOMENDASI RENCANA PENGGUNAAN TENAGA KERJA ASING DAN IZIN MENGGUNAKAN TENAGA KERJA ASING BAGI WNA</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods12')?>">REKOMENDASI IZIN TINGGAL TERBATAS (ITAS) BAGI WNA</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods13')?>">REKOMENDASI KEGIATAN KEAGAMAAN</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods14')?>">LEGALISIR DOKUMEN</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods15')?>">KONSULTASI KEAGAMAAN DAN NON-KEAGAMAAN</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods16')?>">PERMOHONAN PETUGAS AGAMA DAN KEAGAMAAN</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods17')?>">REKOMENDASI IZIN BELAJAR AGAMA BAGI WNA</a></td>
    </tr>
    <tr>
        <td><a href="<?php echo base_url('index.php/Home_controler/ods18')?>">PELAYANAN TATA PERSURATAN</a></td>
    </tr>
</table>

</div>

</div>
        
        
<div class="clearfix"></div>
<footer class="site-footer">
    <div class="footer-inner">
               <div class="bg-success" style="margin-top: 40px; clear: both">
                   <p align="center" style="padding: 20px; color:white;">Copyright © 2019 PTSP Kemenag Kanwil DIY. All rights reserved.</p>
               </div>
    </div>
</footer>   

</body>
</html>
