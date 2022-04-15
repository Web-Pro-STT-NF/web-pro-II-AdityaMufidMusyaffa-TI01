<?php 
class Dispenser {
  protected static $volume = 30000;
  protected $hargaSegelas = 3000;
  private $volumeGelas = 250;
  public $namaMinuman;
  private $namaPembeli;
  private $jumlahGelas;
  private static $totalPenghasilan = 0;

  public function __construct($namaPembeli, $namaMinuman, $jumlahGelas) {
    $this->namaPembeli = $namaPembeli;
    $this->namaMinuman = $namaMinuman;
    $this->jumlahGelas = $jumlahGelas;

    self::$volume -= ($this->volumeGelas * $jumlahGelas);
    self::$totalPenghasilan += ($this->hargaSegelas * $jumlahGelas);
  }

  public static function tambahIsi($isi) {
    if(self::$volume == 30000) {
      return "Wadah volume sudah penuh, tidak perlu ditambah lagi ";
    } elseif(self::$volume + $isi > 30000) {
      return (self::$volume) . "Wadah berisi".  number_format(self::$volume) . "ml jika ditambah ". number_format($isi) . "ml akan berlebihan, kami menyarankan tambah " . 30000 - self::$volume . "ml saja";
    } elseif(self::$volume < 30000) {
      return "Isi wadah " . self::$volume . "ml + {$isi}ml " . "Isi wadah saat ini <b>" . number_format(self::$volume += $isi) . "ml</b>";
    }
  }

  public function getIsi() {
    return number_format(self::$volume);
  }

  public function getPenghasilan() {
    return number_format(self::$totalPenghasilan);
  }

  public function getInfoPenjualan() {
    $nama = $this->namaPembeli;
    $minuman = $this->namaMinuman;
    $jumlahGelas = $this->jumlahGelas;

    $infoPenjualan = "
    Nama Pembeli: {$nama} <br> 
    Minuman: {$minuman} <br> 
    Jumlah Gelas: {$jumlahGelas} <br> 
    Sisa Isi Wadah Minuman: {$this->getIsi()}ml <br>
    <b>Penghasilan Bertambah Rp. " . number_format($this->hargaSegelas * $jumlahGelas) . "</b> <br>
    <b>Total Penghasilan Saat Ini: Rp. " . $this->getPenghasilan() . "</b>";
    return $infoPenjualan; 
  }
}