<html>
    <head>
        <title>PTSP</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/menu_utama.css') ?>">
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
        
        <div class="container" style="margin-top: 90px">
        
        <center><h1> Apakah Layanan Ini Yang Anda Cari ? </h1></center>    
        
        <!-- proses penampilan hasil seacrhing -->
        
        <?php 

        foreach ($data as $id){
        
        if($id['id'] == "nods1"){
        ?>
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/nods1')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods1.png')?>"></a>
            PELAYANAN IJIN PENDIRIAN RA & MADRASAH
        </div>
        
        <?php }
        
        if($id['id'] == "nods2"){
        ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/nods2')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods2.png')?>"></a>
            PERMOHONAN AUDIENSI
        </div>
   
        <?php }
        
        if($id['id'] == "nods3"){
        ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/nods3')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods3.png')?>"></a>
            LEGALISASI LEMBAGA AMIL ZAKAT
        </div>
        
        <?php } 
        
        if($id['id'] == "nods4"){
        ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/nods4')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods4.png')?>"></a>
            PERMOHONAN REKOMENDASI PENDIRIAN PENYELENGGARA PERJALANAN IBADAH UMRAH PADA KANWIL KEMENAG DIY
        </div>
        
        <?php }
        
         if($id['id'] == "nods4a"){
        ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/nods4a')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods4a.png')?>"></a>
            PERMOHONAN REKOMENDASI PENDIRIAN PENYELENGGARA PERJALANAN IBADAH UMRAH PADA KANWIL KEMENAG DIY
        </div>
        
         <?php }
         
         if($id['id'] == "nods4b"){
         ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/nods4b')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods4b.png')?>"></a>
            Rekomendasi Perpanjangan PPIU
        </div>
        
         <?php }
         
         if($id['id'] == "nods5"){
         ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/nods5')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods5.png')?>"></a>
            PERMOHONAN SURAT KETERANGAN PENYELENGGARA IBADAH HAJI KHUSUS
        </div>
        
         <?php }
         
         if($id['id'] == "nods5a"){
         ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/nods5a')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods5a.png')?>"></a>
            PERMOHONAN REKOMENDASI PENDIRIAN PENYELENGGARA PERJALANAN IBADAH UMRAH
        </div>
        
         <?php }
         
         if($id['id'] == "nods5b"){
         ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/nods5b')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods5b.png')?>"></a>
            PERMOHONAN SURAT KETERANGAN PERPANJANGAN PENYELENGGARA IBADAH HAJI KHUSUS
        </div>
        
         <?php }
         
         if($id['id'] == "nods6"){
         ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/nods6')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods6.png')?>"></a>
            IZIN KANTOR CABANG PENYELENGGARA IBADAH HAJI KHUSUS DAN/ATAU PENYELENGGARA PERJALANAN IBADAH UMRAH
        </div>
        
         <?php } 
         
         if($id['id'] == "nods6a"){
         ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/nods6a')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods6a.png')?>"></a>
            IZIN PENDIRIAN KANTOR CABANG PENYELENGGARA IBADAH HAJI KHUSUS DAN/ATAU PENYELENGGARA PERJALANAN IBADAH UMRAH
        </div>
        
         <?php }
         
         if($id['id'] == "nods7"){
         ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/nods6a')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods6a.png')?>"></a>
            PERPANJANGAN IZIN KELOMPOK BIMBINGAN IBADAH HAJI
        </div>
        
        <?php } 
        
        if($id['id'] == "ods1"){
        ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods1')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods1.png')?>"></a>
            IZIN BELAJAR S1 BAGI PNS DI LINGKUNGAN KANWIL KEMENAG DIY
        </div>
        
        <?php }
        
        if($id['id'] == "ods2"){
        ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods2')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods2.png')?>"></a>
            TUGAS BELAJAR S1 BAGI PNS DI LINGKUNGAN KANWIL KEMENAG DIY
        </div>
        
        <?php }
        
        if($id['id'] == "ods3"){
        ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods3')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods3.png')?>"></a>
            IZIN PENELITIAN
        </div>
        
        <?php }
        
        if($id['id'] == "ods3a"){
        ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods3a')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods3a.png')?>"></a>
            IZIN PENELITIAN DI MADRASAH
        </div>
        
        <?php } 
        
        if($id['id'] == "ods3b"){
        ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods3b')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods3b.png')?>"></a>
            IZIN PENELTIAN DI KANWIL
        </div>
        
        <?php } 
        
        if($id['id'] == "ods4"){
        ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods4')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods4.png')?>"></a>
            PENGAJUAN IJIN MAGANG PADA KANWIL KEMENAG DIY
        </div>
        
        <?php } 
        
        if($id['id'] == "ods5"){
        ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods5')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods5.png')?>"></a>
            SURAT KETERANGAN PENGGANTI IJAZAH
        </div>
        
        <?php }
        
         if($id['id'] == "ods6"){
        ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods6')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods6.png')?>"></a>
           PERMOHONAN INFORMASI KEAGAMAAN PADA KANWIL KEMENAG DIY
        </div>
        
         <?php }
         
          if($id['id'] == "ods7"){
         ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods7')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods7.png')?>"></a>
          PERMOHONAN SERTIFIKASI ARAH KIBLAT PADA KANWIL KEMENAG DIY
        </div>
        
          <?php }
          
          if($id['id'] == "ods8"){
          ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods8')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods8.png')?>"></a>
          REKOMENDASI PINDAH SEKOLAH
        </div>
        
          <?php }
            
          if($id['id'] == "ods9"){
          ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods9')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods9.png')?>"></a>
         REKOMENDASI IJIN BELAJAR KE LUAR NEGERI
        </div>
        
          <?php }
          
          if($id['id'] == "ods10"){
          ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods10')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods10.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
          <?php }
          
          if($id['id'] == "ods11"){
          ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods11')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods11.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
          <?php }
          
           if($id['id'] == "ods12"){
          ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods12')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods12.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
           <?php }
           
            if($id['id'] == "ods13"){
           ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods13')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods13.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
            <?php }
            
             if($id['id'] == "ods14"){
            ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods14')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods14.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
        <?php }
            
             if($id['id'] == "ods14a"){
            ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods14a')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods14a.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
        <?php }
            
             if($id['id'] == "ods14b"){
            ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods14b')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods14b.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
        <?php }
            
             if($id['id'] == "ods14c"){
            ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods14c')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods14c.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
        <?php }
            
             if($id['id'] == "ods15"){
            ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods15')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods15.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
         <?php }
            
             if($id['id'] == "ods15a"){
            ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods15a')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods15a.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
        <?php }
            
             if($id['id'] == "ods15b"){
            ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods15b')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods15b.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
          <?php }
            
             if($id['id'] == "ods15c"){
            ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods15c')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods15c.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
        <?php }
            
             if($id['id'] == "ods16"){
            ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods16')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods16.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
        <?php }
            
             if($id['id'] == "ods16a"){
            ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods16a')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods16a.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
         <?php }
            
             if($id['id'] == "ods16b"){
            ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods16b')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods16b.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
        <?php }
            
             if($id['id'] == "ods16c"){
            ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods16c')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods16c.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
        <?php }
            
             if($id['id'] == "ods17"){
            ?>
        
         <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods17')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods17.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
         <?php }
            
             if($id['id'] == "ods18"){
            ?>
        
        <div class="mymenu">
            <a href="<?php echo base_url('index.php/home_controler/ods18')?>">
                <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods18.png')?>"></a>
         REKOMENDASI PASPOR PENDIDIKAN DAN KEAGAMAAN
        </div>
        
        <?php }
        
            if($id['id'] == null){
                echo "pencarian anda tidak ditemukan";
            }
        
             } ?>
        
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
