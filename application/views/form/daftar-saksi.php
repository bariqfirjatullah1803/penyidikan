<div class="card form-card">
  <div class="card-header">
    <?= $label ?>
  </div>
  <div class="card-body">
    <div id="daftar-saksi">
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="daftar-saksi[saksi][0][nama]">
      </div>
      <div class="mb-3">
        <label class="form-label">Kebangsaan</label>
        <input type="text" class="form-control" name="daftar-saksi[saksi][0][kebangsaan]">
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" name="daftar-saksi[saksi][0][alamat]">
      </div>
      <div class="mb-3">
        <label class="form-label">Pekerjaan</label>
        <input type="text" class="form-control" name="daftar-saksi[saksi][0][pekerjaan]">
      </div>
      <div class="mb-3">
        <label class="form-label">Agama</label>
        <input type="text" class="form-control" name="daftar-saksi[saksi][0][agama]">
      </div>
      <div class="mb-3">
        <label class="form-label">Keterangan</label>
        <textarea class="form-control" name="daftar-saksi[saksi][0][keterangan]"></textarea>
      </div>
      <button type="button" class="btn btn-danger" onclick="hapusSaksi2(this)">Hapus</button>
    </div>
    <button type="button" class="btn btn-primary" onclick="tambahSaksi2()">Tambah Saksi</button>
  </div>
</div>