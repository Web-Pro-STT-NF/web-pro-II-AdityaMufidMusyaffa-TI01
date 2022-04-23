<?php 
class Pasien {
  protected $kode;
  protected $nama;
  protected $tmpLahir;
  protected $tglLahir;
  protected $email;
  protected $gender;

  public function __construct($kode, $nama, $gender) {
    $this->kode = $kode;
    $this->nama = $nama;
    $this->gender = $gender;
  }

  public function getNama() {
    return $this->nama;
  }
  public function getKode() {
    return $this->kode;
  }
  public function getTmpLahir() {
    return $this->tmpLahir;
  }
  public function getTglLahir() {
    return $this->tglLahir;
  }
  public function getEmail() {
    return $this->email;
  }
  public function getGender() {
    return $this->gender;
  }
}