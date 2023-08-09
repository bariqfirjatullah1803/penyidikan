<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">
        <div id="berita-acara-pemeriksaan-saksi">
            <div class="mb-3">
                <label class="form-label">Nama Pemeriksa</label>
                <input type="text" class="form-control" name="berita-acara-pemeriksaan-saksi[nama-pemeriksa]">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Saksi</label>
                <input type="text" class="form-control" name="berita-acara-pemeriksaan-saksi[nama-saksi]">
            </div>
            <div class="mb-3">
                <label class="form-label">Tempat/Tanggal Lahir Saksi</label>
                <input type="text" class="form-control"
                    name="berita-acara-pemeriksaan-saksi[tempat-tanggal-lahir-saksi]">
            </div>
            <div id="pertanyaan-berita-acara-pemeriksaan-saksi" class="mb-3">
                <label class="form-label">Pertanyaan</label>
                <div class="pertanyaan">
                    <input type="text" class="form-control" name="berita-acara-pemeriksaan-saksi[pertanyaan][]">
                    <button type="button" class="btn btn-danger"
                        onclick="hapusPertanyaan1(this, 'berita-acara-pemeriksaan-saksi')">Hapus</button>
                </div>
            </div>
            <button type="button" class="btn btn-primary" onclick="tambahPertanyaan1('berita-acara-pemeriksaan-saksi')">+
                Tambah Pertanyaan</button>
        </div>

    </div>
</div>