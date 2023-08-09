<!DOCTYPE html>
<html>

<head>
    <title>Form Cetak Laporan Kejadian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
        }

        .container {
            margin: 30px auto;
            max-width: 600px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h2>Form Cetak Laporan Kejadian</h2>
    <div class="container">
        <?php echo form_open_multipart('cetak'); ?>
        <h3>Kop Surat</h3>
        <!-- <div class="form-group">
            <label>Logo Kop Surat:</label>
            <input type="file" name="logo" class="form-control" required>
        </div> -->
        <div class="form-group">
            <label>Header Kop Surat:</label>
            <!-- <input type="text" name="header-1" class="form-control mb-3" -->
                <!-- value="KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA RI"> -->
            <input type="text" name="header-2" class="form-control mb-3" value="KANTOR WILAYAH DKI JAKARTA">
            <input type="text" name="header-3" class="form-control mb-3"
                value="KANTOR IMIGRASI KELAS I TPI TANJUNG PRIOK">
            <textarea name="header-alamat" rows="2"
                class="form-control">Jl. . Melati, No. 124, Jakarta Utara Telp. (021)-43934909,Fax. (021)-4352253 email: kanimpriuk.dki@gmail.com</textarea>
        </div>
        <div class="form-group">
            <label for="nomor">Nomor Laporan:</label>
            <input type="text" id="nomor" name="nomor" class="form-control">
        </div>
        <h3>Data Pelapor</h3>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama_pelapor" class="form-control">
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat/Tanggal Lahir:</label>
            <div class="row">
                <div class="col">
                    <input type="text" id="tempat_lahir_pelapor" name="tempat_lahir_pelapor" class="form-control">
                </div>
                <div class="col">
                    <input type="date" id="tanggal_lahir_pelapor" name="tanggal_lahir_pelapor" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="nip_pelapor">NIP/NIK/No Paspor:</label>
            <input type="text" id="nip_pelapor" name="nip_pelapor" class="form-control">
        </div>
        <div class="form-group">
            <label for="kewarganegaraan_pelapor">Kewarganegaraan:</label>
            <input type="text" id="kewarganegaraan_pelapor" name="kewarganegaraan_pelapor" class="form-control">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin_pelapor">Jenis Kelamin:</label>
            <input type="text" id="jenis_kelamin_pelapor" name="jenis_kelamin_pelapor" class="form-control">
        </div>
        <div class="form-group">
            <label for="pekerjaan_pelapor">Pekerjaan:</label>
            <input type="text" id="pekerjaan_pelapor" name="pekerjaan_pelapor" class="form-control">
        </div>
        <div class="form-group">
            <label for="alamat_pelapor">Alamat:</label>
            <textarea id="alamat_pelapor" name="alamat_pelapor" class="form-control"></textarea>
        </div>

        <h3>Data Tersangka</h3>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama_tersangka" class="form-control">
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat/Tanggal Lahir:</label>
            <div class="row">
                <div class="col">
                    <input type="text" id="tempat_lahir_tersangka" name="tempat_lahir_tersangka" class="form-control">
                </div>
                <div class="col">
                    <input type="date" id="tanggal_lahir_tersangka" name="tanggal_lahir_tersangka" class="form-control">
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
            <input type="text" id="kewarganegaraan_tersangka" name="kewarganegaraan_tersangka" class="form-control">
        </div>
        <div class="form-group">
            <label for="agama_tersangka">Agama:</label>
            <input type="text" id="agama_tersangka" name="agama_tersangka" class="form-control">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin_tersangka">Jenis Kelamin:</label>
            <input type="text" id="jenis_kelamin_tersangka" name="jenis_kelamin_tersangka" class="form-control">
        </div>
        <div class="form-group">
            <label for="pekerjaan_tersangka">Pekerjaan:</label>
            <input type="text" id="pekerjaan_tersangka" name="pekerjaan_tersangka" class="form-control">
        </div>
        <div class="form-group">
            <label for="alamat_tersangka">Alamat:</label>
            <textarea id="alamat_tersangka" name="alamat_tersangka" class="form-control"></textarea>
        </div>

        <h3>Peristiwa di laporkan</h3>
        <div class="form-group">
            <label for="waktu_kejadian">Waktu Kejadian:</label>
            <input type="datetime-local" id="waktu_kejadian" name="waktu_kejadian" class="form-control">
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
            <label for="saksi">Saksi-saksi:</label>
            <textarea id="saksi" name="saksi" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="barang_bukti">Barang Bukti:</label>
            <textarea id="barang_bukti" name="barang_bukti" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="tindakan">Tindakan yang Diambil:</label>
            <textarea id="tindakan" name="tindakan" class="form-control"></textarea>
        </div>
        <h3>Pembuat Laporan</h3>
        <div class="form-group">
            <label for="nama_pembuat_laporan">Nama</label>
            <input type="text" id="nama_pembuat_laporan" name="nama_pembuat_laporan" class="form-control">
        </div>
        <div class="form-group">
            <label for="nip_pembuat_laporan">NIP</label>
            <input type="text" id="nip_pembuat_laporan" name="nip_pembuat_laporan" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Cetak Laporan</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>