<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Daftar Mahasiswa</h3>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>SKS</th>
            <th>Kode</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1;
          foreach ($list_matkul as $matkul) :
          ?>
            <tr>
              <td><?= $nomor++; ?></td>
              <td><?= $matkul->nama ?></td>
              <td><?= $matkul->sks ?></td>
              <td><?= $matkul->kode ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>