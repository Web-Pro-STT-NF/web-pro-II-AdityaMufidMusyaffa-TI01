
                <h1 class="m-0">Daftar Mahasiswa</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>mahasiswa">Home</a></li>
                  <li class="breadcrumb-item active">Daftar Mahasiswa</li>
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
              <h5>Daftar Mahasiswa</h5>
            </div>
            <div class="card-body">
              <a href="<?= base_url() ?>mahasiswa/tambah_data_mahasiswa" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>

              <div class="container">
                <div class="row">
                  <div class="col-md-12">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Gender</th>
                          <th>IPK</th>
                          <th>Prodi Kode</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($mahasiswa as $mhs) :
                        ?>
                          <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= $mhs['nim'] ?></td>
                            <td><?= $mhs['nama'] ?></td>
                            <td><?= $mhs['gender'] ?></td>
                            <td><?= $mhs['ipk'] ?></td>
                            <td><?= $mhs['prodi_kode'] ?></td>
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