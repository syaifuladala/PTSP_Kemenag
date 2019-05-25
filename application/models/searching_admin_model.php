<?php

class searching_admin_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function search_id($mystring) {
        
        $this->db->select('p.id_pengajuan , u.nama , l.nama_layanan , p.status, p.tgl_pengajuan');
        $this->db->from('pengajuan p');
        $this->db->join('daftar_layanan l' , 'l.id = p.id_layanan');
        $this->db->join('user u', 'u.nik = p.nik');
        $this->db->where('p.id_pengajuan' , $mystring);
        
        return $this->db->get()->result('array');
                
        
    }
    
    public function search_nama($mystring) {
        
        $this->db->select('p.id_pengajuan , u.nama , l.nama_layanan , p.status, p.tgl_pengajuan');
        $this->db->from('pengajuan p');
        $this->db->join('daftar_layanan l' , 'l.id = p.id_layanan');
        $this->db->join('user u', 'u.nik = p.nik');
        $this->db->where('u.nama' , $mystring);
        
        return $this->db->get()->result('array');
                
        
    }
    
    
}
