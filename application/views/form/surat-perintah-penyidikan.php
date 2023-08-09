<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body" id="formContainerPenyidik">
        <div class="mb-3">
            <label for="" class="form-label">Nomor</label>
            <input type="text" name="surat-perintah-penyidikan[nomor]" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Menimbang</label>
            <textarea name="surat-perintah-penyidikan[menimbang]" class="form-control" row="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Dasar</label>
            <textarea name="surat-perintah-penyidikan[dasar]" class="form-control" id="editor" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Untuk</label>
            <textarea name="surat-perintah-penyidikan[untuk]" class="form-control" id="editor" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tempat, tanggal</label>
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" name="surat-perintah-penyidikan[tempat]">
                </div>
                <div class="col-6">
                    <input type="date" class="form-control" name="surat-perintah-penyidikan[tanggal]">
                </div>
            </div>
        </div>
        <h5>Kepala Kantor</h5>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="surat-perintah-penyidikan[kepala-kantor][nama]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanda Tangan</label>
            <input type="file" class="form-control" accept="image/png"
                name="ttd[surat-perintah-penyidikan][kepala-kantor]">
            <small class="text-danger text-small">Image only png*</small>
        </div>
        <div class="penyidik-container">
            <div class="penyidik-item">
                <h5>Penyidik</h5>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="surat-perintah-penyidikan[penyidik][0][nama]">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pangkat / NIP</label>
                    <input type="text" class="form-control" name="surat-perintah-penyidikan[penyidik][0][pangkat-nip]">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jabatan</label>
                    <input type="text" class="form-control" name="surat-perintah-penyidikan[penyidik][0][jabatan]">
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-add-penyidik">Tambah Penyidik</button>

    </div>
</div>