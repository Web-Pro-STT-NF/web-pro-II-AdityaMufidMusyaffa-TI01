<?php 
// Mendefinisikan variabel konstan
define('PHI', 3.14);
define('DBNAME', 'inventori');
echo 'isi variabel PHI: '.PHI;
echo '<br>';
echo 'isi variabel DBNAME: '.DBNAME;
echo '<br>';
echo '<br>';
define('DBSERVER','localhost');
$jari = 8;
$luas = PHI * $jari * $jari;
$kel = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
echo '<br>Kelilingnya : '.$kel;
?>
<hr/>
<?php
echo 'Nama databasenya : '.DBNAME;
echo '<br/>Lokasi databasenya ada di '.DBSERVER;

?>