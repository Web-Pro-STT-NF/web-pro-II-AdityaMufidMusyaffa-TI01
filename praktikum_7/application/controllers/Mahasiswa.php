<?php 
class Mahasiswa extends CI_Controller {
  public function index() {
    $this->load->model('mahasiswa_model');
    $data['title'] = 'Mahasiswa';
    $data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();

    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/index', $data);
    $this->load->view('templates/footer', $data);
  }

  public function tambah_data_mahasiswa() {
    $this->load->model('mahasiswa_model');
    $data['title'] = 'Tambah Mahasiswa';
    $data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();

    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/tambah_data_mahasiswa', $data);
    $this->load->view('templates/footer', $data);
  }
  
  public function save() {
    
    $this->load->model('mahasiswa_model');
    $data['title'] = 'New Data Mahasiswa';
    $data['mahasiswa'] = $this->mahasiswa_model->newDataMahasiswa();
    
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/view_new_data', $data);
    $this->load->view('templates/footer', $data);
  }
}