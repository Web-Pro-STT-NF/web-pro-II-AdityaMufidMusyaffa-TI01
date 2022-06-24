<h1 class="m-0">Daftar dosen</h1>
</div><!-- /.col -->
<div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>dosen">Home</a></li>
    <li class="breadcrumb-item active">Daftar dosen</li>
  </ol>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!-- Main content -->

<!-- /.col-md-6 -->
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h5>Daftar dosen</h5>
    </div>
    <div class="card-body">
      <a href="<?= base_url() ?>dosen/tambah_data_dosen" class="btn btn-primary mb-3">Tambah Data Dosen</a>

      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NIDN</th>
                  <th>Nama</th>
                  <th>Gender</th>
                  <th>tmp_lahir</th>
                  <th>tgl_lahir</th>
                  <th>Pendidikan Akhir</th>
                  <th>Prodi Kode</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $nomor = 1;
                foreach ($dosen as $dsn) :
                ?>
                  <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $dsn['nidn'] ?></td>
                    <td><?= $dsn['nama'] ?></td>
                    <td><?= $dsn['gender'] ?></td>
                    <td><?= $dsn['tmp_lahir'] ?></td>
                    <td><?= $dsn['tgl_lahir'] ?></td>
                    <td><?= $dsn['pendidikan_akhir'] ?></td>
                    <td><?= $dsn['prodi_kode'] ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>


    </div>
  </div>

</div>
<!-- /.col-md-6 -->