<?php

class searching_layanan_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function search($mystring) {
        return $this->db->query("select id from daftar_layanan where nama_layanan like '%$mystring%'")->result('array'); 
    }
    
}
