<?php

class searching_admin_controler extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('searching_admin_model');
    }
    
    public function getstring() {
        $mysearch = $this->input->get('search');
        
        if( $this->searching_admin_model->search_id($mysearch) != null ){    
        $value = $this->searching_admin_model->search_id($mysearch);    
        $this->load->view('admin/admin_bo' , ['data' => $value , 'ada_data' => true]); 
        }elseif ($this->searching_admin_model->search_nama($mysearch) != null ) {
        $value = $this->searching_admin_model->search_nama($mysearch);    
        $this->load->view('admin/admin_bo' , ['data' => $value , 'ada_data' => true]); 
        }else{
        $this->load->view('admin/admin_bo' , ['ada_data' => false]);   
        }
        
        
        
        
    }
    
}