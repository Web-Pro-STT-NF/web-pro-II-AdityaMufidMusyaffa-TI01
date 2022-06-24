<?php 
class Dosen extends CI_Controller {
  public function index() {
    $this->load->model('Dosen_model');
    $data['title'] = 'Dosen';
    $data['dosen'] = $this->Dosen_model->getAllDosen();
    $this->load->view('templates/header', $data);
    $this->load->view('dosen/index', $data);
    $this->load->view('templates/footer', $data); 
  }

  public function tambah_data_dosen() {
    $this->load->model('Dosen_model');
    $data['title'] = 'Tambah Dosen';
    $data['dosen'] = $this->Dosen_model->getAllDosen();

    $this->load->view('templates/header', $data);
    $this->load->view('dosen/tambah_data_dosen', $data);
    $this->load->view('templates/footer', $data);
  }
}