<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Daftar Mahasiswa</h3>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Pendidikan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1;
          foreach ($list_dsn as $dsn) :
          ?>
            <tr>
              <td><?= $nomor++; ?></td>
              <td><?= $dsn->nidn ?></td>
              <td><?= $dsn->nama ?></td>
              <td><?= $dsn->gender ?></td>
              <td><?= $dsn->pendidikan ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>