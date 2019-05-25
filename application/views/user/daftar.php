<html>
<head>
  <title>Daftar</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/menu_utama.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
</head>
<body style="background-image: url(<?php echo base_url('assets/gambar/bg.jpg') ?>)">

    <div class="mynav" style="z-index: 2">   
    <nav class="navbar navbar-expand-lg navbar-success bg-success">
            <h6 class="navbar-brand" ><span class="text-white" >PTSP Kemenag DIY</span></h6>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" style="margin-top: 7px">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('index.php/Home_controler/index')?>"><span class="text-white" >Beranda</span><span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
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


    <div class="container" style="z-index: 3; margin-top: 90px">
    <br>


    <div class="card">
      <div class="card-header">
        <strong class="card-title">Daftar</strong>
      </div>
      <div class="card-body">
        <!-- Credit Card -->
        <div id="pay-invoice">
          <div class="card-body">
            <div class="card-title">
              <form action="<?php echo base_url('index.php/User_controller/daftar'); ?>" method="post">

                <table class="table">
                  <tr>
                    <td>NIK</td>
                    <td><input type="text" name="nik" class="form-control" required></td>
                  </tr>

                  <td>Password</td>
                  <td><input type="Password" name="password" id="password" class="form-control" required>
                    <input type="checkbox" onclick="myFunction()">Lihat Password

                    <script>
                      function myFunction() {
                        var x = document.getElementById("password");
                        if (x.type === "password") {
                          x.type = "text";
                        } else {
                          x.type = "password";
                        }
                      }
                    </script></td>
                  </tr>
                  <tr>
                    <td></td><td><button class="btn btn-default">Daftar</button></td>
                  </tr>
                </table>
              </form>
            </div>
          </div>

        </div>
      </div> <!-- .card -->


    </div>
    </div>

    <div class="bg-success" style="margin-top: 40px; clear: both">
      <p align="center" style="padding: 20px; color:white;">Copyright © 2019 PTSP Kemenag Kanwil DIY. All rights reserved.</p>
    </div>

  </body>
  </html>
