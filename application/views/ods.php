<html>
    <head>
        <title>PTSP</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/menu_utama.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
        <style media="screen">
        .navbar a:hover{
        background-color: #009c41;
        }
         </style>
    </head>
    <body>

        <div class="mynav">
         <nav class="navbar navbar-expand-lg navbar-success bg-success" >
            <h6 class="navbar-brand"><span class="text-white" >PTSP Kemenag DIY</span></h6>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" style="margin-top: 12px">
                <li class="nav-item" >
                  <a class="nav-link" href="<?php echo base_url('index.php/Home_controler/index')?>"><span class="text-white" >Beranda</span><span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item" >
                  <a class="nav-link" href="<?php echo base_url('index.php/Home_controler/layanan')?>"><span class="text-white" >Layanan</span></a>
              </li>
              <li class="nav-item" >
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
            
            <center>
                <div style="background-image: url(<?php echo base_url('assets/gambar/head3.jpg'); ?>);" class="ptsp">
            </div>
            </center>
            
            <center><h2 style="font-size: 50px;">Layanan - Layanan PTSP Kemenag Kanwil DIY : </h2></center>
            
            
        <!--layanan2--> 
            
        <div class="mymenu" >
          <a href="<?php echo base_url('index.php/Home_controler/ods1')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods1.png')?>"></a>
            Ijin Belajar Strata 1 bagi PNS Kemenag  
        </div>
            
         <div class="mymenu" >
          <a href="<?php echo base_url('index.php/Home_controler/ods2')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods2.png')?>"></a>
            Tugas Belajar Strata 1 bagi PNS Kemenag
        </div>
            
        <div class="mymenu" >
          <a href="<?php echo base_url('index.php/Home_controler/ods3')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods3.png')?>"></a>
           Izin Penelitian
        </div>
        
         <div class="mymenu" >
          <a href="<?php echo base_url('index.php/Home_controler/ods4')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods4.png')?>"></a>
           Ijin Pengajuan Magang/PKL
        </div>
        
         <div class="mymenu" >
         <a href="<?php echo base_url('index.php/Home_controler/ods5')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods5.png')?>"></a>
            Surat Keterangan Pengganti Ijazah
        </div>
        
        <div class="mymenu" >
         <a href="<?php echo base_url('index.php/Home_controler/ods6')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods6.png')?>"></a>
            Permohonan Informasi Keagamaan
        </div>
        
        <div class="mymenu" >
         <a href="<?php echo base_url('index.php/Home_controler/ods7')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods7.png')?>"></a>
            Permohonan Pengukuran Arah Kiblat
        </div>
        
         <div class="mymenu" >
         <a href="<?php echo base_url('index.php/Home_controler/ods8')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods8.png')?>"></a>
            Rekomendasi Pindah Sekolah
        </div>
        
        <div class="mymenu" >
         <a href="<?php echo base_url('index.php/Home_controler/ods9')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods9.png')?>"></a>
            Rekomendasi ijin Belajar ke Luar Negeri
        </div>
        
        <div class="mymenu" >
         <a href="<?php echo base_url('index.php/Home_controler/ods10')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods10.png')?>"></a>
            Rekomendasi Paspor Pendidikan dan Keagamaan
        </div>
        
        <div class="mymenu" >
         <a href="<?php echo base_url('index.php/Home_controler/ods11')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods11.png')?>"></a>
            Rekomendasi RPTKA(Rencana Penggunaan Tenaga Kerja Asing) dan IMTA
        </div>
        
        <div class="mymenu" >
         <a href="<?php echo base_url('index.php/Home_controler/ods12')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods12.png')?>"></a>
           Rekomendasi ITAS(ijin terbatas)
        </div>
        
        <div class="mymenu" >
         <a href="<?php echo base_url('index.php/Home_controler/ods13')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods13.png')?>"></a>
           Rekomendasi Kegiatan Keagamaan
        </div>
        
        <div class="mymenu" >
        <a href="<?php echo base_url('index.php/Home_controler/ods14')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods14.png')?>"></a>
         Legalisir Dokumen
        </div>

        <div class="mymenu" >
        <a href="<?php echo base_url('index.php/Home_controler/ods15')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods15.png')?>"></a>
        Konsultasi Keagamaan dan Non Keagamaan
        </div>

        <div class="mymenu" >
        <a href="<?php echo base_url('index.php/Home_controler/ods16')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods16.png')?>"></a>
        Permohonan Petugas Agama dan Keagamaan
        </div>

        <div class="mymenu" >
         <a href="<?php echo base_url('index.php/Home_controler/ods17')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods17.png')?>"></a>
         Rekomendasi Izin Belajar Bagi WNA
        </div>
        
        <div class="mymenu" >
         <a href="<?php echo base_url('index.php/Home_controler/ods18')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods18.png')?>"></a>
         Pelayanan Tata Persuratan
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
