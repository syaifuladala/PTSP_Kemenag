<html>
    <head> 
        <title>PELAYANAN TATA PERSURATAN</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/info.css') ?>">
    </head>
    <body >
        
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
        <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods18.png')?>">
        <h1>PELAYANAN TATA PERSURATAN</h1>
        </center>
        
        <div class="info">     
        <h2>Persyaratan</h2>
        <ol class="list">
            <li>Berkas surat masuk</li>
                <ul>
                    <li>Surat yang dikelola dalam layanan persuratan adalah surat dengan alamat surat dinas (ditujukan kepada Kepala Kanwil / u.p. yang dituju) dan bukan surat perorangan /surat yang salah alamat.</li>
                    <li>Kelengkapan surat (ada stempel, tanda tangan pengirim surat, lampiran dan kelengkapan lainnya)</li>
                    <li>Tanda terima surat untuk surat yang dikirim oleh kurir</li>
                </ul>
        </ol>
        
        <h2>Estimasi Waktu Pelayanan</h2>
        <a class="list">5 Menit/dokumen jika Syarat Ketentuan terpenuhi.</a>
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

