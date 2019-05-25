<html>
    <head>
        <title>PERMOHONAN AUDIENSI</title>
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
        <img class="icon_home" src="<?php echo base_url('assets/gambar/nods/nods3.png')?>">
        <h1>LEGALISASI LEMBAGA AMIL ZAKAT</h1>
        </center>
            
            <div class="info">
            
        <h2>Persyaratan</h2>
        <ol class="list">
            Permohonan legalisasiLembagaAmil Zakat diajukan secara tertulis kepada KepalaKantor Wilayah dengan melampirkan :
<li>Rekomendasi BAZNAS;
<li>Anggaran Dasar Organisasi;
<li>Surat keterangan terdaftar dari organisasi/ satuan kerja perangkat daerah pemerintah kabupaten/ kota yang mempunyai tugas dan fungsi menyelenggarakan urusan pemerintah provinsi di bidang kesatuan bangsa dan politik bagi organisasi kemasyarakatan Islam atau surat keputusan pengesahan sebagai badan hukum dari Kementerian Hukum dan HAM bagi yayasan atau perkumpulan berbasis Islam;
<li>Susunan pengawas syari’at yang sekurang-kurangnya terdiri atas ketua dan 1 (satu) anggota;
<li>Surat Pernyataan sebagai Pengawas Syari’at di atas meterai yang ditandatangani oleh masing-masing pengawas syari’at;
<li>Daftar pegawai yang melaksanakan tugas di bidang teknis (penghimpunan, pendistribusian, dan pendayagunaan), administratif dan keuangan, dengan jumlah minimal 8 (delapan) orang pengawas yang dilegalisir pimpinan organisasi kemasyarakatan Islam berskala kabupaten/kota, yayasan berbasis Islam, atau perkumpulan berbasis Islam;
<li>Photocopy kartu BPJS Ketenagakerjaan dan BPJS Kesehatan atau asuransi lain bagi pegawai sebagaimana dimaksud huruf f;
<li>Surat Pernayataan bersedia diaudit syari’at dan keuangan secara berskala di atas meterai dan ditandatangani oleh pimpinan organisasi/ lembaga yang bersangkutan;
<li>Ikhtisar perencanaan program pendayagunaan zakat, infak, sedekah, dan dana sosial keagamaan lainnya baig kesejahteraan umat paling sedikit 3 (tiga) kecamatan yang mencakup:
    <ul class="list">
        <li>Nama program;
        <li>Lokasi program;
        <li>Penerima manfaat
        <li>Zakat yang disalurkan;
        <li>Keluaran (output);
        <li>Hasil (outcome);
        <li>Manfaat (benefit);
    </ul>
        </ol>
        <h2>Estimasi Waktu Pelayanan</h2>
        <a class="list">10 (sepuluh hari kerja).</a>
            </div>
            <a href="<?php echo base_url('index.php/Home_controler/layananNODS')?>"><button class="btn btn-primary btn-lg">Kembali</button></a>
   
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


