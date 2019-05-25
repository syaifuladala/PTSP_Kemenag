<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Back Office Admin</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/menu_utama.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
   
    <!-- navbar buatan sendiri -->
    
    <div class="mynav" style="z-index: 2">
         <nav class="navbar navbar-expand-lg navbar-success bg-success" >
            <h6 class="navbar-brand" href="<?php echo site_url(''); ?>"><span class="text-white" >PTSP Kemenag DIY</span></h6>
            <ul class="navbar-nav" style="margin-top: 2px">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/admin_controler/index')?>"><span class="text-white" >Pengajuan</span></a>
                </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/login_controler/logout')?>"><span class="text-white" >logout</span></a>
              </li>
              <li class="nav-item">
                  <form action="<?php echo site_url('searching_admin_controler/getstring')?>" method="GET">
                    <table>
                        <tr>
                            <td>
                      <input type="text" class="form-control" name="search" placeholder="Cari ID/Nama Pengaju Disini" style="width: 500px;"></td>
                      <td><input type="submit" class="btn btn-default" value="Cari" name=""></td>
                      </tr>
                      </table>
                  </form>
              </li>
            </ul>
        </nav>
        </div>
    
     <!-- navbar buatan sendiri -->
     
     

    <!-- Right Panel -->

    <div class="container" style="margin-top: 90px; z-index: 3">
    
    <div id="right-panel" class="right-panel">

        
<!-- Tulisan Dashboard -->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-12">
                       
                            <div class="page-title">
                                <center><h1>Back Office</h1></center>
                            </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

<!-- Tulisan Dashboard -->

<!-- btn pilihan tabel -->
<a href="<?php echo base_url('index.php/admin_controler')?>"><button class="btn btn-outline-primary">Pengajuan Baru</button></a>
<a href="<?php echo base_url('index.php/admin_controler/all_data')?>"><button class="btn btn-outline-success">Semua Pengajuan</button></a>
<!-- btn pilihan tabel -->

<!-- table -->

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Pengajuan Terbaru</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th class="avatar">Avatar</th>
                                            <th>ID Layanan</th>
                                            <th>Nama</th>
                                            <th>Layanan</th>
                                            <th>Tanggal</th>
                                            <th>Detail</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <!-- penampilan data pengajuan -->
                                        <?php
                                        
                                        if($ada_data){
                                        
                                        $no = 1;
                                        foreach ($data as $mydata){ ?>
                                        
                                        <tr>
                                            <td class="serial"><?php echo $no; $no++;?></td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td> <?php echo $mydata['id_pengajuan'];?> </td>
                                            <td>  <span class="name"><?php echo $mydata['nama']; ?></span> </td>
                                            <td> <span class="product"><?php echo $mydata['nama_layanan'];?></span> </td>
                                            <td> <?php echo $mydata['tgl_pengajuan'];?></td>
                                            <td><span class="count">
                                                    <a href="<?php echo base_url();?>index.php/Admin_<?php echo $mydata['id']?>_Controler/detail_pengajuan_<?php echo $mydata['id'] ?>?id_pengajuan=<?php echo $mydata['id_pengajuan'] ?>"><button class="btn btn-primary">Detail</button></a>
                                                    
                                                </span></td>
                                            <td>
                                                <span class="badge badge-complete"><?php echo $mydata['status']; ?></span>
                                            </td>
                                        </tr>
                                        
                                        
                                        <?php 
                                        
                                        
                                        } 
                                        
                                        }else{
                                            ?>
                                    <table>
                                        <tr>
                                            <td>Data Tidak Ditemukan</td>
                                        </tr>
                                    </table>    
                                            <?php
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<!-- table -->

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

</div><!-- /#right-panel -->

<!-- Right Panel -->

    </div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
