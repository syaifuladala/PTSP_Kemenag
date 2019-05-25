<?php

class Admin_ods4_Model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
     public function get_detail_pengajuan_ods4($id_pengajuan) {
        $this->db->select('user.nama, '
                . 'pengajuan.id_pengajuan, '
                . 'daftar_layanan.nama_layanan, '
                . 'pengajuan.status , '
                . 'izin_penelitian.surat_izin_penelitian, '
                . 'izin_penelitian.fc_identitas ,'
                . 'pengajuan.komentar,'
                . 'izin_penelitian.no_surat,'
                . 'izin_penelitian.nama_pejabat,'
                . 'izin_penelitian.jabatan_pejabat');
        $this->db->from('pengajuan');
        $this->db->join('daftar_layanan' , 'daftar_layanan.id = pengajuan.id_layanan');
        $this->db->join('user', 'user.nik = pengajuan.nik');
        $this->db->join('izin_penelitian' , 'pengajuan.id_pengajuan = izin_penelitian.id_pengajuan');
        $this->db->where('pengajuan.id_pengajuan', $id_pengajuan);
        
        return $this->db->get()->result('array');
        
    }
    
    public function update_comment($comment,$id_pengajuan) {
        
        $this->db->set('komentar', $comment);
        $this->db->where('id_pengajuan', $id_pengajuan);
        $this->db->update('pengajuan'); 
   }

   public function update_status($id_pengajuan,$status) {
       $this->db->set('status', $status);
       $this->db->where('id_pengajuan', $id_pengajuan);
       $this->db->update('pengajuan');
   }
   
   public function select_all_ods3_for_pdf($id_pengajuan) {
       
        $this->db->select('user.nama, '
                . 'pengajuan.tgl_pengajuan, '
                . 'izin_penelitian.nim, '
                . 'izin_penelitian.nohp, '
                . 'izin_penelitian.prodi, '
                . 'izin_penelitian.fakultas,'
                . 'izin_penelitian.univ,'
                . 'izin_penelitian.tujuan,'
                . 'izin_penelitian.judul,'
                . 'izin_penelitian.tgl_mulai,'
                . 'izin_penelitian.tgl_akhir,'
                . 'izin_penelitian.no_surat,'
                . 'izin_penelitian.nama_pejabat,'
                . 'izin_penelitian.jabatan_pejabat');
        $this->db->from('izin_penelitian');
        $this->db->join('pengajuan' , 'pengajuan.id_pengajuan = izin_penelitian.id_pengajuan');
        $this->db->join('user', 'user.nik = pengajuan.nik');
        $this->db->where('izin_penelitian.id_pengajuan' , $id_pengajuan);
        
       return $this->db->get()->result('array');
       
   }
   
   public function insert_no_surat($no_surat,$id_pengajuan){
       
       $this->db->set('no_surat' , $no_surat);
       $this->db->where('id_pengajuan', $id_pengajuan);
       $this->db->update('izin_penelitian');
       
   }
   
   public function insert_hasil_ods3($id_pengajuan,$nama_file) {
       $this->db->set('hasil', $nama_file);
       $this->db->where('id_pengajuan' , $id_pengajuan);
       $this->db->update('izin_penelitian');
   }
   
    public function update_nama_pejabat($nama_pejabat,$id_pengajuan) {
        
        $this->db->set('nama_pejabat', $nama_pejabat);
        $this->db->where('id_pengajuan', $id_pengajuan);
        $this->db->update('izin_penelitian'); 
   }
   
    public function update_jabatan($jabatan_pejabat,$id_pengajuan) {
        
        $this->db->set('jabatan_pejabat', $jabatan_pejabat);
        $this->db->where('id_pengajuan', $id_pengajuan);
        $this->db->update('izin_penelitian'); 
   }
   
        
   }
    

