<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="">Nomor</label>
            <input type="text" class="form-control" name="surat-perintah-penangkapan[nomor]">
        </div>
        <div class="mb-3">
            <label for="">Pertimbangan</label>
            <input type="text" class="form-control" name="surat-perintah-penangkapan[pertimbangan]">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Dasar</label>
            <textarea name="surat-perintah-penangkapan[dasar]" class="form-control" id="editor" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Untuk</label>
            <textarea name="surat-perintah-penangkapan[untuk]" class="form-control" id="editor" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tempat, tanggal</label>
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" name="surat-perintah-penangkapan[tempat]">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="surat-perintah-penangkapan[tanggal]">
                </div>
            </div>
        </div>

        <h5>Penerima Perintah</h5>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="surat-perintah-penangkapan[nama-penerima-perintah]">
        </div>
        <div class="mb-3">
            <label for="">NIP</label>
            <input type="text" class="form-control" name="surat-perintah-penangkapan[nip-penerima-perintah]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanda Tangan</label>
            <input type="file" class="form-control" accept="image/png" name="ttd[surat-perintah-penangkapan][penyidik]">
            <small class="text-danger text-small">Image only png*</small>
        </div>

        <h5>Kepala Kantor</h5>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="surat-perintah-penangkapan[nama-kepala-kantor]">
        </div>
        <div class="mb-3">
            <label for="">NIP</label>
            <input type="text" class="form-control" name="surat-perintah-penangkapan[nip-kepala-kantor]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanda Tangan</label>
            <input type="file" class="form-control" accept="image/png" name="ttd[surat-perintah-penangkapan][kepala-kantor]">
            <small class="text-danger text-small">Image only png*</small>
        </div>
        <hr>
        <div id="surat-perintah-penangkapan">
            <div class="mb-3">
                <label class="form-label">Data Petugas</label>
                <div id="data-petugas-container2">
                    <div class="data-petugas2">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="surat-perintah-penangkapan[nama-petugas][]">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIP</label>
                            <input type="text" class="form-control" name="surat-perintah-penangkapan[nip-petugas][]">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <input type="text" class="form-control"
                                name="surat-perintah-penangkapan[jabatan-petugas][]">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="tambahPetugas2()">Tambah Data Petugas</button>
            </div>
            <div class="mb-3">
                <label class="form-label">Data Tersangka</label>
                <div id="data-tersangka-container2">
                    <div class="data-tersangka2">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="surat-perintah-penangkapan[nama-tersangka][]">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control" name="surat-perintah-penangkapan[nik-tersangka][]">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Tanggal Lahir</label>
                            <input type="text" class="form-control"
                                name="surat-perintah-penangkapan[tempat-lahir-tersangka][]">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kewarganegaraan</label>
                            <input type="text" class="form-control"
                                name="surat-perintah-penangkapan[kewarganegaraan-tersangka][]">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control"
                                name="surat-perintah-penangkapan[alamat-tersangka][]">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="tambahTersangka2()">Tambah Data
                    Tersangka</button>
            </div>
        </div>
    </div>
</div>