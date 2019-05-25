<html>
    <head>
        <title>TUGAS BELAJAR S1 BAGI PNS</title>
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
        
        <div class="container" style="margin-top: 20px" > 
            
        <center>
        <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods2.png')?>">
        <h1>TUGAS BELAJAR S1 BAGI PNS</h1>
        </center>
        
        <div class="info">        
        <h2>Persyaratan</h2>
        
        <table class="table table-hover" border="1">
            
            <thead class="thead-light">
                <tr>
                    <th colspan="3"><center>SYARAT TUGAS BELAJAR</center></th>
                </tr>
            </thead>
            
            <thead class="thead-dark">
                <tr>
                    <th>PERSYARATAN</th>
                    <th>KELENGKAPAN ADMINISTRASI</th>
                    <th>DASAR PERTIMBANGAN</th>
                </tr>
            </thead>
            
            <tr>
                <td>
                    <ol>
                        <li>Berstatus sebagai PNS</li> 
                        <li>Sehat Jasmani & Rohani</li> 
                        <li>DP3 (sekarang PPPK) Tahun Terakhir setiap unsur bernilai BAIK</li> 
                        <li>Dalam 1 Tahun Terakhir tidak pernah dijatuhi Hukuman Disiplin.</li> 
                        <li>Batas Usia Maksimal 10 Tahun sebelum Batas Usia Pensiun</li> 
                        <li>Program studi yang ditempuh memiliki relevansi dengan tugas kedinasan di Lingkungan Kementerian Agama. </li>
                    </ol>
                </td>
           
            
            
                <td>
                    <ol>
                        <li>Surat pengantar dari pimpinan organisasi;</li>
                        <li>Asli Surat Keterangan pemberian beasiswa dari Sponsor;</li> 
                        <li>Asli surat Keterangan dari Perguruan Tinggi yang menyatakan bahwa PNS yang bersangkutan diterima sebagai mahasiswa;</li> 
                        <li>Surat pernyataan yang menyatakan kesediaan untuk melaksanakan tugas belajar sesuai dengan ketentuan yang berlaku</li> 
                        <li>Asli surat perjanjian tugas belajar yang dikeluarkan oleh pihak sponsor yang berlaku; </li>
                        <li>Fc. Sah SK CPNS; </li>
                        <li>Fc. Sah SK PNS;</li> 
                        <li>Fc. Sah SK Pangkat Terakhir;</li> 
                        <li>Fc. Sah DP3 (sekarang PPPK) 1 tahun terakhir;</li> 
                    </ol>
                </td>
                
                <td>
                    <ol>
                        <li>Program Studi yang ditempuh memiliki relevansi dengan tugas kedinasan dengan Kementerian Agama</li> 
                        <li>Masih memiliki masa bhakti sekurang-kurangnya 10 Tahun sebelum Batas Usia Pensiun</li>
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