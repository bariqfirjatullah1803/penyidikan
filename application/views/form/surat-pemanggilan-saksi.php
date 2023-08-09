<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="">Nomor</label>
            <input type="text" class="form-control" name="surat-pemanggilan-saksi[nomor]">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Pertimbangan</label>
            <textarea name="surat-pemanggilan-saksi[pertimbangan]" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Dasar</label>
            <textarea name="surat-pemanggilan-saksi[dasar]" class="form-control" id="editor" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Untuk</label>
            <textarea name="surat-pemanggilan-saksi[untuk]" class="form-control" id="editor" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tempat, tanggal</label>
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" name="surat-pemanggilan-saksi[tempat]">
                </div>
                <div class="col-6">
                    <input type="date" class="form-control" name="surat-pemanggilan-saksi[tanggal]">
                </div>
            </div>
        </div>
        <h5>Atasan</h5>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="surat-pemanggilan-saksi[nama-atasan]">
        </div>
        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" class="form-control" name="surat-pemanggilan-saksi[nip-atasan]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanda Tangan Atasan</label>
            <input type="file" class="form-control" accept="image/png" name="ttd[surat-pemanggilan-saksi][atasan]">
            <small class="text-danger text-small">Image only png*</small>
        </div>
        <h5>Penyidik</h5>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="surat-pemanggilan-saksi[nama-penyidik]">
        </div>
        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" class="form-control" name="surat-pemanggilan-saksi[nip-penyidik]">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanda Tangan Atasan</label>
            <input type="file" class="form-control" accept="image/png" name="ttd[surat-pemanggilan-saksi][penyidik]">
            <small class="text-danger text-small">Image only png*</small>
        </div>        
        <h5>Saksi</h5>
        <div class="mb-3">
            <label class="form-label">Memanggil Saksi Nama</label>
            <input type="text" class="form-control" name="surat-pemanggilan-saksi[nama]">
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="surat-pemanggilan-saksi[jenis-kelamin]" class="form-control">
                <option value="Laki-Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Tempat/Tanggal Lahir</label>
            <input type="text" class="form-control" name="surat-pemanggilan-saksi[tempat-tanggal-lahir]">
        </div>
        <div class="mb-3">
            <label class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" name="surat-pemanggilan-saksi[pekerjaan]">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="surat-pemanggilan-saksi[alamat]" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Hari, Tanggal, Pukul</label>
            <input type="text" class="form-control" name="surat-pemanggilan-saksi[hari-tanggal-pukul]">
        </div>
        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea id="editor" name="surat-pemanggilan-saksi[keterangan]" class="form-control"></textarea>
        </div>
    </div>
</div>