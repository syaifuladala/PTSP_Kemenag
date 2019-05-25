<html>
    <head>
        <title>LEGALISIR DOKUMEN (IJAZAH)</title>
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
        <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods14b.png')?>">
        <h1>LEGALISIR DOKUMEN (IJAZAH)</h1>
        </center>
        
        <div class="info">    
        <h2>Persyaratan</h2>
        <ol class="list">
            <li>Pemohon mengisi formulir permohonan pengesahan Ijazah/STTB/SKP Ijazah dan menyerahkan kelengkapan persyaratan yang ditetapkan kepada petugas;</li>
            <li>Petugas menerima dan mengarsipkan data permohonan tersebut dan memberikan bukti tanda terima penyerahan dokumen kepada pemohon;</li>
            <li>Petugas melakukan verifikasi kelengkapan persyaratan yang telah ditetapkan dan validasi fotocopy Ijazah/STTB/SKP Ijazah yang akan disahkan sesuai dengan dokumen asli Ijazah/STTB atau dokumen asli SKP Ijazah;</li>
            <li>Apabila hasil verifikasi dan validasi tersebut dinyatakan lengkap dan telah sesuai dengan dokumen aslinya, petugas membubuhkan paraf persetujuan di atas dokumen fotocopy Ijazah/STTB/SKP Ijazah dan menyampaikannya kepada Kepala Kantor Wilayah Kementerian Agama atau pejabat yang berwenang lainnya untuk membubuhkan tanda tangan pengesahan.</li>
            <li>Pejabat yang berwenang membubuhkan tanda tangan pada fotocopy Ijazah/STTB/SKP Ijazah sebagai tanda pengesahan fotocopy Ijazah/STTB/SKP Ijazah sesuai aslinya;</li>
            <li>Petugas memberikan nomor dan membubuhkan cap stempel pada fotocopy Ijazah/STTB/SKP Ijazah yang telah ditandatangani oleh pejabat yang berwenang;</li>
            <li>Petugas menyerahkan dokumen fotocopy Ijazah/STTB/SKP Ijazah yang telah ditandatangani oleh pejabat yang berwenang kepada pemohon yang dilengkapi dengan bukti tanda terima pernyerahan kembali dokumen.</li>
        </ol>
        <h2>Estimasi Waktu Pelayanan</h2>
        <a class="list">30 Menit/dokumen jika Syarat Ketentuan terpenuhi.</a>
        </div>
            
            <a href="<?php echo base_url('index.php/Home_controler/ods14')?>"><button class="btn btn-primary btn-lg">Kembali</button></a>

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

