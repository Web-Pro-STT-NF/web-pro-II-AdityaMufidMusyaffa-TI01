<?php require_once 'class_nilaimahasiswa.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 bg-light pt-2 border border-2">
        <p>Sistem Penilaian</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h4 class="pt-2">Form Nilai Ujian</h4>
        <hr>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <form action="" method="POST">
          <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
              <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4 col-form-label" for="matkul">Pilih MK</label>
            <div class="col-8">
              <select id="matkul" name="matkul" class="custom-select" required="required">
                <option value="Data Warehouse">Data Warehouse</option>
                <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                <option value="Pemrograman Web">Pemrograman Web</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai" class="col-4 col-form-label">Nilai</label>
            <div class="col-8">
              <input id="nilai" name="nilai" placeholder="Masukkan Nilai" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    
    <?php if(isset($_POST['submit'])) : ?>
      <?php $nilai_mhs = new NilaiMahasiswa($_POST['matkul'], $_POST['nilai'], $_POST['nim']) ?>
        <p>NIM: <?= $nilai_mhs->nim ?></p>
        <p>Nama Mata Kuliah: <?= $nilai_mhs->matakuliah ?></p>
        <p>Nilai: <?= $nilai_mhs->nilai ?></p>
        <b><p>Grade: <?= $nilai_mhs->grade() ?></p></b>
        <b><p>Hasil Ujian: <?= $nilai_mhs->hasil() ?></p></b>
      <?php endif ?>
    </div>
    
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>