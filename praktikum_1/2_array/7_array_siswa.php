<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Array Siswa</title>
</head>
<body>
<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>
<h3>Daftar Nilai Siswa</h3>

<div class="table-responsive">
  <table class="table table-striped table-hover table-dark border-light">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIM</th>
        <th scope="col">UTS</th>
        <th scope="col">UAS</th>
        <th scope="col">Tugas</th>
        <th scope="col">Nilai Akhir</th>
      </tr>
    </thead>
    <tbody>
      <?php //print_r($ar_nilai) ?>
      <?php $no = 0 ?>
      <?php foreach($ar_nilai as $nilai) : ?>
      <tr>
        <td><?= $no += 1 ?></td>
        <td><?= $nilai['nim']?></td>
        <td><?= $nilai['uts']?></td>
        <td><?= $nilai['uas']?></td>
        <td><?= $nilai['tugas']?></td>
        <?php $nilaiAkhir = $nilai['uts'] + $nilai['uas'] + $nilai['tugas'];?>
        <td><?= $nilaiAkhir ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>

  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>