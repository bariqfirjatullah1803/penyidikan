<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">
        <div id="surat-acara-penyitaan">
            <div class="mb-3">
                <label class="form-label">Nama yang disita</label>
                <input type="text" class="form-control" name="surat-acara-penyitaan[nama-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Tempat Tanggal Lahir</label>
                <input type="text" class="form-control" name="surat-acara-penyitaan[ttl-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Umur</label>
                <input type="text" class="form-control" name="surat-acara-penyitaan[umur-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor KTP</label>
                <input type="text" class="form-control" name="surat-acara-penyitaan[ktp-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" name="surat-acara-penyitaan[jenis-kelamin-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Kewarganegaraan</label>
                <input type="text" class="form-control" name="surat-acara-penyitaan[kewarganegaraan-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Agama</label>
                <input type="text" class="form-control" name="surat-acara-penyitaan[agama-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="surat-acara-penyitaan[pekerjaan-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="surat-acara-penyitaan[alamat-disita]">
            </div>
            <div id="saksi-surat-acara-penyitaan">
                <h5>Petugas</h5>
                <div class="petugas">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="surat-acara-penyitaan[petugas][0][nama-petugas]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIP</label>
                        <input type="text" class="form-control" name="surat-acara-penyitaan[petugas][0][nip-petugas]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <input type="text" class="form-control" name="surat-acara-penyitaan[petugas][0][jabatan-petugas]">
                    </div>
                    <button type="button" class="btn btn-danger" onclick="hapusPetugas7(this)">Hapus</button>
                </div>
            </div>
            <button type="button" class="btn btn-primary" onclick="tambahPetugas7()">Tambah Grup</button>
        </div>
    </div>
</div>
