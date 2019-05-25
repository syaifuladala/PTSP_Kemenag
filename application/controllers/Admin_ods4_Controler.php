<?php

class Admin_ods4_controler extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_ods4_Model');
    }
    
     public function detail_pengajuan_ods4() {
        
        $my_id =  $this->input->get('id_pengajuan');
        
        $data_user = $this->Admin_ods4_Model->get_detail_pengajuan_ods4($my_id);
        $this->load->view('admin/detail_pengajuan_ods4' , ['data_user' => $data_user]);
    }
    
    public function update_data_comment_ods4() {
        $my_id = $this->input->get('id_pengajuan');
        $comment = $this->input->post('comment');
        
        $this->admin_ods4_model->update_comment($comment,$my_id);
        
        $data_user = $this->admin_ods4_model->get_detail_pengajuan_ods4($my_id);
        $this->load->view('admin/detail_pengajuan_ods4' , ['data_user' => $data_user]);
        
    }
    
    public function complete_this_ods4() {
        $my_id = $this->input->get('id_pengajuan');
        $this->admin_ods4_model->update_status($my_id,"complete");
        
        // baris ini akan diisi code yang mengirim file ke user
        
        $data_user = $this->admin_ods4_model->get_detail_pengajuan_ods4($my_id);
        $this->load->view('admin/detail_pengajuan_ods3' , ['data_user' => $data_user]);
    }
    
    public function pending_this_ods4(){
        $my_id = $this->input->get('id_pengajuan');
        
        $this->admin_ods4_model->update_status($my_id,"pending");
        
        $data_user = $this->admin_ods4_model->get_detail_pengajuan_ods4($my_id);
        $this->load->view('admin/detail_pengajuan_ods3' , ['data_user' => $data_user]);
    }
    
    public function input_no_surat_ods4() {
        $my_id = $this->input->get('id_pengajuan');
     
        $no_surat = $this->input->post('no_surat');
        
        $this->admin_ods4_model->insert_no_surat($no_surat,$my_id);
        
        $data_user = $this->admin_ods4_model->get_detail_pengajuan_ods4($my_id);
        $this->load->view('admin/detail_pengajuan_ods4' , ['data_user' => $data_user]);
    }
    
    public function upload_surat_hasil_ods4() {
        $id = $this->input->get('id_pengajuan');
        $this->load->view('admin/upload_hasil_ods4' , array( 'id_pengajuan' => $id , 'error' => '' ));
        
    }
    
    public function update_nama_pejabat_ods4() {
        $my_id = $this->input->get('id_pengajuan');
     
        $nama_pejabat = $this->input->post('nama_pejabat');
        
        $this->admin_ods4_model->update_nama_pejabat($nama_pejabat,$my_id);
        
        $data_user = $this->admin_ods4_model->get_detail_pengajuan_ods4($my_id);
        $this->load->view('admin/detail_pengajuan_ods4' , ['data_user' => $data_user]);
    }
    
    public function update_jabatan_ods4() {
        $my_id = $this->input->get('id_pengajuan');
     
        $jabatan_pejabat = $this->input->post('jabatan_pejabat');
        
        $this->admin_ods4_model->update_jabatan($jabatan_pejabat,$my_id);
        
        $data_user = $this->admin_ods4_model->get_detail_pengajuan_ods4($my_id);
        $this->load->view('admin/detail_pengajuan_ods4' , ['data_user' => $data_user]);
        
    }
    
    
}
    
    
