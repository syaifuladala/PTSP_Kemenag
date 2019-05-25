<?php

class home_controler extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //$this->load->model('admin_model');
    }
    
    public function index(){
        $this->load->view('home');
    }
    

////////////////////////////////////////////
////////////////////////////////////////////
    
    public function ods1() {
        $this->load->view('ods/ods1');
    }

    public function ods2() {
        $this->load->view('ods/ods2');
    }

    public function ods3() {
        $this->load->view('ods/ods3');
    }

    public function ods3a() {
        $this->load->view('ods/ods3a');
    }
    
    public function ods3b() {
        $this->load->view('ods/ods3b');
    }

    public function ods4() {
        $this->load->view('ods/ods4');
    }

    public function ods5() {
        $this->load->view('ods/ods5');
    }
    
    public function ods6() {
        $this->load->view('ods/ods6');
    }
    
    public function ods7() {
        $this->load->view('ods/ods7');
    }

    public function ods8() {
        $this->load->view('ods/ods8');
    }
    
    public function ods9() {
        $this->load->view('ods/ods9');
    }

    public function ods10() {
        $this->load->view('ods/ods10');
    }

    public function ods11() {
        $this->load->view('ods/ods11');
    }
    
    public function ods12() {
        $this->load->view('ods/ods12');
    }
    
    public function ods13() {
        $this->load->view('ods/ods13');
    }

    public function ods14() {
        $this->load->view('ods/ods14');
    }
    
    public function ods14a(){
        $this->load->view('ods/ods14a');
    }

    public function ods14b() {
        $this->load->view('ods/ods14b');
    }
    
    public function ods14c() {
        $this->load->view('ods/ods14c');
    }
    
    public function ods15() {
        $this->load->view('ods/ods15');
    }

    public function ods15a() {
        $this->load->view('ods/ods15a');
    }
    
    public function ods15b() {
        $this->load->view('ods/ods15b');
    }

    public function ods15c() {
        $this->load->view('ods/ods15c');
    }

    public function ods16() {
        $this->load->view('ods/ods16');
    }

    public function ods16a() {
        $this->load->view('ods/ods16a');
    }

    public function ods16b() {
        $this->load->view('ods/ods16b');
    }

    public function ods16c() {
        $this->load->view('ods/ods16c');
    }

    public function ods17() {
        $this->load->view('ods/ods17');
    }

    public function ods18() {
        $this->load->view('ods/ods18');
    }
///////////////////////////////////////////
    ///////////////////////////////////////
    
    
////////////////////////////////////////////////
////////////////////////////////////////////////


    
    public function nods1() {
        $this->load->view('nods/nods1');
    }

    public function nods2() {
        $this->load->view('nods/nods2');
    }

    public function nods3() {
        $this->load->view('nods/nods3');
    }

    public function nods4() {
        $this->load->view('nods/nods4');
    }

    public function nods4a() {
        $this->load->view('nods/nods4a');
    }
    
    public function nods4b() {
        $this->load->view('nods/nods4b');
    }

    public function nods5() {
        $this->load->view('nods/nods5');
    }

    public function nods5a() {
        $this->load->view('nods/nods5a');
    }

    public function nods5b() {
        $this->load->view('nods/nods5b');
    }

    public function nods6() {
        $this->load->view('nods/nods6');
    }

    public function nods6a() {
        $this->load->view('nods/nods6a');
    }
    
    public function nods6b() {
        $this->load->view('nods/nods6b');
    }

    public function nods7() {
        $this->load->view('nods/nods7');
    }

/////////////////////////////////
    //////////////////////////

    public function layanan() {
        $this->load->view('daftar_layanan');
    }

    public function layananODS() {
        $this->load->view('ods');
    }
    
    public function layananNODS() {
        $this->load->view('nods');
    }
    
  
    
//////////////////////////////////
    /////////////////////////////////

    public function daftar(){
        $this->load->view('user/daftar');
    }

    }