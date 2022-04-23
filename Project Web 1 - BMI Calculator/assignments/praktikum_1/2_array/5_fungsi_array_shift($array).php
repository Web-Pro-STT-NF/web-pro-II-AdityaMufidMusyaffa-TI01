<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fungsi array_shift($array)</title>
</head>
<body>

<?php 
echo "<h3>Fungsi array_shift() = Menghapus elemen pertama dari array, dan mengembalikan nilai elemen yang dihapus.</h3>";

// Mendefinisikan indexed array 
$teams = ["Erwin", "Heru", "Ali", "Zaki"];
echo "Sebelum di array_shift()";
echo "<br>";
echo "<ul>";
print_r($teams);
foreach($teams as $i => $team) {
  echo "<li>". "index ke-" . $i. " = ". $team. "</li>";
}
echo "</ul>";
echo "<br>";
echo "<br>";

array_shift($teams);
echo 'Sesudah di array_shift($teams)';
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