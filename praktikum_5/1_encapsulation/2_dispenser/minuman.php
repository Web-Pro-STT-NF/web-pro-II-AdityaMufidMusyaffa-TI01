<?php
require_once 'class_dispenser.php';
$pembeli1 = new Dispenser('A', 'Es Teh', 2);
echo $pembeli1->getInfoPenjualan();
echo "<br>";
echo "<br>";
$pembeli2 = new Dispenser('B', 'Es Teh', 1);
echo $pembeli2->getInfoPenjualan();
echo "<br>";
echo "<br>";
$pembeli3 = new Dispenser('C', 'Es Teh', 3);
echo $pembeli3->getInfoPenjualan();
echo "<br>";
echo "<br>";
echo Dispenser::tambahIsi(1000);