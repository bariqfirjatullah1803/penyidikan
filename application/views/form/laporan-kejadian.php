<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">
        <h5>Surat</h5>
        <div class="mb-3">
            <label for="" class="form-label">Nomor</label>
            <input type="text" name="laporan-kejadian[nomor]" class="form-control">
        </div>
        <h5>Pelapor</h5>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="laporan-kejadian[pelapor][nama]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tempat / Tanggal Lahir</label>
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" name="laporan-kejadian[pelapor][tempat_lahir]">
                </div>
                <div class="col-6">
                    <input type="date" class="form-control" name="laporan-kejadian[pelapor][tanggal_lahir]">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">NIP / Pangkat / Golongan</label>
            <input type="text" class="form-control" name="laporan-kejadian[pelapor][nip]">
        </div>
        <div class="mb-3">
            <label class="form-label">Kewarganegaraan</label>
            <input type="text" class="form-control" name="laporan-kejadian[pelapor][kewarganegaraan]">
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" name="laporan-kejadian[pelapor][jenis-kelamin]">
        </div>
        <div class="mb-3">
            <label class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" name="laporan-kejadian[pelapor][pekerjaan]">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea type="text" class="form-control" name="laporan-kejadian[pelapor][alamat]" row="3"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanda Tangan</label>
            <input type="file" class="form-control" accept="image/png" name="ttd[laporan-kejadian][pelapor]">
            <small class="text-danger text-small">Image only png*</small>
        </div>
        <h5>Peristiwa</h5>
        <div class="mb-3">
            <label class="form-label">Waktu Kejadian</label>
            <input type="text" class="form-control" name="laporan-kejadian[peristiwa][waktu-kejadian]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tempat Kejadian</label>
            <input type="text" class="form-control" name="laporan-kejadian[peristiwa][tempat-kejadian]">
        </div>
        <div class="mb-3">
            <label class="form-label">Yang Terjadi</label>
            <textarea name="laporan-kejadian[peristiwa][yang-terjadi]" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Uraian Singkat Kejadian</label>
            <textarea id="editor" name="laporan-kejadian[uraian-singkat-kejadian]" rows="5"
                class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Barang Bukti</label>
            <textarea id="editor" name="laporan-kejadian[barang-bukti]" rows="5" class="form-control"></textarea>
        </div>

        <!-- Tersangka -->
        <div class="mb-3">
            <h5>Tersangka</h5>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="laporan-kejadian[tersangka][nama]">
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-6">
                        <label class="form-label">Tempat/Tanggal Lahir</label>
                        <input type="text" class="form-control" name="laporan-kejadian[tersangka][tempat-lahir]">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Umur</label>
                        <input type="text" class="form-control" name="laporan-kejadian[tersangka][umur]">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor KTP</label>
                <input type="text" class="form-control" name="laporan-kejadian[tersangka][nomor-ktp]">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" name="laporan-kejadian[tersangka][jenis-kelamin]">
            </div>
            <div class="mb-3">
                <label class="form-label">Kewarganegaraan</label>
                <input type="text" class="form-control" name="laporan-kejadian[tersangka][kewarganegaraan]">
            </div>
            <div class="mb-3">
                <label class="form-label">Agama</label>
                <input type="text" class="form-control" name="laporan-kejadian[tersangka][agama]">
            </div>
            <div class="mb-3">
                <label class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="laporan-kejadian[tersangka][pekerjaan]">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="laporan-kejadian[tersangka][alamat]" rows="5" class="form-control"></textarea>
            </div>
        </div>

        <!-- Saksi -->
        <div class="mb-3">
            <div class="saksi-container">
                <div class="saksi-item">
                    <h5>Saksi</h5>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="laporan-kejadian[saksi][nama][]">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">Tempat/Tanggal Lahir</label>
                                <input type="text" class="form-control" name="laporan-kejadian[saksi][tempat-lahir][]">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" name="laporan-kejadian[saksi][jenis-kelamin][]">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="laporan-kejadian[saksi][pekerjaan][]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kebangsaan</label>
                        <input type="text" class="form-control" name="laporan-kejadian[saksi][kebangsaan][]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="laporan-kejadian[saksi][alamat][]" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <textarea name="laporan-kejadian[saksi][keterangan][]" rows="5" class="form-control"></textarea>
                    </div>
                    <!-- <button type="button" class="btn btn-sm btn-danger btn-remove-saksi" data-index="0">Hapus</button> -->
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-add-saksi">Tambah Saksi</button>
        </div>


    </div>
</div>