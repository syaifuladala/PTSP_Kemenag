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
        <strong class="card-title">Profil</strong>
      </div>
      <div class="card-body">
        <!-- Credit Card -->
        <div id="pay-invoice">
          <div class="card-body">
            <div class="card-title">
              <form action="<?php echo base_url('index.php/User_controller/update_profil'); ?>" method="post">
                <?php foreach ($detail as $key => $value) { ?>
                  <center><img width="150px" src="<?php echo base_url('assets/gambar/user_avatar.png'); ?>">
                  </div>
                  <table class="table">
                    <tr>
                      <td>NIK</td>
                      <td><input type="text" name="nik" class="form-control" value="<?php echo $value['nik'];?>"></td>
                    </tr>
                    <tr>
                      <td>Nama Lengkap</td>
                      <td><input type="text" name="nama" class="form-control" value="<?php echo $value['nama'];?>"></td>
                    </tr>
                    <tr>
                      <td>Alamat email</td>
                      <td><input type="text" name="email" class="form-control" value="<?php echo $value['email'];?>"></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td><textarea name="alamat" class="form-control" rows="3"><?php echo $value['alamat']; ?></textarea></td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td><select class="form-control" name="jenis_kelamin">
                        <option></option>
                        <option value="laki-laki" <?php if ($value['jenis_kelamin']=="laki-laki"){echo "selected";} ?>>Laki-laki</option>
                        <option value="perempuan" <?php if ($value['jenis_kelamin']=="perempuan"){echo "selected";} ?>>Perempuan</option>
                      </select></td></td>
                    </td>
                  </tr>
                  <td>Password</td>
                  <td><input type="Password" name="password" id="password" class="form-control" value="<?php echo $value['password']; ?>">
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
                    <td></td><td><button class="btn btn-default">Simpan</button></td>
                  </tr>
                </table>
              <?php } ?>
            </form>
          </div>
        </div>

      </div>
    </div> <!-- .card -->









  </div>

  <div class="bg-success" style="margin-top: 40px; clear: both" >
    <p align="center" style="padding: 20px; color:white;">Copyright © 2019 PTSP Kemenag Kanwil DIY. All rights reserved.</p>
  </div>

</body>


</html>