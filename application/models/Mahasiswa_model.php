<?php 
// untuk mengelolah databases saja dan controller  untuk mencontroll

class Mahasiswa_model extends CI_model{
    public function getAllMahasiswa()
    {
        // jadi array
        return $query=$this->db->get('mahasiswa')->result_array();
    }
}

