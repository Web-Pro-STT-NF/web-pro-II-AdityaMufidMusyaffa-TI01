<h1 class="m-0">Tambah Data Mahasiswa</h1>
</div><!-- /.col -->
<div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>mahasiswa">Home</a></li>
    <li class="breadcrumb-item"><a href="<?= base_url() ?>mahasiswa">Daftar Mahasiswa</a></li>
    <li class="breadcrumb-item active">Tambah Data Mahasiswa</li>
  </ol>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-11">

      <?= form_open('mahasiswa/save') ?>
        <div class="form-group row">
          <label class="col-4 col-form-label" for="nim">NIM</label>
          <div class="col-8">
            <input id="nim" name="nim" placeholder="Masukkan NIM" type="number" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama</label>
          <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Gender</label>
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L">
              <label for="gender_0" class="custom-control-label">Laki-laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P">
              <label for="gender_1" class="custom-control-label">Perempuan</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
          <div class="col-8">
            <input id="tmp_lahir" name="tmp_lahir" placeholder="Kota tempat lahir" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="tgl_lahir" class="col-4 col-form-label">Tangal Lahir</label>
          <div class="col-8">
            <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan tanggal lahir" type="date" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="ipk" class="col-4 col-form-label">IPK</label>
          <div class="col-8">
            <input id="ipk" name="ipk" placeholder="Masukkan IPK" type="number" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="prodi_kode" class="col-4 col-form-label">Prodi</label>
          <div class="col-8">
            <select id="kode_prodi" name="kode_prodi" class="custom-select">
              <option value="TI">Teknik Informatika</option>
              <option value="SI">Sistem Informasi</option>
              <option value="BD">Bisnis Digital</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      <?= form_close() ?>

    </div>
  </div>