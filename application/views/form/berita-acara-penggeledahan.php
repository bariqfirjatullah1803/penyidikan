<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Waktu</label>
            <input type="datetime-local" class="form-control" name="berita-acara-penggeledahan[waktu]">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Penggeledah</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[nama-penggeledah]">
        </div>
        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[nip-penggeledah]">
        </div>
        <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[jabatan-penggeledah]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanda Tangan Penggeledah</label>
            <input type="file" class="form-control" accept="image/png" name="ttd[berita-acara-penggeledahan][penyidik]">
            <small class="text-danger text-small">Image only png*</small>
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Laporan Kejadian</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[nomor-laporan-kejadian]">
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Surat Perintah Penggeledahan</label>
            <input type="text" class="form-control"
                name="berita-acara-penggeledahan[nomor-surat-perintah-penggeledahan]">
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Surat Kepala Kantor</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[surat-kepala-kantor]">
        </div>
        <div class="mb-3">
            <label class="form-label">Perihal</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[perihal]">
        </div>
        <div class="mb-3">
            <label class="form-label">Pasal</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[pasal]">
        </div>

        <div class="mb-3">
            <label class="form-label">Nama yang Digeledah</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[nama-digeledah]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tempat Tanggal Lahir</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[ttl-digeledah]">
        </div>
        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[umur-digeledah]">
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor KTP</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[ktp-digeledah]">
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[jenis-kelamin-digeledah]">
        </div>
        <div class="mb-3">
            <label class="form-label">Kewarganegaraan</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[kewarganegaraan-digeledah]">
        </div>
        <div class="mb-3">
            <label class="form-label">Agama</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[agama-digeledah]">
        </div>
        <div class="mb-3">
            <label class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[pekerjaan-digeledah]">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="berita-acara-penggeledahan[alamat-digeledah]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanda Tangan</label>
            <input type="file" class="form-control" accept="image/png"
                name="ttd[berita-acara-penggeledahan][tersangka]">
            <small class="text-danger text-small">Image only png*</small>
        </div>
        <div id="petugas-container5">
            <div class="mb-3">
                <label class="form-label">Petugas Penyaksikan</label>
                <div class="petugas">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control"
                            name="berita-acara-penggeledahan[petugas-penyaksikan][0][nama]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <input type="text" class="form-control"
                            name="berita-acara-penggeledahan[petugas-penyaksikan][0][jabatan]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control"
                            name="berita-acara-penggeledahan[petugas-penyaksikan][0][alamat]">
                    </div>
                    <button type="button" class="btn btn-danger btn-sm" onclick="hapusPetugas5(this)">Hapus
                        Petugas</button>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary" onclick="tambahPetugas5()">Tambah Petugas</button>

    </div>
</div>