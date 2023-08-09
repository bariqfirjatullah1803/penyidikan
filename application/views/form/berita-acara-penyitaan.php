<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">
        <div id="berita-acara-penyitaan">
            <div class="mb-3">
                <label class="form-label">Pasal</label>
                <input type="text" class="form-control" name="berita-acara-penyitaan[pasal]">
            </div>
            <h5>Penyidik</h5>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="berita-acara-penyitaan[nama-penyidik]">
            </div>
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" class="form-control" name="berita-acara-penyitaan[nip-penyidik]">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanda Tangan Penyidik</label>
                <input type="file" class="form-control" accept="image/png"
                    name="ttd[berita-acara-penyitaan][penyidik]">
                <small class="text-danger text-small">Image only png*</small>
            </div>

            <hr>
            <div class="mb-3">
                <label class="form-label">Nama yang disita</label>
                <input type="text" class="form-control" name="berita-acara-penyitaan[nama-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Tempat Tanggal Lahir</label>
                <input type="text" class="form-control" name="berita-acara-penyitaan[ttl-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Umur</label>
                <input type="text" class="form-control" name="berita-acara-penyitaan[umur-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor KTP</label>
                <input type="text" class="form-control" name="berita-acara-penyitaan[ktp-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" name="berita-acara-penyitaan[jenis-kelamin-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Kewarganegaraan</label>
                <input type="text" class="form-control" name="berita-acara-penyitaan[kewarganegaraan-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Agama</label>
                <input type="text" class="form-control" name="berita-acara-penyitaan[agama-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="berita-acara-penyitaan[pekerjaan-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="berita-acara-penyitaan[alamat-disita]">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanda Tangan Penyidik</label>
                <input type="file" class="form-control" accept="image/png"
                    name="ttd[berita-acara-penyitaan][tersangka]">
                <small class="text-danger text-small">Image only png*</small>
            </div>

            <div class="mb-3">
                <label class="form-label">Barang</label>
                <textarea class="form-control" name="berita-acara-penyitaan[barang]" id="editor"></textarea>
            </div>
            <div id="saksi-berita-acara-penyitaan">
                <h5>Petugas</h5>
                <div class="petugas">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="berita-acara-penyitaan[nama-petugas][]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIP</label>
                        <input type="text" class="form-control" name="berita-acara-penyitaan[nip-petugas][]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <input type="text" class="form-control" name="berita-acara-penyitaan[jabatan-petugas][]">
                    </div>
                    <button type="button" class="btn btn-danger" onclick="hapusPetugas6(this)">Hapus</button>
                </div>
            </div>
            <button type="button" class="btn btn-primary" onclick="tambahPetugas5()">Tambah Grup</button>
        </div>
    </div>
</div>