<?php 
class Prodi extends CI_Controller {
  public function index() {
    $this->load->model('Prodi_model');
    $data['prodi'] = $this->Prodi_model->getAllProdi();
    $data['title'] = 'Prodi';
    $this->load->view('templates/header', $data);
    $this->load->view('prodi/index', $data);
    $this->load->view('templates/footer', $data);
  }

  public function tambah_data_prodi() {
    $this->load->model('Prodi_model');
    $data['title'] = 'Tambah Prodi';
    $data['prodi'] = $this->Prodi_model->getAllProdi();

    $this->load->view('templates/header', $data);
    $this->load->view('prodi/tambah_data_prodi', $data);
    $this->load->view('templates/footer', $data);
  }
}