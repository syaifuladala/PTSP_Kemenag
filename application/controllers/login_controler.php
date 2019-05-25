<?php

class login_controler extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('session');
    }
    
    
    public function login_user(){
        
        $ada = false;
        
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');
        
        $data_user = $this->login_model->cek_login($nik,$password);
        
        foreach($data_user as $lvl){
            
        if($lvl['level'] == 1){
           
        }
        elseif ($lvl['level'] == 2) {
           
            $ada = true;
            
            $data_session = array(
                'nik' => $nik ,
                'password' => $password,
                'level' => 2
            );

            $this->session->set_userdata($data_session);
            redirect('admin_controler');
            
           
        }
        
        if ($lvl['level'] == 3) {
            
            $ada = true;
            
            $data_session = array(
                'nik' => $nik ,
                'password' => $password,
                'level' => 3
            );

            $this->session->set_userdata($data_session);
            
            $this->load->view('user/userhome');
        }
            
        }
        
        if($ada == false){
        echo '<script>alert("Login gagal!! username atau password Salah");</script>';
        redirect('Home_controler', 'refresh');  
        }
        
        
            }
  
    public function logout() {
        $this->session->sess_destroy();
        redirect('home_controler');
    }


}