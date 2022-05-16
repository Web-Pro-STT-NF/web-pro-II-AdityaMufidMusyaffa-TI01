<?php 
class Dosen extends CI_Controller {
  public function index() {
    $data['title'] = 'Dosen';

    $this->load->model('Dosen_model', 'dsn1');
    $this->dsn1->id = 1;
    $this->dsn1->nama = 'Ahmad Rio';
    $this->dsn1->nidn = '048601';
    $this->dsn1->gender = 'L';
    $this->dsn1->tmp_lahir = 'Pekalongan';
    $this->dsn1->tgr_lahir = '1986-12-13';
    $this->dsn1->pendidikan = 'S2';

    $this->load->model('Dosen_model', 'dsn2');
    $this->dsn2->id = 2;
    $this->dsn2->nama = 'Amalia Rahmah';
    $this->dsn2->nidn = '048602';
    $this->dsn2->gender = 'P';
    $this->dsn2->tmp_lahir = 'Yogyakarta';
    $this->dsn2->tgr_lahir = '1986-01-03';
    $this->dsn2->pendidikan = 'S3';

    $this->load->model('Dosen_model', 'dsn3');
    $this->dsn3->id = 3;
    $this->dsn3->nama = 'Ahmad Susanto';
    $this->dsn3->nidn = '048603';
    $this->dsn3->gender = 'L';
    $this->dsn3->tmp_lahir = 'Jakarta';
    $this->dsn3->tgr_lahir = '1986-04-15';
    $this->dsn3->pendidikan = 'S2';

    $data['list_dsn'] = [$this->dsn1, $this->dsn2, $this->dsn3];

    $this->load->view('templates/header', $data);
    $this->load->view('dosen/index');
    $this->load->view('templates/footer');
  }
}