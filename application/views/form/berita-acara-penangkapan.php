<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">

        <div class="mb-3">
            <label class="form-label">Waktu</label>
            <input type="datetime-local" class="form-control" name="berita-acara-penangkapan[waktu]">
        </div>
        <h5>Penyidik</h5>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[nama-penyidik]">
        </div>
        <div class="mb-3">
            <label class="form-label">Pangkat</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[pangkat-penyidik]">
        </div>
        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[nip-penyidik]">
        </div>
        <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[jabatan-penyidik]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanda Tangan Penyidik</label>
            <input type="file" class="form-control" accept="image/png" name="ttd[berita-acara-penangkapan][penyidik]">
            <small class="text-danger text-small">Image only png*</small>
        </div>
        <hr>
        <div class="mb-3">
            <label class="form-label">Nomor Surat Keputusan</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[nomor-surat-keputusan]">
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Surat Perintah Penyidik</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[nomor-surat-perintah-penyidik]">
        </div>
        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea class="form-control" id="editor" name="berita-acara-penangkapan[keterangan]"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Jalan Pelaksanaan</label>
            <textarea class="form-control" id="editor" name="berita-acara-penangkapan[jalan-pelaksanaan]"></textarea>
        </div>
        <div id="petugas-container4">
            <div class="mb-3">
                <label class="form-label">Nama Petugas</label>
                <input type="text" class="form-control" name="berita-acara-penangkapan[petugas][0][nama-petugas]">
            </div>

            <div class="mb-3">
                <label class="form-label">NIP Petugas</label>
                <input type="text" class="form-control" name="berita-acara-penangkapan[petugas][0][nip-petugas]">
            </div>

            <div class="mb-3">
                <label class="form-label">Jabatan Petugas</label>
                <input type="text" class="form-control" name="berita-acara-penangkapan[petugas][0][jabatan-petugas]">
            </div>
        </div>

        <button type="button" class="btn btn-primary" onclick="tambahPetugas4()">Tambah Petugas</button>

        <div class="mb-3">
            <label class="form-label">Nama Tersangka</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[nama-tersangka]">
        </div>

        <div class="mb-3">
            <label class="form-label">Tempat Tanggal Lahir Tersangka</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[ttl-tersangka]">
        </div>

        <div class="mb-3">
            <label class="form-label">Umur Tersangka</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[umur-tersangka]">
        </div>

        <div class="mb-3">
            <label class="form-label">Nomor KTP Tersangka</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[ktp-tersangka]">
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin Tersangka</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[jk-tersangka]">
        </div>

        <div class="mb-3">
            <label class="form-label">Kewarganegaraan Tersangka</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[kwn-tersangka]">
        </div>

        <div class="mb-3">
            <label class="form-label">Agama Tersangka</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[agama-tersangka]">
        </div>

        <div class="mb-3">
            <label class="form-label">Pekerjaan Tersangka</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[pekerjaan-tersangka]">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat Tersangka</label>
            <input type="text" class="form-control" name="berita-acara-penangkapan[alamat-tersangka]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanda Tangan Tersangka</label>
            <input type="file" class="form-control" accept="image/png" name="ttd[berita-acara-penangkapan][tersangka]">
            <small class="text-danger text-small">Image only png*</small>
        </div>

    </div>
</div>