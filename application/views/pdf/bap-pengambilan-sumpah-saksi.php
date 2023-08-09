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
    <table style="width:100%">
        <tr>
            <td><img src="<?php echo base_url('upload/logo.png'); ?>" style="width:80px"></td>
            <td style="text-align:center">
                <h1 style="font-weight:bold;font-size:14px">
                    KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA RI<br>
                    KANTOR WILAYAH DKI JAKARTA<br>
                    KANTOR IMIGRASI KELAS I TPI TANJUNG PRIOK
                </h1>
                <p>Jl. . Melati, No. 124, Jakarta Utara Telp. (021)-43934909,Fax. (021)-4352253 email:
                    kanimpriuk.dki@gmail.com</p>
            </td>
        </tr>
    </table>
    <hr style="height:3px;color:black;margin-top:4px">
    <p style="font-style:italic;text-decoration:underline;font-weight:bold;font-size:12px">“PRO
        JUSTITIA”</p>
    <p
        style="text-transform:uppercase;text-decoration:underline;text-align:center;font-weight:bold;margin:0;font-size:12px">
        BERITA ACARA PEMERIKSAAN (SAKSI)</p>
    <p style="font-size:12px">
        <?= generate_text_with_line('Pada hari ini Kamis tanggal 9 bulan Maret Tahun 2023 Dua Tiga Pada hari ini Kamis
        tanggal 9 bulan Maret Tahun 2023 Dua Tiga, Pukul 08.30 WIB, Saya :', 208, 'left') ?><br>
        <?= generate_text_with_line('<b>' . $data['berita-acara-pemeriksaan-saksi']['nama-pemeriksa'] . '</b>', 196) ?><br>
        Pangkat Penata Tk.l (11I/b), NIP.20202066203, Selaku Penyidik Pegawai Negeri Sipil lmigrasi berdasarkan Surat
        Keputusan Nomor: AHU-123.AH.09.02, Tahun 2019. Berdasarkan Surat Perintah Penyidikan Nomor :
        SPRIN.DIK/01/11/KANIMTBA/2020, telah melakukan pemeriksaan terhadap (satu) Orang Perempuan berkebangsaan
        Indonesia yang belum saya kenal untuk didengar keterangannya dan pada saat diperiksa mengaku bemama (sesuai
        KTP):<br>
        <?= generate_text_with_line('<b>' . $data['berita-acara-pemeriksaan-saksi']['nama-saksi'] . '</b>', 196) ?><br>
        Tempat / tanggal lahir
        <?= $data['berita-acara-pemeriksaan-saksi']['tempat-tanggal-lahir-saksi'] ?>, Agama Islam, Pekerjaan di
        Indonesia
        pegawai keimigrasian,
        Alamat tinggal : Jl.sunter agung utara blok A.16A. No.14.<br>
        <?= generate_text_with_line('yang bersangkutan diperiksa dan didengar keterangannya selaku SAKSI sehubungan
        dengan Tindak Pldana Keimigrasian yang diduga dilakukan oleh M DHAFIN dengan membawa 30 (Tiga Puluh) orang Warga
        Negara Asing yang terdiri dari 20 (dua puluh) Laki-laki dan 10 (sepuluh) orang Perempuan dengan menggunakan
        kapal tanpa nama dan bermesin Mitsubishi PS 100 untuk meiintas keluar negeri tanpa melewati Tempat Pemeriksaan
        lmigrasi (TPI), kepadanya diduga telah melanggar pasal 120 ayat 1 (satu) Subs Pasal 120 ayat (2)ndang-undang
        Nomor 6 tahun 2011 tentang Keimigrasian dan sehubungan dengan Laporan Kejadian Nomor : LK/02/li/KANIMTBA/2020.',
            312,
            'left'
        ) ?>
    <table style="width:100%;text-align:center;">
        <tr>
            <td style="text-decoration:underline">Pertanyaan :</td>
            <td style="text-decoration:underline">Jawaban :</td>
        </tr>
    </table>
    <?php $no = 1;
    foreach ($data['berita-acara-pemeriksaan-saksi']['pertanyaan'] as $pertanyaan): ?>
        <p>
            <?= $no ?>.
            <?= $pertanyaan ?><br>
            <?= generate_text_with_line(
                '-----',
                570
            ) ?>
        </p>
        <?php $no++; endforeach ?>
    <table style="width:100%;text-align:center;font-size:12px">
        <tr>
            <td rowspan="2" width="50%"></td>
            <td>Yang diperiksa,</td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase;padding-top:60px">
                <?= $data['berita-acara-pemeriksaan-saksi']['nama-saksi'] ?>
            </td>
        </tr>
    </table>
    <?= generate_text_with_line('Demikian Serita Acara Pemeriksaan ini dibuat dengan sebenar-benamya atas kekuatan
    sumpah jabatan, kemudian dit tup dan ditanda tangani di Tanjung Balai pada hari, tanggal, bulan dan tahun tersebut
    diatas.', 166, 'left') ?>
    <table style="width:100%;text-align:left;font-weight:bold;font-size:12px">
        <tr>
            <td rowspan="2" width="50%"></td>
            <td>PEMERIKSA,<br>PENYIDIK PEGAWAI NEGERI SIPIL</td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase;padding-top:60px">jonardi fernando pasaribu,
                A.Md.Im.,SH<br>
                NIP.198607132005011001</td>
        </tr>
    </table>
    </p>
</body>

</html>