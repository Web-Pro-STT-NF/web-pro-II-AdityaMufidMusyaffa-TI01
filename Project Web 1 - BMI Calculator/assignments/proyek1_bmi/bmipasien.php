<?php 
require_once 'bmi.php';

class BMIpasien extends BMI {
  private $tanggal;
  private $bmi;
  private $pasien;

  public function __construct($tgl, $pasien, $bmi) {
    $this->tanggal = $tgl;
    $this->bmi = $bmi;
    $this->pasien = $pasien;
  }

  public function getTgl() {
    return $this->tanggal;
  }

  public function getBMI() {
    return $this->bmi;
  }

  public function getPasien() {
    return $this->pasien;
  }

}