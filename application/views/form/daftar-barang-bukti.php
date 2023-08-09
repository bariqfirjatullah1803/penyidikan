<div class="card form-card">
    <div class="card-header">
        <?= $label ?>
    </div>
    <div class="card-body">
        <div id="daftar-barang-bukti">
            <div class="mb-3">
                <label class="form-label">Nomor Register Barang Bukti</label>
                <input type="text" class="form-control" name="daftar-barang-bukti[nomor-register][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Barang Bukti</label>
                <input type="text" class="form-control" name="daftar-barang-bukti[jenis-barang][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Pemilik yang Diakui</label>
                <input type="text" class="form-control" name="daftar-barang-bukti[pemilik-diakui][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Disita</label>
                <input type="text" class="form-control" name="daftar-barang-bukti[disita][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="text" class="form-control" name="daftar-barang-bukti[tanggal][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Dari</label>
                <input type="text" class="form-control" name="daftar-barang-bukti[dari][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Oleh</label>
                <input type="text" class="form-control" name="daftar-barang-bukti[oleh][]">
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <textarea class="form-control" name="daftar-barang-bukti[keterangan][]"></textarea>
            </div>
            <button type="button" class="btn btn-danger" onclick="hapusBarangBukti(this)">Hapus</button>
        </div>
        <button type="button" class="btn btn-primary" onclick="tambahBarangBukti()">Tambah Barang Bukti</button>
    </div>
</div>