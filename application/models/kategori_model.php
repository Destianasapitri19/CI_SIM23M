<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_MODEL{
    public function get_all_kategori(){
        return $this->db->get('kategori_berita')->result_array();
    }
    public function insert_kategori($data){
        return $this->db->insert('kategori_berita', $data);
    }
    public function delete_kategori($idkategori){
        return $this->db->delete('kategori_berita', ['idkategori'=>$idkategori]);
    }
    public function get_kategori_by_id($idkategori){
        return $this->db->get_where('kategori_berita', array('idkategori' =>$idkategori))->row_array();
    }
    public function update_kategori($idkategori, $data){
        $this->db->where('idkategori', $idkategori);
        return $this->db->update('kategori_berita', $data);
    }
}