<?php


class form_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index($nik){
    	$this->db->where('user.nik', $nik);
        return $this->db->get('user')->result_array();
    }

    public function insert_ods3a($dataupload){
    	$this->db->insert('izin_penelitian', $dataupload);
    }

    public function insert_pengajuan($datapengajuan){
        $this->db->insert('pengajuan', $datapengajuan);
    }

    public function rename_file_uploadods3($id){

        $this->db->where('id_pengajuan', $id);
        $this->db->set('surat_izin_penelitian', $id.'.jpg');
        $this->db->set('fc_identitas', $id.'1.jpg');
        $this->db->update('izin_penelitian');
    }
}