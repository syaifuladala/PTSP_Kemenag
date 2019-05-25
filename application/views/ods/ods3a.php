<html>
    <head>
        <title>IJIN PENELITIAN DI MADRASAH</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/info.css') ?>">
    </head>
    <body>
        
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
       
        <div class="container"> 
        
        <center>
        <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods3a.png')?>">
        <h1>IJIN PENELITIAN DI MADRASAH</h1>
        </center>
        
        <div class="info">    
        <h2>Persyaratan</h2>
        <ol class="list">
            <li>Membawa surat permohonan ijin penelitian resmi dari institusi yang bersangkutan</li>
            <li>Foto copy Kartu Mahasiswa/ KTP (idenstitas)</li>
            
        </ol>
        <h2>Estimasi Waktu Pelayanan</h2>
        <ol class="list">
            <li>15 menit (dari pemohon menyerahkan berkas sampai mendapat jawaban perkiraan kapan kepastian diterima atau tidaknya permohonan, 3 hari kerja)</li>
            <li>Maksimal 2 hari (proses tindak lanjut BO)</li>
        </ol>
        </div>
            
        <a href="<?php echo base_url('index.php/Home_controler/ods3')?>"><button class="btn btn-primary btn-lg">Kembali</button></a>
       
            
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

