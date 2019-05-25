<?php

class view_pdf extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }
    
    public function index(){

    $my_id = $this->input->get('id_pengajuan');    
        
    $data_pemohon = $this->admin_model->select_all_ods3_for_pdf($my_id);

    $this->load->library('convert_pdf');

    $this->convert_pdf->setPaper('Legal', 'potrait');
    $this->convert_pdf->filename = "laporan.pdf";
    $this->convert_pdf->load_view('admin/template_suratods3_pdf', [ 'data_pemohon' => $data_pemohon]);
    }
    
}

