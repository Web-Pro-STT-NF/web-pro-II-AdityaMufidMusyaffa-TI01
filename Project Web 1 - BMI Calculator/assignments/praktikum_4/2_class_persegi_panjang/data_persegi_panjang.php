<?php 
require_once "class_persegi_panjang.php";

echo "<h1>Luas dan Keliling Persegi Panjang</h1>";

$pp1 = new PersegiPanjang(4, 2);
echo "Panjang: " . $pp1->panjang;
echo "<br>";
echo "Lebar: " . $pp1->lebar;
echo "<br>";
echo "Luas: " . $pp1->getLuas();
echo "<br>";
echo "Keliling: " . $pp1->getKeliling();
echo "<br>";  
$pp2 = new PersegiPanjang(16, 9);
echo "<br>";
echo "Panjang: " . $pp2->panjang;
echo "<br>";
echo "Lebar: " . $pp2->lebar;
echo "<br>";
echo "Luas: " . $pp2->getLuas();
echo "<br>";
echo "Luas: " . $pp2->getKeliling();