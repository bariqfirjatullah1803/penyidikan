<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="">Nomor</label>
            <input type="text" name="surat-pemberitahuan-penyidikan[nomor]" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Tempat</label>
            <input type="text" name="surat-pemberitahuan-penyidikan[tempat]" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Waktu</label>
            <input type="date" name="surat-pemberitahuan-penyidikan[waktu]" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Perihal</label>
            <input type="text" name="surat-pemberitahuan-penyidikan[perihal]" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Dasar</label>
            <textarea name="surat-pemberitahuan-penyidikan[dasar]" class="form-control" id="editor"
                rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Pemberitahuan</label>
            <textarea name="surat-pemberitahuan-penyidikan[pemberitahuan]" class="form-control" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="surat-pemberitahuan-penyidikan[nama]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tempat/Tanggal Lahir</label>
            <input type="text" class="form-control" name="surat-pemberitahuan-penyidikan[tempat-tanggal-lahir]">
        </div>
        <div class="mb-3">
            <label class="form-label">Kewarganegaraan</label>
            <input type="text" class="form-control" name="surat-pemberitahuan-penyidikan[kewarganegaraan]">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="surat-pemberitahuan-penyidikan[alamat]" rows="5" class="form-control"></textarea>
        </div>
        <h5>Kepala Kantor</h5>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="surat-pemberitahuan-penyidikan[kepala-kantor][nama]">
        </div>
        <div class="mb-3">
            <label for="">NIP</label>
            <input type="text" class="form-control" name="surat-pemberitahuan-penyidikan[kepala-kantor][nip]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanda Tangan</label>
            <input type="file" class="form-control" accept="image/png"
                name="ttd[surat-pemberitahuan-penyidikan][kepala-kantor]">
            <small class="text-danger text-small">Image only png*</small>
        </div>
    </div>
</div>