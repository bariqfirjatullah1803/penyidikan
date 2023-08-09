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
    $this->load->view('pdf/header-surat');
    $data = $data['berita-acara-pemeriksaan-ahli'];
    ?>
    <?php $no = 1;
    foreach ($data['pertanyaan'] as $pertanyaan): ?>
        <p style="font-size:12px">
            <?= $no ?>.
            <?= $pertanyaan ?><br>
            <?= generate_text_with_line(
                '-----',
                570
            ) ?>
        </p>
        <?php $no++; endforeach ?>
    <p style="font-size:12px">……………Setelah Berita Acara Pemeriksaan ini selesai dibuat, kemudian dibacakan kembali
        kepada yang diperiksa dan yang diperiksa tetap pada keterangannya semula dan menyatakan setuju serta membenarkan
        semua keterangan yang diberikan diatas, untuk menguatkannya yang diperiksa membubuhkan tanda tangannya di bawah
        ini.-……………</p>

    <table style="width:100%;text-align:center;font-size:12px">
        <tr>
            <td rowspan="2" width="50%"></td>
            <td>Yang diperiksa,</td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase;padding-top:60px">
                <?= $data['nama-ahli'] ?>
            </td>
        </tr>
    </table>
    <p style="font-size:12px;text-align: justify;">…………….Demikian Berita Acara Pemeriksaan ini dibuat dengan
        sebenar-benamya atas kekuatan sumpah jabatan, kemudian
        ditutup dan ditanda tangani di Tanjung Balai pada hari, tanggal, bulan dan tahun tersebut diatas
        -…………………………………………………
    </p>
    <table style="width:100%;text-align:center;font-size:12px">
        <tr>
            <td rowspan="2" width="50%"></td>
            <td style="font-weight: bold;">PEMERIKSA,<br>
                PENYIDIK PEGAWAI NEGERI SIPIL
            </td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase;padding-top:60px"><span
                    style="text-decoration:underline"><?= $data['nama-pemeriksa'] ?></span><br>
            </td>
        </tr>
    </table>
</body>

</html>