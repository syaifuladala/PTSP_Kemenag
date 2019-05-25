
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pengajuan Izin Magang</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    
    <!-- icon tab bar
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="<?php echo base_url('assets/css/info.css')?>"

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


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


<div class="container"> 

    <center><br>
        <img class="icon_home" src="<?php echo base_url('assets/gambar/ods/ods3a.png')?>">
        <h1>IZIN MAGANG</h1>
    </center>

    <div class="card">
      <div class="card-header">
        <strong class="card-title">Masukkan Data</strong>
    </div>
    <div class="card-body">
        <!-- Credit Card -->
        <div id="pay-invoice">
          <div class="card-body">
            <div class="card-title">

                <?php
                $chara= '123456789';
                $resulta = '';
                for ($i = 0; $i < 3; $i++)
                    $resulta .= $chara[mt_rand(0, 8)];
                $charb = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $resultb ='';
                for ($i = 0; $i < 3; $i++)
                    $resultb .= $charb[mt_rand(0, 25)];
                $result=$resulta."".$resultb;
                ?>
                <?php //echo $file.$error;?>
                <?php echo form_open_multipart('User_ods4_Form_Controler/upload_ods4'); ?>
<!--                <form action="<?php// echo base_url('index.php/Form_controller/upload_ods3a'); ?>" method="post">-->
                    <center>
                        <?php foreach ($data as $key => $value) { ?>
                            <input type="hidden" name="id_pengajuan" value="<?php echo $result;?>">
                            <input type="hidden" name="id_layanan" value="ods4">
                            <input type="hidden" name="tgl_pengajuan" value="<?php echo date("Y-m-d");?>">
                            <input type="hidden" name="status" value="pending">
                            <input type="hidden" name="komentar" value=" ">
                            <input type="hidden" name="hasil" value="<?php echo $result.'.jpg'; ?>">
                            <table class="table">
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td><input type="text" name="nama" value="<?php echo $value['nama'] ?>" class="form-control" required></td>
                                </tr>
                                <tr>
                                    <td>Nomor Identitas</td>
                                    <td><input type="text" name="nik" value="<?php echo $value['nik'] ?>" class="form-control" required></td>
                                </tr>
                                <tr>
                                    <td>Nomor Induk Mahasiswa</td>
                                    <td><input type="text" name="nim" class="form-control" required></td>
                                </tr>
                                <tr>
                                    <td>Nomor HP</td>
                                    <td><input type="text" name="nohp" class="form-control" required></td>
                                </tr>
                                <tr>
                                    <td>Program Studi/Jurusan</td>
                                    <td><input type="text" name="prodi" class="form-control" required></td>
                                </tr>
                                <tr>
                                    <td>Fakultas</td>
                                    <td><input type="text" name="fakultas" class="form-control" required></td>
                                </tr>
                                <tr>
                                    <td>Universitas</td>
                                    <td><input type="text" name="univ" class="form-control" required></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Penelitian</td>
                                    <td><input type="date" name="tgl_mulai" class="form-control" required> sampai dengan <input type="date" name="tgl_akhir" class="form-control" required></td>
                                </tr>
                                <tr>
                                    <td>Surat Permohonan Izin Penelitian/Observasi dari Lembaga Resmi.</td>
                                    <td><input type="file" id="file-input" name="surat_izin_penelitian" class="form-control-file" required></td>
                                </tr>
                                <tr>
                                    <td>Fotokopi Kartu Mahasiswa/KTP (Idenstitas)</td>
                                    <td><input type="file" id="file-input" name="fc_identitas" class="form-control-file" required></td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                        <input type="submit" class="btn btn-primary" value="KIRIM">
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        RESET
                                    </button>
                                </td>
                            </tr>
                        </table>
                    <?php } ?>
                </center>
            </form>

        </div>
    </div>
</div>

</div>
</div> <!-- .card -->

<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col col-sm-12"> 
                <div class="bg-success" style="margin-top: 40px">
                    <p align="center" style="padding: 20px; color:white;">Copyright © 2019 PTSP Kemenag Kanwil DIY. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>