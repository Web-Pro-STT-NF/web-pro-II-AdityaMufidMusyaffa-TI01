<h1 class="m-0">Daftar Prodi</h1>
</div><!-- /.col -->
<div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="<?= base_url() ?>Prodi">Home</a></li>
    <li class="breadcrumb-item active">Daftar Prodi</li>
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
      <h5>Daftar Prodi</h5>
    </div>
    <div class="card-body">
      <a href="<?= base_url() ?>Prodi/tambah_data_Prodi" class="btn btn-primary mb-3">Tambah Data Prodi</a>

      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <table class="table">
              <thead>
                <tr>
                  <th>#</th>dosen
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Kaprodi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $nomor = 1;
                foreach ($prodi as $prd) :
                ?>
                  <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $prd['kode'] ?></td>
                    <td><?= $prd['nama'] ?></td>
                    <td><?= $prd['kaprodi'] ?></td>

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