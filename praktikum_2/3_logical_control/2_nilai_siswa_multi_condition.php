<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Form nilai</title>
  <style>
    p {
      margin: 2.5px 0px;
    }
  </style>
</head>
<body>
<div class="container mt-3">
<legend><h2>Form Nilai Siswa</h2></legend>
<hr style="border-bottom: 5px solid black;">

  <form action="" method="POST">
    <div class="form-group row">
      <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
      <div class="col-8">
        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
      <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
          <option value="DDP" name="ddp">Dasa Dasar Pemrograman</option>
          <option value="UI/UX">UI/UX</option>
          <option value="Pemrograman Web">Pemrograman Web</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="nilaiuts" class="col-4 col-form-label">Nilai UTS</label> 
      <div class="col-8">
        <input id="nilaiuts" name="nilaiuts" placeholder="Nilai UTS" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nilaiuas" class="col-4 col-form-label">Nilai UAS</label> 
      <div class="col-8">
        <input id="nilaiuas" name="nilaiuas" placeholder="Nilai UAS" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nilaiTugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
      <div class="col-8">
        <input id="nilaitugas" name="nilaitugas" placeholder="Nilai Tugas" type="text" class="form-control">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>

  <?php if(isset($_POST['submit'])) :
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilaiUts = $_POST['nilaiuts'];
    $nilaiUas = $_POST['nilaiuas'];
    $nilaiTugas = $_POST['nilaitugas'];
    $nilaiTotal = ($nilaiUts + $nilaiUas + $nilaiTugas) / 3;
    // var_dump($nilaiTotal);
    ?>
    <?php 
      if($nilaiTotal >= 0 && $nilaiTotal <= 35) : ?>
        <b><p>Siswa : <?= $nama ?></p></b>
        <b><p>Mata Kuliah : <?= $matkul ?></p></b>
        <p>Nilai UTS = <?= $nilaiUts ?></p>
        <p>Nilai UAS = <?= $nilaiUas ?></p>
        <p>Nilai Tugas = <?= $nilaiTugas ?></p>
        <b><p class='text-danger'>Nilai Total = <?= (int) $nilaiTotal ?> (Grade E)</p></b>
        <?php elseif($nilaiTotal >= 36 && $nilaiTotal <= 55) : ?>
          <b><p>Siswa : <?= $nama ?></p></b>
          <b><p>Mata Kuliah : <?= $matkul ?></p></b>
          <p>Nilai UTS = <?= $nilaiUts ?></p>
          <p>Nilai UAS = <?= $nilaiUas ?></p>
          <p>Nilai Tugas = <?= $nilaiTugas ?></p>
          <b><p class='text-danger'>Nilai Total = <?= (int) $nilaiTotal ?> (Grade D)</p></b>
        <?php elseif($nilaiTotal >= 56 && $nilaiTotal <= 69) : ?>
          <b><p>Siswa : <?= $nama ?></p></b>
          <b><p>Mata Kuliah : <?= $matkul ?></p></b>
          <p>Nilai UTS = <?= $nilaiUts ?></p>
          <p>Nilai UAS = <?= $nilaiUas ?></p>
          <p>Nilai Tugas = <?= $nilaiTugas ?></p>
          <b><p class='text-warning'>Nilai Total = <?= (int) $nilaiTotal ?> (Grade C)</p></b>
        <?php elseif($nilaiTotal >= 70 && $nilaiTotal <= 84) : ?>
          <b><p>Siswa : <?= $nama ?></p></b>
          <b><p>Mata Kuliah : <?= $matkul ?></p></b>
          <p>Nilai UTS = <?= $nilaiUts ?></p>
          <p>Nilai UAS = <?= $nilaiUas ?></p>
          <p>Nilai Tugas = <?= $nilaiTugas ?></p>
          <b><p class='text-success'>Nilai Total = <?= (int) $nilaiTotal ?> (Grade B)</p></b>
        <?php elseif($nilaiTotal >= 85 && $nilaiTotal <= 100) : ?>
          <b><p>Siswa : <?= $nama ?></p></b>
          <b><p>Mata Kuliah : <?= $matkul ?></p></b>
          <p>Nilai UTS = <?= $nilaiUts ?></p>
          <p>Nilai UAS = <?= $nilaiUas ?></p>
          <p>Nilai Tugas = <?= $nilaiTugas ?></p>
          <b><p class='text-success'>Nilai Total = <?= (int) $nilaiTotal ?> (Grade A)</p></b>
          <?php else : ?>
            <b><p>Siswa : <?= $nama ?></p></b>
            <b><p>Mata Kuliah : <?= $matkul ?></p></b>
            <p>Nilai UTS = <?= $nilaiUts ?></p>
            <p>Nilai UAS = <?= $nilaiUas ?></p>
            <p>Nilai Tugas = <?= $nilaiTugas ?></p>
            <b><p class='text-danger'>Nilai Total = <?= (int) $nilaiTotal ?> (Grade I)</p></b>
      <?php endif ?>
  <?php endif ?>
</div>
</body>
</html>