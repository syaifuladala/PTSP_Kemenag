<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_controller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    public function index(){

        $level = $_SESSION['level'];
        
        if($level == 3)
            $this->load->view('user/userhome');
        else {
         echo '<script>alert("Login Gagal!! Username atau Password Salah");</script>';
         redirect('Home_controler', 'refresh');  
    }
}

public function ajukanpermohonan(){
    $nik = $_SESSION['nik'];
    $data['layanan']= $this->user_model->tampil_data();
    $isi['pengajuan']= $this->user_model->tampil_isi($nik);
    $this->load->view('user/ajukanpermohonan',$isi + $data);
}

public function profil(){
    $nik = $_SESSION['nik'];
    $data_user['detail']= $this->user_model->get_user_detail($nik);
    $this->load->view('user/profil',$data_user);

}

public function update_profil(){
    $nik = $_SESSION['nik'];
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $foto = $this->input->post('foto');
    $password = $this->input->post('password');
    $dataupdate = [
        'nama' => $nama,
        'alamat' => $alamat,
        'email' => $email,
        'jenis_kelamin' => $jenis_kelamin,
        'password' => $password,
        'foto' => $foto
    ];
    $this->user_model->update_user($nik, $dataupdate);
    ?>
    <script type="text/javascript">
        alert('Data Disimpan');
    </script>
    <?php
    $this->load->view('user/userhome');

}


public function daftar(){
    $level='3';
    $daftar = [
        'nik' => $this->input->post('nik'),
        'password' => $this->input->post('password'),
        'level' => $level
    ];
    $this->user_model->daftar_user($daftar);
    ?>
    
    <script type="text/javascript"> alert("Pendaftaran Berhasil Silahkan Login");  </script>
        
        <?php
        
        $this->load->view('home');
}

public function ods3a(){
    $nik = $_SESSION['nik'];
    $this->load->model('form_model');
    $user['data']= $this->form_model->index($nik);
    $this->load->view('upload_layanan/upload_ods3a',$user);
}

public function ods4() {
    $nik = $_SESSION['nik'];
    $this->load->model('user_ods4_model');
    $user['data']= $this->user_ods4_model->index($nik);
    $this->load->view('user/ods4_form', $user);
}

public function hasil(){
    $id_pelayanan = $this->input->post('id_pelayanan');
    $id_pengajuan = $this->input->post('id_pengajuan');
    if ($id_pelayanan=='ods1') {
        //$data['hasil'] = $this->user_model->hasil_ods3a($id_pengajuan);
    }else if ($id_pelayanan=='ods2') {
        //$data['hasil'] = $this->user_model->hasil_ods3a($id_pengajuan);
    }else if ($id_pelayanan=='ods3a') {
        $data['hasil'] = $this->user_model->hasil_ods3a($id_pengajuan);
    }else if ($id_pelayanan=='ods3b') {
        $data['hasil'] = $this->user_model->hasil_ods3a($id_pengajuan);
    }else if ($id_pelayanan=='ods4') {
        //$data['hasil'] = $this->user_model->hasil_ods3a($id_pengajuan);
    }
    $this->load->view('user/hasil',$data);
}


}
