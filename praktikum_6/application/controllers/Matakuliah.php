<?php 
class Matakuliah extends CI_Controller {
  public function index() {
    $data['title'] = 'Matakuliah';

    $this->load->model('Matakuliah_model', 'matkul1');
    $this->matkul1->nama = 'Statistika';
    $this->matkul1->sks = '3';
    $this->matkul1->kode = 'STAT';

    $this->load->model('Matakuliah_model', 'matkul2');
    $this->matkul2->nama = 'UI / UX';
    $this->matkul2->sks = '3';
    $this->matkul2->kode = 'UIUX';

    $this->load->model('Matakuliah_model', 'matkul3');
    $this->matkul3->nama = 'Dasar-Dasar Pemrograman';
    $this->matkul3->sks = '3';
    $this->matkul3->kode = 'DDP';

    $data['list_matkul'] = [$this->matkul1, $this->matkul2, $this->matkul3];

    $this->load->view('templates/header', $data);
    $this->load->view('matakuliah/index');
    $this->load->view('templates/footer');
  }
}