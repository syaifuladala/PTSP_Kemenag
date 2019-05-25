<html>
    <head>
        <title>PELAYANAN DAN PROSEDUR LAYANAN REKOMENDASI IZIN BELAJAR AGAMA BAGI WNA</title>
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
        <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods17.png')?>">
        <h1>PELAYANAN DAN PROSEDUR LAYANAN REKOMENDASI IZIN BELAJAR AGAMA BAGI WNA</h1>
        </center>
        
        <div class="info">    
        <h2>Persyaratan</h2>
        <ol class="list">
            <li>Surat Permohonan dari Lembaga Penjamin yang ditujukan kepada Kepala Kanwil Kemenag DIY.</li>
            <li>FC PASPOR WNA ybs.</li>
            <li> FC KTP Penjamin yang masih berlaku.</li>
            <li>Surat Pernyataan dan Jaminan bermaterai Rp. 6.000,- dari lembaga penjamin</li>
            <li>Biodata pemohon/CV Pemohon</li>
            <li>PAS FOTO 4 X 6 (1 lembar) pemohon (WNA ybs).</li>
            <li>Surat Keterangan Domisili.</li>
        </ol>
        <h2>Prosedur</h2>
        <ol class="list">
            <li>Pemohon melengkapi berkas yang dibutuhkan.</li>
            <li>Pemohon memasukkan Berkas ke Bagian Umum.</li>
            <li>Berkas dinaikkan ke kakanwil untuk diberikan Disposisi Pimpinan.</li>
            <li>Proses Oleh pengadministrasi Subbag Hukum dan KUB dengan kendali (teliti berkas, pencetakan dan dokumentasi)_jika tidak sesuai persyaratan akan dikembalikan.</li>
            <li>Petugas menyerahkan ke Pengadministrasi surat masuk/keluar Subbag Hukum dan KUB untuk diregister dalam “Dokumen Keluar”.</li>
            <li>Dokumen diserahkan oleh Pengadministrasi surat masuk/keluar Subbag Hukum dan KUB kepada Pemohon.</li>
        </ol>
        <h2>Estimasi Waktu Pelayanan</h2>
        <a class="list">30 Menit/dokumen jika Syarat Ketentuan terpenuhi.</a>
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

