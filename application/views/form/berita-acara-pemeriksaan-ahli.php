<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">
        <div id="berita-acara-pemeriksaan-ahli">
            <div class="mb-3">
                <label class="form-label">Nama Pemeriksa</label>
                <input type="text" class="form-control" name="berita-acara-pemeriksaan-ahli[nama-pemeriksa]">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Ahli</label>
                <input type="text" class="form-control" name="berita-acara-pemeriksaan-ahli[nama-ahli]">
            </div>
            <div class="mb-3">
                <label class="form-label">Tempat/Tanggal Lahir</label>
                <input type="text" class="form-control" name="berita-acara-pemeriksaan-ahli[tempat-tanggal-lahir]">
            </div>
            <div id="pertanyaan">
                <div class="mb-3">
                    <label class="form-label">Pertanyaan</label>
                    <input type="text" class="form-control" name="berita-acara-pemeriksaan-ahli[pertanyaan][]">
                    <button type="button" class="btn btn-danger btn-sm" onclick="hapusPertanyaan2(this)">Hapus</button>
                </div>
            </div>
            <button type="button" class="btn btn-primary"
                onclick="tambahPertanyaan2('berita-acara-pemeriksaan-ahli')">Tambah Pertanyaan</button>
        </div>
    </div>
</div>