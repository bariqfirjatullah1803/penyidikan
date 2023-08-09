<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">
        <div id="surat-perintah-penggeledahan">
            <div class="mb-3">
                <label for="" class="form-label">Nomor</label>
                <input name="surat-perintah-penggeledahan[nomor]" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pertimbangan</label>
                <textarea name="surat-perintah-penggeledahan[pertimbangan]" class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Dasar</label>
                <textarea name="surat-perintah-penggeledahan[dasar]" class="form-control" id="editor"
                    rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Untuk</label>
                <textarea name="surat-perintah-penggeledahan[untuk]" class="form-control" id="editor"
                    rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tempat, tanggal</label>
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control" name="surat-perintah-penggeledahan[tempat]">
                    </div>
                    <div class="col-6">
                        <input type="date" class="form-control" name="surat-perintah-penggeledahan[waktu]">
                    </div>
                </div>
            </div>
            <h5>Diperintah</h5>
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input name="surat-perintah-penggeledahan[nama-yang-diperintah]" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">NIP</label>
                <input name="surat-perintah-penggeledahan[nip-yang-diperintah]" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanda Tangan Diperintah</label>
                <input type="file" class="form-control" accept="image/png"
                    name="ttd[surat-perintah-penggeledahan][diperintah]">
                <small class="text-danger text-small">Image only png*</small>
            </div>
            <h5>Kepala Kantor</h5>
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input name="surat-perintah-penggeledahan[nama-kepala-kantor]" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">NIP</label>
                <input name="surat-perintah-penggeledahan[nip-kepala-kantor]" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanda Tangan Kepala Kantor</label>
                <input type="file" class="form-control" accept="image/png"
                    name="ttd[surat-perintah-penggeledahan][kepala-kantor]">
                <small class="text-danger text-small">Image only png*</small>
            </div>
            
            <div class="grup-data">
                <div class="mb-3">
                    <label class="form-label">Nama yang diperintah</label>
                    <input type="text" class="form-control"
                        name="surat-perintah-penggeledahan[petugas][0][nama-diperintah]">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pangkat golongan</label>
                    <input type="text" class="form-control"
                        name="surat-perintah-penggeledahan[petugas][0][pangkat-golongan]">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jabatan</label>
                    <input type="text" class="form-control" name="surat-perintah-penggeledahan[petugas][0][jabatan]">
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <input type="text" class="form-control" name="surat-perintah-penggeledahan[petugas][0][agama]">
                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-danger" onclick="hapusGrup(this)">Hapus</button>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary" onclick="tambahGrup()">Tambah Grup</button>

    </div>
</div>