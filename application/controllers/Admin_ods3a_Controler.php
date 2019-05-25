<?php

class Admin_ods3a_Controler extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }
    
    public function index() {
        $level = $_SESSION['level'];
        
        if($level == 2){
        $data = $this->admin_model->load_new_data();
        $this->load->view('admin/admin_bo' , ['data' => $data , 'ada_data' => true]);
        }else{
             echo "your not login , login first"; 
        }
    }
    
    public function all_data() {
        $data = $this->admin_model->load_all_data();
        $this->load->view('admin/admin_bo' , ['data' => $data , 'ada_data' => true]);
    }
    
    public function new_data() {
        $data = $this->admin_model->load_new_data();
        $this->load->view('admin/admin_bo' , ['data' => $data , 'ada_data' => true]);
    }
    
    public function detail_pengajuan_ods3a() {
        
        $my_id =  $this->input->get('id_pengajuan');
        
        $data_user = $this->admin_model->get_detail_pengajuan_ods3($my_id);
        $this->load->view('admin/detail_pengajuan_ods3' , ['data_user' => $data_user]);
    }
    
    public function update_data_comment_ods3() {
        $my_id = $this->input->get('id_pengajuan');
        $comment = $this->input->post('comment');
        
        $this->admin_model->update_comment($comment,$my_id);
        
        $data_user = $this->admin_model->get_detail_pengajuan_ods3($my_id);
        $this->load->view('admin/detail_pengajuan_ods3' , ['data_user' => $data_user]);
        
    }
    
    public function complete_this_ods3() {
        $my_id = $this->input->get('id_pengajuan');
        $this->admin_model->update_status($my_id,"complete");
        
        // baris ini akan diisi code yang mengirim file ke user
        
        $data_user = $this->admin_model->get_detail_pengajuan_ods3($my_id);
        $this->load->view('admin/detail_pengajuan_ods3' , ['data_user' => $data_user]);
    }
    
    public function pending_this_ods3(){
        $my_id = $this->input->get('id_pengajuan');
        
        $this->admin_model->update_status($my_id,"pending");
        
        $data_user = $this->admin_model->get_detail_pengajuan_ods3($my_id);
        $this->load->view('admin/detail_pengajuan_ods3' , ['data_user' => $data_user]);
    }
    
//    public function update_kelengkapan_berkas_ods3() {
//        
//        $my_id = $this->input->get('id_pengajuan');
//        
//        $surat = $this->input->post('surat_ijin');
//        $fc = $this->input->post('fc_identitas');
//       
//        echo $fc;
//        
//        $this->admin_model->update_status_berkas_ods3($surat,$fc,$my_id);
//        
//        $data_user = $this->admin_model->get_detail_pengajuan_ods3($my_id);
//        $this->load->view('admin/detail_pengajuan' , ['data_user' => $data_user]);
//        
//    }
    
    public function input_no_surat_ods3() {
        $my_id = $this->input->get('id_pengajuan');
     
        $no_surat = $this->input->post('no_surat');
        
        $this->admin_model->insert_no_surat($no_surat,$my_id);
        
        $data_user = $this->admin_model->get_detail_pengajuan_ods3($my_id);
        $this->load->view('admin/detail_pengajuan_ods3' , ['data_user' => $data_user]);
    }
    
    public function upload_surat_hasil_ods3() {
        $id = $this->input->get('id_pengajuan');
        $this->load->view('admin/upload_hasil_ods3' , array( 'id_pengajuan' => $id , 'error' => '' ));
        
    }
    
    public function update_nama_pejabat_ods3() {
        $my_id = $this->input->get('id_pengajuan');
     
        $nama_pejabat = $this->input->post('nama_pejabat');
        
        $this->admin_model->update_nama_pejabat($nama_pejabat,$my_id);
        
        $data_user = $this->admin_model->get_detail_pengajuan_ods3($my_id);
        $this->load->view('admin/detail_pengajuan_ods3' , ['data_user' => $data_user]);
    }
    
    public function update_jabatan_ods3() {
        $my_id = $this->input->get('id_pengajuan');
     
        $jabatan_pejabat = $this->input->post('jabatan_pejabat');
        
        $this->admin_model->update_jabatan($jabatan_pejabat,$my_id);
        
        $data_user = $this->admin_model->get_detail_pengajuan_ods3($my_id);
        $this->load->view('admin/detail_pengajuan_ods3' , ['data_user' => $data_user]);
        
    }
    
    
}