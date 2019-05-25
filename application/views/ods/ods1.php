    <html>
    <head>
        <title>IZIN BELAJAR S1 BAGI PNS</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/info.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    </head>
    <body style="background-image: url(<?php echo base_url('assets/gambar/bg.jpg') ?>)">
        
        <div class="mynav">
        <nav class="navbar navbar-expand-lg navbar-success bg-success" >
            <h6 class="navbar-brand" href="<?php echo site_url(''); ?>"><span class="text-white" >PTSP Kemenag DIY</span></h6>
            <ul class="navbar-nav" style="margin-top: 10px">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/Home_controler/index')?>"><span class="text-white" >Beranda</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/Home_controler/layanan')?>"><span class="text-white" >Layanan</span></a>
              </li>
              <li class="nav-item">
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
        </nav>
        </div>
        
       <div class="container" style="margin-top: 20px" >
           
        <center>
        <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods1.png')?>">
        <h1>IZIN BELAJAR S1 BAGI PNS</h1>
        </center>
        
    <div class="info">        
        <h2>Persyaratan</h2>
        
        <table border="1px" class="table table-hover">
            
            <thead class="thead-light">
            <tr>
                <th colspan="2"><center>SYARAT IZIN BELAJAR</center></th>
            </tr>
            </thead>

            <thead class="thead-dark">
                <tr>
                    <th>PERSYARATAN</th>
                    <th>KELENGKAPAN ADMINISTRASI</th>
                </tr>
            </thead>
            
            <tr>
                <td>
                    <ol>
                        <li>Berstatus sebagai PNS</li> 
                        <li>Sehat Jasmani & Rohani </li>
                        <li>DP3 (sekarang PPPK) Tahun Terakhir setiap unsur bernilai BAIK </li>
                        <li>Dalam 1 Tahun Terakhir tidak pernah dijatuhi Hukuman Disiplin. </li>
                        <li>Batas Usia Maksimal 10 Tahun sebelum Batas Usia Pensiun </li>
                        <li>Program studi yang ditempuh memiliki relevansi dengan tugas kedinasan di Lingkungan Kementerian Agama. </li>
                    </ol>
                </td>    
                
                
            <td>
                <ol>
                    <li>Surat Pengantar dari pimpinan organisasi</li>
                    <li>FC Sah SK CPNS</li>
                    <li>FC Sah SK PNS</li>
                    <li>FC Sah SK Pangkat terakhir</li>
                    <li>Surat Pernyataan Tidak Mutasi</li>
                    <li>Surat Pernyataan Tidak Menggangu Tugas Kedinasan</li>
                    <li>Surat Pernyataan Tidak Menuntut Penyesuaian Ijasah</li>
                    <li>Surat Keterangan Masih Aktif Kuliah terbaru</li>
                    <li>Jadwal kuliah terbaru</li>
                    <li>Surat Keterangan Akriditasi Jurusan (minimal B)</li>
                    <li>Asli surat keterangan dari perguruan tinggi yang menerangkan tentang profil perguruan tinggi termasuk alamat lengkap dan radius lokasi perguruan tinggi dari tempat tugas PNS yang bersangkutan;</li>
                </ol>
            </td>
            </tr>   
        </table>
        
        <h2>Estimasi Waktu Pelayanan</h2>
        <a class="list">60 Menit/dokumen jika Syarat Ketentuan terpenuhi.</a>
         </div>
       
       <a href="<?php echo base_url('index.php/Home_controler/layananODS')?>"><button class="btn btn-primary btn-lg">Kembali</button></a>
           
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