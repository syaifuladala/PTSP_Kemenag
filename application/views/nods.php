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
            <h6 class="navbar-brand" ><span class="text-white" >PTSP Kemenag DIY</span></h6>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" style="margin-top: 10px">
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
        
        <div class="mymenu" >
          <a href="<?php echo base_url('index.php/Home_controler/nods1')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods1.png')?>"></a>
           Pelayanan Izin Pendirian RA & Madrasah
        </div> 

        <div class="mymenu" >
         <a href="<?php echo base_url('index.php/Home_controler/nods2')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods2.png')?>"></a>
            Permohonan Audiensi dengan Kakanwil
        </div>

        <div class="mymenu" >
          <a href="<?php echo base_url('index.php/Home_controler/nods3')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods3.png')?>"></a>
           Legalisasi Lembaga Amil ZAKAT
        </div>

        <div class="mymenu" >
          <a href="<?php echo base_url('index.php/Home_controler/nods4')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods4.png')?>"></a>
           PERMOHONAN REKOMENDASI PENYELENGGARA PERJALANAN IBADAH UMRAH (PPIU)
        </div>

        <div class="mymenu" >
          <a href="<?php echo base_url('index.php/Home_controler/nods5')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods5.png')?>"></a>
           PERMOHONAN SURAT KETERANGAN PENYELENGGARA IBADAH HAJI KHUSUS
        </div>

        <div class="mymenu" >
          <a href="<?php echo base_url('index.php/Home_controler/nods6')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods6.png')?>"></a>
            IZIN KANTOR CABANG PENYELENGGARA IBADAH HAJI KHUSUS DAN/ATAU PENYELENGGARA PERJALANAN IBADAH UMRAH
        </div>

        <div class="mymenu" >
          <a href="<?php echo base_url('index.php/Home_controler/nods7')?>"><img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods7.png')?>"></a>
            IZIN PENDIRIAN KELOMPOK BIMBINGAN IBADAH HAJI
        </div>

            
        </div>
        
    <div class="clearfix"></div>
        <footer class="site-footer">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bg-success" style="margin-top: 40px; clear: both">
                            <p align="center" style="padding: 20px; color:white;">Copyright © 2019 PTSP Kemenag Kanwil DIY. All rights reserved.</p>
                        </div>
                    </div>
                 </div>
            </div>
        </footer>
        
       
</body>

    
</html>