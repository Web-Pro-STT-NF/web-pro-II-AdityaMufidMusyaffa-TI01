<?php 
class Mahasiswa_model extends CI_model {
  public function getAllMahasiswa() {
    return $this->db->get('mahasiswa')->result_array();
  }

  public function newDataMahasiswa() {
    $data = [
      'nim' => $this->input->post('nim'),
      'nama' => $this->input->post('nama'),
      'gender' => $this->input->post('gender'),
      'tmp_lahir' => $this->input->post('tmp_lahir'),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'ipk' => $this->input->post('ipk'),
      'kode_prodi' => $this->input->post('kode_prodi')
    ];
    return $data;
  }
}