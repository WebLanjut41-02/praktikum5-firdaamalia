<?php
class Mahasiswa_model extends CI_Model{
   
    //ambil data mahasiswa dari database
    function get_mahasiswa_list($limit, $start){
        $query = $this->db->get('mahasiswa', $limit, $start);
        return $query;
    }

  public function cari($keyword)
 {
  $this->db->like('nim', $keyword);
  $query = $this->db->get('mahasiswa');
  return $query->result();
 }


    

}