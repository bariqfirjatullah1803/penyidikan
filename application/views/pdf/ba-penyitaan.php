<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <?php
    $data = $data['berita-acara-penyitaan'];
    ?>
    <table style="width:100%;font-size:16px">
        <tr>
            <td colspan="4">
                <?= generate_text_with_line('Disita dari :', 133, 'none') ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Nama</td>
            <td width="5%">:</td>
            <td>
                <?= $data['nama-disita'] ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Tempat/ Tanggal lahir</td>
            <td width="5%">:</td>
            <td>
                <?= $data['ttl-disita'] ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Umur</td>
            <td width="5%">:</td>
            <td>
                <?= $data['umur-disita'] ?> Tahun
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Nomor KTP/ NIK</td>
            <td width="5%">:</td>
            <td>
                <?= $data['ktp-disita'] ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Kewarganegaraan</td>
            <td width="5%">:</td>
            <td>
                <?= $data['kewarganegaraan-disita'] ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Agama</td>
            <td width="5%">:</td>
            <td>
                <?= $data['agama-disita'] ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Pekerjaan</td>
            <td width="5%">:</td>
            <td>
                <?= $data['pekerjaan-disita'] ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Alamat</td>
            <td width="5%"></td>
            <td>
                <?= $data['alamat-disita'] ?>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <?= generate_text_with_line('Dengan disaksikan oleh :', 133, 'none') ?>
            </td>
        </tr>
        <?php $no = 1;
        foreach ($data['petugas'] as $petugas): ?>
            <tr>
                <td width="5%">1.</td>
                <td>Nama</td>
                <td width="5%">:</td>
                <td>
                    <?= $petugas['nama-petugas'] ?>
                </td>
            </tr>
            <tr>
                <td width="5%"></td>
                <td>NIP</td>
                <td width="5%">:</td>
                <td>
                    <?= $petugas['nip-petugas'] ?>
                </td>
            </tr>
            <tr>
                <td width="5%"></td>
                <td>Jabatan</td>
                <td width="5%">:</td>
                <td>
                    <?= $petugas['jabatan-petugas'] ?>
                </td>
            </tr>
            <?php $no++;
        endforeach ?>
    </table>
    <p style="font-size:16px">
        <?= generate_text_with_line('Dalam rangka melengkapi bukti dugaan tindakan pidana keimigrasian sebagaimana dimaksud dalam Pasal ' . $data['pasal'] . ' :', 150, 'none') ?>
    </p>
    <p style="font-size:16px">
        <?= generate_text_with_line('Adapun pelaksanaanya adalah sebagai berikut:', 148, 'none') ?>
    </p>
    <p style="font-size:16px">Barang – barang tersebut disita di KANTOR IMIGRASI KELAS I TPI TANJUNG PRIOK :</p>
    <?= $data['barang'] ?>
    <p style="font-size:16px">
        <?= generate_text_with_line('Demikian surat Acara Penyitaan ini dibuat dengan sebenarnya atas kekuatan sumpah jabatan, kemudian ditutup dan ditanda tangani di Tanjung Balai Asahan pada hari, tanggal dan tahun tersebut di atas : ', 148, 'none') ?>
    </p>
    <table style="width:100%;text-align:center;font-size:16px">
        <tr>
            <td style="width:50%">Tersangka</td>
            <td>Penyidik Pegawai Negeri Sipil</td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase;">
                <img src="<?= base_url('upload/ttd/') . $data['image']['tersangka'] ?>" alt="" width="100px">

                <?= $data['nama-disita'] ?>
            </td>
            <td style="font-weight:bold;text-transform:uppercase;">
                <img src="<?= base_url('upload/ttd/') . $data['image']['penyidik'] ?>" alt="" width="100px">

                <?= $data['nama-penyidik'] ?>
                <br>
                NIP.
                <?= $data['nip-penyidik'] ?>
            </td>
        </tr>
    </table>
</body>

</html>