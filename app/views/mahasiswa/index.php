<div class="container mt-3">

  <div class="row">
    <div class="col">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tampilModalTambah" data-bs-toggle="modal"
        data-bs-target="#formModal">
        Tambah Data Mahasiswa
      </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari mahasiswa.." name="keyword" id="keyword"
            autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id='tombolCari'>Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs): ?>
        <li class="list-group-item"><?= $mhs['nama'] ?>
          <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>"
            class="badge bg-danger text-decoration-none float-end ms-1"
            onclick="return confirm('yakin ingin menghapus data ini?')">hapus</a>
          <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>"
            class="badge bg-warning text-decoration-none float-end ms-1 tampilModalUbah" data-bs-toggle="modal"
            data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>">ubah</a>
          <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>"
            class="badge bg-primary text-decoration-none float-end ms-1">detail</a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah data mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama">
          </div>
          <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" name="nrp" id="nrp">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select name="jurusan" id="jurusan" class="form-select">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Elektro">Teknik Elektro</option>
              <option value="Teknik Pangan">Teknik Pangan</option>
              <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah data</button>
        </form>
      </div>
    </div>
  </div>
</div>