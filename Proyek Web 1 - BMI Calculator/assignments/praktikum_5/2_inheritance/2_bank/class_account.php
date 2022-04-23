<?php 
class Account {
  protected $nomor;
  protected $saldo;

  public function __construct($no, $saldo) {
    $this->nomor = $no;
    $this->saldo = $saldo;
  }

  public function getNomor() {
    return $this->nomor;
  }
  public function getSaldo() {
    return $this->saldo;
  }
  public function getCustomer() {
    return $this->customer;
  }

  public function deposit($jumlah) {
    $this->saldo += $jumlah;
    return $jumlah;
  }

  public function withdraw($jumlah) {
    return $this->saldo -= $jumlah;
  }

  public function cetak() {
    return "Nasabah No: {$this->nomor} bernama {$this->customer} memiliki saldo Rp. " . number_format($this->saldo);
  }
}

class AccountBank extends Account {
  protected $customer;
  
  public function __construct($no, $saldo, $customer) {
    parent::__construct($no, $saldo);
    $this->customer = $customer;
  }

  public function transfer($jumlah, $noRekTujuan) {
    $noRekTujuan->saldo += $jumlah;
    return $this->saldo -= $jumlah;
  }
}