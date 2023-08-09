<div class="card form-card">
    <div class="card-header">
        Daftar Tersangka
    </div>
    <div class="card-body">
        <div id="daftar-tersangka">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="daftar-tersangka[nama][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Kebangsaan</label>
                <input type="text" class="form-control" name="daftar-tersangka[kebangsaan][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="daftar-tersangka[alamat][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="daftar-tersangka[pekerjaan][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Agama</label>
                <input type="text" class="form-control" name="daftar-tersangka[agama][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <textarea class="form-control" name="daftar-tersangka[keterangan][]"></textarea>
            </div>
            <button type="button" class="btn btn-danger" onclick="hapusTersangka(this)">Hapus</button>
        </div>
        <button type="button" class="btn btn-primary" onclick="tambahTersangka()">Tambah Tersangka</button>
    </div>
</div>