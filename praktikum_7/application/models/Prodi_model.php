<?php 
class Prodi_model extends CI_Model {
  public function getAllProdi() {
    return $this->db->get('prodi')->result_array();
  }
}