<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.tiny.cloud/1/8ruryyv1pw5lv0nudelhfsql8uqcb4ale6qf34711vk5r3iw/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#editor',
            skin: 'bootstrap',
            plugins: 'lists',
            toolbar: 'bold italic strikethrough blockquote bullist numlist',
            menubar: false,
        });
    </script>
</head>

<body>
    <div class="container pt-5">

        <form action="<?= base_url('cetak') ?>" method="post">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">Kop Surat</div>
                        <div class="card-body">
                            <input type="text" name="header-2" class="form-control mb-3"
                                value="KANTOR WILAYAH DKI JAKARTA">
                            <input type="text" name="header-3" class="form-control mb-3"
                                value="KANTOR IMIGRASI KELAS I TPI TANJUNG PRIOK">
                            <textarea name="header-alamat" rows="2"
                                class="form-control">Jl. . Melati, No. 124, Jakarta Utara Telp. (021)-43934909,Fax. (021)-4352253 email: kanimpriuk.dki@gmail.com</textarea>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">Peristiwa</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="waktu_kejadian">Waktu Kejadian:</label>
                                <input type="datetime-local" id="waktu_kejadian" name="waktu_kejadian"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pelanggaran">Pelanggaran</label>
                                <textarea name="pelanggaran" id="pelanggaran" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tempat_kejadian">Tempat Kejadian:</label>
                                <input type="text" id="tempat_kejadian" name="tempat_kejadian" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="peristiwa">Peristiwa yang Dilaporkan:</label>
                                <textarea id="peristiwa" name="peristiwa" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="barang_bukti">Barang Bukti:</label>
                                <textarea id="editor" name="barang_bukti" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tindakan">Tindakan yang Diambil:</label>
                                <textarea id="editor" name="tindakan"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">Laporan Kejadian</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nomor">Nomor Laporan</label>
                                <input type="text" id="nomor" name="nomor" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">Tersangka</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" id="nama" name="nama_tersangka" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat/Tanggal Lahir:</label>
                                <div class="row">
                                    <div class="col-lg">
                                        <input type="text" id="tempat_lahir_tersangka" name="tempat_lahir_tersangka"
                                            class="form-control">
                                    </div>
                                    <div class="col-lg">
                                        <input type="date" id="tanggal_lahir_tersangka" name="tanggal_lahir_tersangka"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="umur_tersangka">Umur:</label>
                                <input type="text" id="umur_tersangka" name="umur_tersangka" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nip_tersangka">NIP/NIK/No Paspor:</label>
                                <input type="text" id="nip_tersangka" name="nip_tersangka" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kewarganegaraan_tersangka">Kewarganegaraan:</label>
                                <input type="text" id="kewarganegaraan_tersangka" name="kewarganegaraan_tersangka"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="agama_tersangka">Agama:</label>
                                <input type="text" id="agama_tersangka" name="agama_tersangka" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin_tersangka">Jenis Kelamin:</label>
                                <input type="text" id="jenis_kelamin_tersangka" name="jenis_kelamin_tersangka"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan_tersangka">Pekerjaan:</label>
                                <input type="text" id="pekerjaan_tersangka" name="pekerjaan_tersangka"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat_tersangka">Alamat:</label>
                                <textarea id="alamat_tersangka" name="alamat_tersangka" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">Pelapor</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" id="nama" name="nama_pelapor" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat/Tanggal Lahir:</label>
                                <div class="row">
                                    <div class="col-lg">
                                        <input type="text" id="tempat_lahir_pelapor" name="tempat_lahir_pelapor"
                                            class="form-control">
                                    </div>
                                    <div class="col-lg">
                                        <input type="date" id="tanggal_lahir_pelapor" name="tanggal_lahir_pelapor"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nip_pelapor">NIP/NIK/No Paspor:</label>
                                <input type="text" id="nip_pelapor" name="nip_pelapor" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kewarganegaraan_pelapor">Kewarganegaraan:</label>
                                <input type="text" id="kewarganegaraan_pelapor" name="kewarganegaraan_pelapor"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin_pelapor">Jenis Kelamin:</label>
                                <input type="text" id="jenis_kelamin_pelapor" name="jenis_kelamin_pelapor"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan_pelapor">Pekerjaan:</label>
                                <input type="text" id="pekerjaan_pelapor" name="pekerjaan_pelapor" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat_pelapor">Alamat:</label>
                                <textarea id="alamat_pelapor" name="alamat_pelapor" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">Pelapor</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_pembuat_laporan">Nama</label>
                                <input type="text" id="nama_pembuat_laporan" name="nama_pembuat_laporan"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nip_pembuat_laporan">NIP</label>
                                <input type="text" id="nip_pembuat_laporan" name="nip_pembuat_laporan"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">Saksi</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_saksi">Nama</label>
                                <input type="text" name="nama_saksi[]" id="nama_saksi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat/Tanggal Lahir:</label>
                                <div class="row">
                                    <div class="col-lg">
                                        <input type="text" id="tempat_lahir_saksi" name="tempat_lahir_saksi[]"
                                            class="form-control">
                                    </div>
                                    <div class="col-lg">
                                        <input type="date" id="tanggal_lahir_saksi" name="tanggal_lahir_saksi[]"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin_saksi">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin_saksi[]" id="jenis_kelamin_saksi"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan_saksi">Pekerjaan</label>
                                <input type="text" name="pekerjaan_saksi[]" id="pekerjaan_saksi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kebangsaan_saksi">Kebangsaan</label>
                                <input type="text" name="kebangsaan_saksi[]" id="kebangsaan_saksi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat_saksi">Alamat</label>
                                <textarea name="alamat_saksi[]" id="alamat_saksi" rows="2"
                                    class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="keterangan_saksi">Keterangan</label>
                                <textarea name="keterangan_saksi[]" id="editor" rows="6"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">Uraian Kejadian</div>
                        <div class="card-body">
                            <textarea name="uraian_kejadian" id="editor" rows="10"
                                class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cetak Laporan</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>