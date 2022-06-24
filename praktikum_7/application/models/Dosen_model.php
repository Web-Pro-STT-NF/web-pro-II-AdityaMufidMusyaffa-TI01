<?php 
class Dosen_model extends CI_Model {
  public function getAllDosen() {
    return $this->db->get('dosen')->result_array();
  }
}