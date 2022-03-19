<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mendefinisikan $array_buah</title>
</head>
<body>
<?php
// Mendefinisikan indexed array 
$arr_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
// Cetak buah index ke 2
echo "Cetak buah index ke 2: ";
echo $arr_buah[2];
echo "<br>";
echo "Jumlah Buah: " . count($arr_buah);
echo "<br>";
echo "<ol>";
echo 'Menampilkan seluruh isi $arr_buah dengan foreach loop';
foreach ($arr_buah as $buah) {
  echo "<li>" . $buah . "</li>";
}
echo "</ol>";
echo "</li>";
echo "<br>";
// Menambahkan buah
echo "Menambahkan buah";
echo "<br>";
$arr_buah[]="Durian";
print_r($arr_buah);
echo "<br>";
echo "<br>";
// Menghapus index ke 1
echo "Menghapus index ke 1";
echo "<br>";
unset($arr_buah[1]);
print_r($arr_buah);
echo "<br>";
echo "<br>";
// Mengubah buah index ke 2 menjadi manggis  
echo "Mengubah buah index ke 2 menjadi manggis";  
$arr_buah[2] = "Manggis";
echo "<br>";
print_r($arr_buah);
echo "<br>";
echo "<br>";
//Menampilkan seluruh isi $arr_buah dengan indexnya
echo "<ol>";
echo 'Menampilkan seluruh isi $arr_buah dengan indexnya';
foreach ($arr_buah as $i => $b) {
  echo "<li>" ."Buah index ke-". $i ." Adalah ". $b . "</li>";
}
echo "</ol>";
?>
</body>
</html>