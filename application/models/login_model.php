<?php

class login_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function cek_login($nik,$pass) {
        
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('nik',$nik);
        $this->db->where('password',$pass);
        
        return $this->db->get()->result('array');
    }
    
}
