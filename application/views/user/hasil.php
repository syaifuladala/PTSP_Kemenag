<html>
<head>
  <title>PTSP</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/menu_utama.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body style="background-image: url(<?php echo base_url('assets/gambar/bg.jpg') ?>)">

  <div>

    <nav class="navbar navbar-expand-lg navbar-success bg-success" >
      <a class="navbar-brand" href="<?php echo site_url(''); ?>"><span class="text-white" >PTSP Kemenag DIY</span></a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/User_controller/index')?>"><span class="text-white" >Beranda</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/User_controller/ajukanpermohonan')?>"><span class="text-white" >Ajukan Permohonan</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/User_controller/profil')?>"><span class="text-white" >Profil</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/login_controler/logout')?>"><span class="text-white" >Logout</span></a>
        </li>
      </ul>
    </nav>
  </div>


  <div class="container" >








    <div class="card">
      <div class="card-header">
        <strong class="card-title">Hasil</strong>
      </div>
      <div class="card-body">
        <!-- Credit Card -->
        <div id="pay-invoice">
          <div class="card-body">
            <div class="card-title">

              
                
                <?php foreach ($hasil as $key => $data) { ?>
                
                <table>
                  <tr>
                    <td width="30%">Status</td>
                    <td width="70%" align="right">
                      <?php if($data['status']=="pending"){ ?>
                        <button disabled class="btn btn-danger"><?php echo $data['status']; ?></button>
                      <?php }else if($data['status']=="complete"){ ?>
                        <button disabled class="btn btn-success"><?php echo $data['status']; ?></button>
                      <?php } ?>
                    </td>
                   </tr>
                   <tr>
                     <td>Pesan </td>
                     <td><?php echo $data['komentar']; ?></td>
                   </tr>
                </table>
                <br>
                <center>
                  <?php if($data['hasil']==''){ ?>
                BELUM ADA HASIL
                <?php }else{ ?>
                <img src="<?php echo base_url('uploads_hasil/'.$data['hasil']); ?>">
                <?php } } ?>
                
              </center>

            </div>
          </div>

        </div>
      </div> <!-- .card -->







</div>

    </div>

    <div class="bg-success" style="margin-top: 40px; clear: both" >
      <p align="center" style="padding: 20px; color:white;">Copyright © 2019 PTSP Kemenag Kanwil DIY. All rights reserved.</p>
    </div>

  </body>


  </html>