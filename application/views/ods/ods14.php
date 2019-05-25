<html>
    <head>
        <title>LEGALISIR DOKUMEN</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/menu_utama.css') ?>">
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
            <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods14.png')?>" style="margin-top: 90px">
        <h1>LEGALISIR DOKUMEN</h1>
        <h2>Pilih Dokumen yang ingin dilegalisir</h2>
        </center>
        
       
             <div class="mymenu" style="margin-left: 90px">
          <a href="<?php echo base_url('index.php/Home_controler/ods14a'); ?>">
              <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods14a.png')?>"></a>
          Piagam  
        </div>
             
             <div class="mymenu" style="margin-left: 130px">
          <a href="<?php echo base_url('index.php/Home_controler/ods14b'); ?>">
              <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods14b.png')?>"></a>
          Ijazah  
        </div>
             
             <div class="mymenu" style="margin-left: 130px">
          <a href="<?php echo base_url('index.php/Home_controler/ods14c'); ?>">
              <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods14c.png')?>"></a>
         Kepegawaian
        </div>
             <div class="clearfix"></div>
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

