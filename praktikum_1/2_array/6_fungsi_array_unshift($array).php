<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fungsi array_unshift($array)</title>
</head>
<body>

<?php 
echo "<h3>Fungsi array_unshift() = Menambah satu atau lebih elemen ke elemen pertama sebuah array.</h3>";

// Mendefinisikan indexed array 
$teams = ["Erwin", "Heru", "Ali", "Zaki"];
echo "Sebelum di array_unshift()";
echo "<br>";
echo "<ul>";
print_r($teams);
foreach($teams as $i => $team) {
  echo "<li>". "index ke-" . $i. " = ". $team. "</li>";
}
echo "</ul>";
echo "<br>";
echo "<br>";

array_unshift($teams, "Ucok");
echo 'Sesudah di array_unshift($array, "Ucok")';
echo "<ul>";
print_r($teams);
foreach($teams as $i => $team) {
  echo "<li>". "index ke-" . $i. " = ". $team. "</li>";
}
echo "</ul>";
echo "<br>";
?>

</body>
</html>