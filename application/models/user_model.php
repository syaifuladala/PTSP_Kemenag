<?php

class user_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function tampil_data(){
    	return $this->db->get('daftar_layanan')->result_array();
    }
    
    public function tampil_isi($nik){
        $this->db->select('*');    
        $this->db->from('pengajuan');
        $this->db->join('daftar_layanan', 'daftar_layanan.id = pengajuan.id_layanan');
        $this->db->where('nik',$nik);
        return $this->db->get()->result_array();
    }

    public function get_user_detail($nik) {
        $this->db->where('user.nik', $nik);
        return $this->db->get('user')->result_array();
    }

    public function update_user($nik, $dataupdate){
        $this->db->where('nik', $nik);
        $this->db->update('user', $dataupdate);
    }

    public function daftar_user($daftar){
        $this->db->insert('user', $daftar);
    }

     public function hasil_ods3a($id_pengajuan){
        $this->db->select('*');
        $this->db->from('izin_penelitian');
        $this->db->join('pengajuan', 'pengajuan.id_pengajuan = izin_penelitian.id_pengajuan');
        $this->db->where('pengajuan.id_pengajuan', $id_pengajuan);
        $this->db->where('izin_penelitian.id_pengajuan', $id_pengajuan);
        return $this->db->get()->result_array();
    }
}