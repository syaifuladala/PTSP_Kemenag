<html>
<style type="text/css">
.tabletambah {
  font-family: sans-serif;
  color: #232323;
  border-collapse: collapse;
  border: 1px solid #999;
}
</style>
<head>
  <title>PTSP</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/menu_utama.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
</head>

<body style="background-image: url(<?php echo base_url('assets/gambar/bg.jpg') ?>)">

    <div class="mynav" style="z-index: 2">  
  <nav class="navbar navbar-expand-lg navbar-success bg-success" >
    <h6 class="navbar-brand" ><span class="text-white" >PTSP Kemenag DIY</span></h6>
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

    <div class="container" style="z-index: 3 ; margin-top: 90px">
    <br><br>
    <div class="card">
      <div class="card-header">




          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Ajukan Permohonan +</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" align="center">Pilih Layanan</h2><button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <table class="">
                  <tr>
                    <td><input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Layanan.."></td>
                  </tr>
                </table>


                <ul class="list-group" id="myUL">
                  <?php foreach ($layanan as $key => $value) {  ?>

                    <li class="list-group-item"><a href="<?php echo base_url('index.php/User_controller/'. $value['id']); ?> "><?php echo $value['nama_layanan']; ?> </a>

                    <?php } ?>
                  </ul>
                  <script>
                    function myFunction() {
                      var input, filter, ul, li, i, txtValue;
                      input = document.getElementById("myInput");
                      filter = input.value.toUpperCase();
                      ul = document.getElementById("myUL");
                      li = ul.getElementsByTagName("li");
                      for (i = 0; i < li.length; i++) {
                        a = li[i].getElementsByTagName("a")[0];
                        txtValue = a.textContent || a.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                          li[i].style.display = "";
                        } else {
                          li[i].style.display = "none";
                        }
                      }
                    }
                  </script>
                </div>

              </div>
            </div>
        </div>
        <div class="card-body">
          <!-- Credit Card -->
          <div id="pay-invoice">
            <div class="card-body">
              <div class="card-title">
                  <table id="bootstrap-data-table" class="table table-hover" >
                  <thead>
                    <tr>
                      <th width="10%">Tanggal Pengajuan</th>
                      <th width="15%">ID Pelayanan</th>
                      <th width="70%">Nama Layanan</th>
                      <th width="5%"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($pengajuan as $key => $nilai) { ?>
                      <tr>
                        <td><?php echo $nilai['tgl_pengajuan']; ?></td>
                        <td><?php echo $nilai['id_pengajuan']; ?></td>
                        <td><?php echo $nilai['nama_layanan']; ?></td>
                        <td><form action="<?php echo base_url('index.php/User_controller/hasil'); ?>" method="post">
                          <input type="hidden" name="id_pelayanan" value="<?php echo $nilai['id']; ?>">
                          <input type="hidden" name="id_pengajuan" value="<?php echo $nilai['id_pengajuan']; ?>">
                          <input type="submit" class="btn btn-default" value="Cek Status"></form></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-success" style="margin-top: 40px; clear: both" >
        <p align="center" style="padding: 20px; color:white;">Copyright © 2019 PTSP Kemenag Kanwil DIY. All rights reserved.</p>
      </div>
    </div>
  </body>
  </html>