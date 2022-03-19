<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Form nilai</title>
</head>
<body>
<div class="container mt-3">
<legend><h2>Form Nilai Siswa</h2></legend>
<hr style="border-bottom: 5px solid black;">

  <form action="" method="GET">
    <div class="form-group row">
      <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
      <div class="col-8">
        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
      <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select" required="required">
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

  <?php if(isset($_GET['submit'])) : 
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $nilaiUts = $_GET['nilaiuts'];
    $nilaiUas = $_GET['nilaiuas'];
    $nilaiTugas = $_GET['nilaitugas'];
  ?>
  <table class="table table-striped table-hover table-dark border-light">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Mata Kuliah</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Tugas</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $nama ?></td>
        <td><?= $matkul ?></td>
        <td><?= $nilaiUts ?></td>
        <td><?= $nilaiUas ?></td>
        <td><?= $nilaiTugas ?></td>
      </tr>
    </tbody>
  </table>
  <?php endif ?>
</div>
</body>
</html>