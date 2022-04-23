<?php 
require_once 'bmipasien.php';
require_once 'data_bmi.php';
require_once 'data_pasien.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMI Calculator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <form action="" method="POST">
          <div class="form-group row">
            <label class="col-4 col-form-label" for="tglperiksa">Tanggal Periksa</label>
            <div class="col-8">
              <input id="tglperiksa" name="tglperiksa" placeholder="Tanggal saat pasien diperiksa" type="date" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="kodepasien" class="col-4 col-form-label">Kode Pasien</label>
            <div class="col-8">
              <input id="kodepasien" name="kodepasien" placeholder="Kode pasien" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="namapasien" class="col-4 col-form-label">Nama Pasien</label>
            <div class="col-8">
              <input id="namapasien" name="nama" placeholder="Masukkan nama pasien" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="berat" class="col-4 col-form-label">Berat Badan (kg)</label>
            <div class="col-8">
              <input id="berat" name="berat" placeholder="Masukkan berat badan (kg)" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="tinggi" class="col-4 col-form-label">Tinggi Badan (cm)</label>
            <div class="col-8">
              <input id="tinggi" name="tinggi" placeholder="Masukkan tinggi badan (cm)" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Gender</label>
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-laki">
                <label for="gender_0" class="custom-control-label">L</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan">
                <label for="gender_1" class="custom-control-label">P</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <?php
    $pasien = [
      // for($i = 0; $i < 10; $i++ ) {}
      $p001 = new BMIpasien('2022-01-10', $pas1, $bmi1),
      $p002 = new BMIpasien('2022-01-10', $pas2, $bmi2),
      $p003 = new BMIpasien('2022-01-11', $pas3, $bmi3)
    ];

    if (isset($_POST['submit'])) {
      $pas = new BMIpasien($_POST['tglperiksa'], $p = new Pasien($_POST['kodepasien'], $_POST['nama'], $_POST['gender']), $_bmi = new BMI($_POST['berat'], $_POST['tinggi']));
      $pasien[] = $pas;
    }
    ?>

    <div class="row">
      <div class="col">
        <div class="table-responsive">
          <table class="table table-striped table-hover table-borderless table-sm table-dark ">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Periksa</th>
                <th scope="col">Kode Pasien</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Gender</th>
                <th scope="col">Berat (kg)</th>
                <th scope="col">Tinggi (cm)</th>
                <th scope="col">Nilai BMI</th>
                <th scope="col">Status BMI</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1 ?>
              <?php foreach ($pasien as $p) : ?>
                <tr>
                  <th scope="row"><?= $no++ ?></th>
                  <td><?= $p->getTgl()  ?></td>
                  <td><?= $p->getPasien()->getKode()  ?></td>
                  <td><?= $p->getPasien()->getNama()  ?></td>
                  <td><?= $p->getPasien()->getGender()  ?></td>
                  <td><?= $p->getBMI()->getBerat()  ?></td>
                  <td><?= $p->getBMI()->getTinggi()  ?></td>
                  <td><?= $p->getBMI()->nilaiBMI()  ?></td>
                  <td><?= $p->getBMI()->statusBMI()  ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>