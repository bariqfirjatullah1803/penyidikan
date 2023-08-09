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
<style>
    p {
        font-size: 12px
    }
</style>

<body>
    <?php
    $this->load->view('pdf/header-surat');
    $data = $data['berita-acara-penangkapan'];
    ?>
    <p style="font-style:italic;text-decoration:underline;font-weight:bold;font-size:12px">“PRO
        JUSTITIA”</p>
    <p
        style="text-transform:uppercase;text-decoration:underline;text-align:center;font-weight:bold;margin:0;font-size:15px">
        BERITA ACARA PENANGKAPAN</p>
    <p>
        <?= generate_text_with_line('Pada ' . $data['waktu'] . ', saya :', 105, 'left') ?>
    </p>
    <p>
        <?= generate_text_with_line('<b>' . $data['nama-penyidik'] . '</b>', 196) ?>
    </p>
    <p>
        <?= generate_text_with_line($data['pangkat-penyidik'] . ' NIP.' . $data['nip-penyidik'] . ', Selaku ' . $data['jabatan-penyidik'] . ' berdasarkan Surat Keputusan Nomor : ' . $data['nomor-surat-keputusan'] . ', berdasarkan Surat Perintah Penyidik Nomor · ' . $data['nomor-surat-perintah-penyidik'] . ' bersama - sama dengan :', 150, 'left') ?>
    </p>
    <table style="width:100%;font-size:12px">
        <?php $no = 1;
        foreach ($data['petugas'] as $petugas): ?>
            <tr>
                <td>1.</td>
                <td>Nama</td>
                <td>:
                    <?= $petugas['nama-petugas'] ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>NIP</td>
                <td>:
                    <?= $petugas['nip-petugas'] ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Jabatan</td>
                <td>:
                    <?= $petugas['jabatan-petugas'] ?>
                </td>
            </tr>
            <?php $no++; endforeach ?>
        <tr>
            <td colspan="3">Telah melakukan penangkapan terhadap seseorang mengaku : </td>
        </tr>
        <tr>
            <td></td>
            <td>Nama </td>
            <td>:
                <?= $data['nama-tersangka'] ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Tempat/ Tanggal lahir </td>
            <td>:
                <?= $data['ttl-tersangka'] ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Umur </td>
            <td>:
                <?= $data['umur-tersangka'] ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Kewarganegaraan </td>
            <td>:
                <?= $data['kwn-tersangka'] ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Agama</td>
            <td>:
                <?= $data['agama-tersangka'] ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Pekerjaan</td>
            <td>:
                <?= $data['pekerjaan-tersangka'] ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Alamat</td>
            <td>:
                <?= $data['alamat-tersangka'] ?>

            </td>
        </tr>
    </table>
    <p>
        <?= $data['keterangan'] ?>
    </p>
    <p>Adapun jalannya pelaksanaan penangkapan adalah sebagai berikut</p>
    <p>
        <?= generate_text_with_line($data['jalan-pelaksanaan'], 100, 'left') ?>
    </p>
    <p>
        <?= generate_text_with_line('Demikianlah Serita Acara Penangkapan ini dibuat dengan sebenarnya atas kekuatan Sumpah Jabatan, kemudian ditutup dan ditandatangani di Tanjung Balai Asahan pada hari, tanggal, buIan dan tahun tersebut diatas', 100, 'left') ?>
    </p>
    <table style="width:100%;text-align:center;font-size:12px">
        <tr>
            <td style="width:50%">Tersangka</td>
            <td>Penyidik Pegawai Negeri Sipil</td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase;">
                <img src="<?= base_url('upload/ttd/') . $data['image']['tersangka'] ?>" alt="" width="100px">

                <?= $data['nama-tersangka'] ?>
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