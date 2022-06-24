<?php 
class Mahasiswa extends CI_Controller {
  public function index() {
    $this->load->model('mahasiswa_model');
    $data['title'] = 'Admin Kampus';
    $data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();

    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/index', $data);
    $this->load->view('templates/footer', $data);
  }

  public function tambah_data_mahasiswa() {
    $this->load->model('mahasiswa_model');
    $data['title'] = 'Admin Kampus';
    $data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();

    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/tambah_data_mahasiswa', $data);
    $this->load->view('templates/footer', $data);
  }
}