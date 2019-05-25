<?php

class admin_upload_ods3_controler extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                //$this->load->helper(array('form', 'url'));
                $this->load->model('admin_model');
        }

        public function index()
        {
               //$this->load->view('tes_upload_file', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $nama_file = $this->input->get('nama_file');
                $id_pengajuan = $this->input->get('id_pengajuan');
            
                $config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'jpg';
                $config['max_size']             = 1024;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name']            = $nama_file;
              

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file-user-ods3'))
                {
                        $error = array('error' => $this->upload->display_errors() , 'id_pengajuan' => $id_pengajuan );
                        $this->load->view('admin/upload_hasil_ods3', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $this->admin_model->insert_hasil_ods3($id_pengajuan,$nama_file);
                        ?> 

<script type="text/javascript"> alert("Upload Berhasil ,Pengajuan Berhasil"); </script>

 <?php
 
                         
                         redirect('admin_controler' , 'refresh');
 
 
                }
        }
}
?>