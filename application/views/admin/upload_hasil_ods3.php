<html>
    <head>
        
    <link rel="stylesheet" href="<?php echo base_url('assets/css/menu_utama.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
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
     
     
         <div style="margin-top: 90px" class="container">
         <label for="file-input" class=" form-control-label"><strong>Kirim Surat</strong></label>
        <?php echo $error;?>
        <?php echo form_open_multipart('admin_upload_ods3_controler/do_upload?id_pengajuan='.$id_pengajuan.'&&nama_file='.$id_pengajuan.'.jpg');?>
             
        <input type="file" id="file-input" name="file-user-ods3" class="form-control-file">
        <input class="btn btn-primary" type="submit" value="Kirim" style="margin-top: 8px">
        </form>
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