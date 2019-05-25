<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_ods4_Form_Controler extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('user_ods4_model');
    }

    public function ods3a(){
        $nik = $_SESSION['nik'];
        $user['data']= $this->form_model->index($nik);
        $this->load->view('upload_layanan/upload_ods3a',$user);
    }

    public function upload_ods4(){
        //insert database
        $id = $this->input->post('id_pengajuan');
        $datapengajuan =[
            'tgl_pengajuan' => $this->input->post('tgl_pengajuan'),
            'id_pengajuan' => $this->input->post('id_pengajuan'),
            'nik' => $this->input->post('nik'),
            'status' => $this->input->post('status'),
            'id_layanan' => $this->input->post('id_layanan'),
            'komentar' => $this->input->post('komentar'),

        ];
        $dataupload = [
            'id_pengajuan' => $this->input->post('id_pengajuan'),
            'nim' => $this->input->post('nim'),
            'nohp' => $this->input->post('nohp'),
            'prodi' => $this->input->post('prodi'),
            'fakultas' => $this->input->post('fakultas'),
            'univ' => $this->input->post('univ'),
            'tgl_mulai' => $this->input->post('tgl_mulai'),
            'tgl_akhir' => $this->input->post('tgl_akhir'),
            // 'surat_izin_penelitian' => $this->input->post('surat_izin_penelitian'),
            // 'fc_identitas' => $this->input->post('fc_identitas')
            'hasil' => $this->input->post('hasil')
        ];

        $this->user_ods4_model->insert_pengajuan($datapengajuan);
        $this->user_ods4_model->insert_ods4($dataupload);

        //insert berkas
        $config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;    
        $config['file_name']            = $id;

        $this->load->library('upload', $config);
         
        if ( ! $this->upload->do_upload('surat_izin_penelitian') || ! $this->upload->do_upload('fc_identitas') )
        { 

            $error = array('error' => $this->upload->display_errors() , 'file' => 'file 1 or file 2');
            ?>
            <script type="text/javascript">
                alert('Berkas Tidak Sesuai, Coba Lagi!');
            </script>
            <?php
            $this->load->view('user/userhome');

        }else{
            $data = array('upload_data' => $this->upload->data());
            $this->user_ods4_model->rename_file_uploadods4($id);
            ?>
            <script type="text/javascript">
                alert('Permohonan Terkirim');
            </script>
            <?php
            $this->load->view('user/userhome');
        }
    }

    public function do_upload_ods3(){

        $id = $this->input->get('id_pengajuan');
        $id_fix = $this->input->get('id_fix');


        $config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;    
        $config['file_name']            = $id;

        
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('surat_izin_penelitian') || ! $this->upload->do_upload('fc_identitas') )
        { 

            $error = array('error' => $this->upload->display_errors() , 'file' => 'file 1 or file 2');
            $this->load->view('user/upload_ods3_file', $error);

        }else{


            $data = array('upload_data' => $this->upload->data());
            $this->form_model->rename_file_uploadods3($id_fix);
            $this->load->view('success', $data);

        }

        
    }
    


}
