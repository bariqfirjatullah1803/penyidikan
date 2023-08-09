<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">
        <div id="surat-perintah-tugas">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="surat-perintah-tugas[nama-petugas][]">
            </div>
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" class="form-control" name="surat-perintah-tugas[nip-petugas][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" class="form-control" name="surat-perintah-tugas[jabatan-petugas][]">
            </div>
            <div id="data-container">
            </div>
            <button type="button" class="btn btn-primary" id="tambah-data">Tambah Data</button>
        </div>

    </div>
</div>