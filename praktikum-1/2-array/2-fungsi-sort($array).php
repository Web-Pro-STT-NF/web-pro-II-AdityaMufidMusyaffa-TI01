<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fungsi sort($array)</title>
</head>
<body>

<?php 
echo "<h3>Fungsi sort() = mengurutkan indexed array dalam urutan ASCENDING (Kecil Ke Besar)</h3>";
echo "<h3>Fungsi rsort() = mengurutkan indexed array dalam urutan DESCENDING (Besar Ke Kecil)</h3>";

// Mendefinisikan indexed array 
$arr_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
echo "Sebelum di sort()";
echo "<br>";
echo "<ul>";
print_r($arr_buah);
foreach($arr_buah as $i => $b) {
  echo "<li>". "index ke-" . $i. " = ". $b. "</li>";
}
echo "</ul>";
echo "<br>";
echo "<br>";

sort($arr_buah);
echo "Sesudah di sort()";
echo "<ul>";
print_r($arr_buah);
foreach($arr_buah as $i => $b) {
  echo "<li>". "index ke-" . $i. " = ". $b. "</li>";
}
echo "</ul>";
echo "<br>";
?>

</body>
</html>