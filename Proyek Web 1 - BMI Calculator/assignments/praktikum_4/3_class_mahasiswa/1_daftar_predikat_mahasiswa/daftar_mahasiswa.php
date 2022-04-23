<?php require_once 'class_mahasiswa.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>

  <?php
  $mahasiswa = [
    $mhs1 = new Mahasiswa('02011', 'Faiz Fikri', 'TI', '2012', 3.8),
    $mhs2 = new Mahasiswa('02012', 'Alissa Khairunnisa', 'TI', '2012', 3.9),
    $mhs3 = new Mahasiswa('01011', 'Rosalie Naurah', 'SI', '2010', 3.46),
    $mhs4 = new Mahasiswa('01012', 'Defghi Muhammad', 'SI', '2010', 3.2),
  ];
  ?>

  <h2>Daftar Mahasiswa</h2>

  <div class="table-responsive">
    <table class="table table-striped table-hover table-sm table-dark border-dark">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIM</th>
          <th scope="col">Nama</th>
          <th scope="col">Prodi</th>
          <th scope="col">Tahun Angkatan</th>
          <th scope="col">IPK</th>
          <th scope="col">Predikat</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1 ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
          <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $mhs->nim ?></td>
            <td><?= $mhs->nama ?></td>
            <td><?= $mhs->prodi ?></td>
            <td><?= $mhs->thn_angkatan ?></td>
            <td><?= $mhs->ipk ?></td>
            <td><?= $mhs->predikat_ipk() ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>