<html>
    <head>
        <title>Detail Pengajuan</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/menu_utama.css') ?>">
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
        
    <?php foreach ($data_user as $data){?>
     
     <div class="container" style="margin-top: 90px;z-index: 3">
            <div class="row">
                 <div class="col-lg-6" style="border: 2px; border-radius: 10px; border-style: solid; border-color: #6b6c6b; background-color: white;">
                 <form action="<?php echo site_url('admin_controler/update_data_comment_ods3?id_pengajuan='); echo $data['id_pengajuan'];?>" method="POST">
                     <table class="table">
                      <tr>
                            <td>Nama </td>
                            <td><?php echo $data['nama']; ?></td>
                        </tr>
                        <tr>
                            <td>ID Pengajuan</td>
                            <td><?php echo $data['id_pengajuan'];?></td>
                        </tr>
                        <tr>
                            <td>Nama Pengajuan</td>
                            <td><?php echo $data['nama_layanan'];?></td>
                        </tr>
                        <tr>
                            <td>Comment / Catatan</td>
                            <td><textarea class="form-control" name="comment"><?php echo $data['komentar'];?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input class="btn btn-primary" type="submit" value="Update Comment">
                            </td>
                        </tr>
                        </table>
                    </form>
                       
                      
                    
                    
                    
                     <!-- input nomor surat -->
                     <form action="<?php echo site_url('admin_controler/input_no_surat_ods3?id_pengajuan=');echo $data['id_pengajuan'];?>" method="POST">
                         <table class="table">  
                         <tr>
                                <td>Nomor Surat</td>
                                <td><input class="form-control" width="100%" type="text" name="no_surat" value="<?php echo $data['no_surat']?>"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Input No Surat" class="btn btn-primary" ></td>
                            </tr>
                         </table>
                     </form>
                     <!--  input nomor surat-->   
                     
                     <!-- input jabatan pejabat -->
                     
                      <form action="<?php echo site_url('admin_controler/update_jabatan_ods3?id_pengajuan='); echo $data['id_pengajuan'];?>" method="POST">
                         <table class="table">
                         <tr>
                             <td>Jabatan</td>
                             <td><input class="form-control" width="100%" type="text" name="jabatan_pejabat" value="<?php echo $data['jabatan_pejabat']?>"></td>
                         </tr>
                         <tr>
                             <td></td>
                             <td><input type="submit" value="Input Jabatan Pejabat Yang Tanda Tangan" class="btn btn-primary"</td>
                         </tr>
                         </table>
                     </form> 
                     
                     <!-- input jabatan pejabat  -->
                     
                     <!-- input nama pejabat -->
                     
                     <form action="<?php echo site_url('admin_controler/update_nama_pejabat_ods3?id_pengajuan='); echo $data['id_pengajuan'];?>" method="POST">
                         <table class="table">
                         <tr>
                             <td>Nama Pejabat</td>
                             <td><input class="form-control" width="100%" type="text" name="nama_pejabat" value="<?php echo $data['nama_pejabat']?>"></td>
                         </tr>
                         <tr>
                             <td></td>
                             <td><input type="submit" value="Input Nama Pejabat Yang Tanda Tangan" class="btn btn-primary"</td>
                         </tr>
                         </table>
                     </form>                     
                     
                     <!-- input nama pejabat -->
                     
                     
                     
                 
          
                    
                     </div>             
                    
               
                
               
                
                <div class="col-lg-6" style="border: 2px; border-radius: 10px; border-style: solid; border-color: #6b6c6b; background-color: white;">
                 
                    <!-- button comfirm complete/pending -->
                    
                    <table class="table">
                            <tr>
                                <td>Status</td>
                                <td> <?php echo $data['status'] ?></td>
                                
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="<?php echo base_url('index.php/admin_controler/complete_this_ods3?id_pengajuan='); echo $data['id_pengajuan'] ?>" >
                                        <button class="btn btn-primary" >Complete</button></a>
                                <a href="<?php echo base_url('index.php/admin_controler/pending_this_ods3?id_pengajuan='); echo $data['id_pengajuan']?>" >
                                        <button class="btn btn-danger" >Pending</button></a></td>
                            </tr>
                        </table>
                    
                    <!-- button comfirm complete/pending -->
                    
                     <!-- ini button Download surat -->
                    
                    <a href="<?php echo base_url('index.php/view_pdf?id_pengajuan=');echo $data['id_pengajuan'];?>"><button class="btn btn-primary">View PDF Surat Permohonan Izin Penelitian</button></a>
                  
                    <!-- ini button Download surat -->
                    
                    <!-- kirim ke user output surat -->
                    <a href="<?php echo base_url('index.php/admin_controler/upload_surat_hasil_ods3?id_pengajuan=');echo $data['id_pengajuan'];?>" target="_blank">
                        <button class="btn btn-primary">Upload Hasil Pengajuan</button></a>
                    <!-- kirim ke user output surat -->
                    
                    
                </div>
            </div>
            
     <!-- penampil gambar fotokopi dan surat -->    
         

        <div style="border: 2px; border-radius: 10px; border-style: solid; border-color: #6b6c6b; background-color: white;">
            <table class="table">
                        <tr>
                            <td><h4>Berkas</h4></td>
                        </tr>
                        <tr>
                            <td>Fotokopi Identitas</td>
                            <td> 
                                <img width="100%" src="<?php echo base_url('uploads/'.$data['fc_identitas']); ?>">
                            </td>
                        </tr>
                         <tr>
                            <td>Surat Izin Permohonan</td>
                            <td> 
                                <img width="100%" src="<?php echo base_url('uploads/'.$data['surat_izin_penelitian']); ?>">
                            </td>
                        </tr>
                    </table>
        </div>

         
    <!-- penampil gambar fotokopi dan surat -->  
     
    </div>
     
    
     
     <?php } ?>
     
     
     <footer class="site-footer">
    <div class="footer-inner">
       
               <div class="bg-success" style="margin-top: 40px; clear: both">
                   <p align="center" style="padding: 20px; color:white;">Copyright © 2019 PTSP Kemenag Kanwil DIY. All rights reserved.</p>
               </div>
           
    </div>
</footer>
     
     
     
    </body>
    
    
</html>

