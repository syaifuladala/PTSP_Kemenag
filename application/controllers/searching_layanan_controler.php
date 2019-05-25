<?php

class searching_layanan_controler extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('searching_layanan_model');
    }
    
    public function index() {
        
    }
    
    public function getstring() {
        $mysearch = $this->input->get('search');
        $value = $this->searching_layanan_model->search($mysearch);
       
        
        $this->load->view('searching/hasil_searching' , ['data' => $value]);
        
    }
}
