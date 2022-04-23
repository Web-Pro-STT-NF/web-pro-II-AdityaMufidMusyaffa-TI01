<?php
require_once 'assignments/proyek1_bmi/bmipasien.php';
require_once 'assignments/proyek1_bmi/data_bmi.php';
require_once 'assignments/proyek1_bmi/data_pasien.php';
require_once 'header.php';
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">BMI Calculator</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="container mt-5">
        <div class="row">
          <div class="col">
            <form action="" method="POST">
              <div class="form-group row">
                <label class="col-4 col-form-label" for="tglperiksa">Tanggal Periksa</label>
                <div class="col-8">
                  <input id="tglperiksa" name="tglperiksa" placeholder="Tanggal saat pasien diperiksa" type="date" class="form-control" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="kodepasien" class="col-4 col-form-label">Kode Pasien</label>
                <div class="col-8">
                  <input id="kodepasien" name="kodepasien" placeholder="Kode pasien" type="text" class="form-control" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="namapasien" class="col-4 col-form-label">Nama Pasien</label>
                <div class="col-8">
                  <input id="namapasien" name="nama" placeholder="Masukkan nama pasien" type="text" class="form-control" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="berat" class="col-4 col-form-label">Berat Badan (kg)</label>
                <div class="col-8">
                  <input id="berat" name="berat" placeholder="Masukkan berat badan (kg)" type="number" class="form-control" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="tinggi" class="col-4 col-form-label">Tinggi Badan (cm)</label>
                <div class="col-8">
                  <input id="tinggi" name="tinggi" placeholder="Masukkan tinggi badan (cm)" type="number" class="form-control" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4">Gender</label>
                <div class="col-8">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-laki" required>
                    <label for="gender_0" class="custom-control-label">L</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan" required>
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
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

<?php require_once 'footer.php' ?>