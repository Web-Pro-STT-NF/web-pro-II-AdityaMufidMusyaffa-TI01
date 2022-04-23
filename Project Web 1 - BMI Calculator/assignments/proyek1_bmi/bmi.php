<?php
class BMI {
  protected $berat;
  protected $tinggi;

  public function getBerat() {
    return $this->berat;
  }

  public function __construct($berat, $tinggi) {
    $this->berat = $berat;
    $this->tinggi = $tinggi;
  }

  public function getTinggi() {
    return $this->tinggi;
  }

  public function nilaiBMI() {
    return number_format($this->berat / pow($this->tinggi / 100, 2), 2);
  }

  public function statusBMI() {
    if($this->nilaiBMI() < 18.5) {
      return "Kekurangan berat badan";
    } else if($this->nilaiBMI() >= 18.5 && $this->nilaiBMI() <= 24.9) {
      return "Normal (Ideal)";
    } else if($this->nilaiBMI() >= 25 && $this->nilaiBMI() <= 29.9) {
      return "Kelebihan berat badan";
    } else if($this->nilaiBMI() >= 30) {
      return "Kegemukan (Obesitas)";
    }
  }
}