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
    $data = $data['surat-pemanggilan-saksi'];
    ?>
    <p style="font-style:italic;text-decoration:underline;font-weight:bold;font-size:12px">“PRO JUSTITIA”</p>
    <p
        style="text-transform:uppercase;text-decoration:underline;text-align:center;font-weight:bold;margin:0;font-size:12px">
        Surat Panggilan Saksi</p>
    <p style="text-transform:capitalize;text-align:center;font-weight:bold;margin:0">nomor <span
            style="text-transform:uppercase;font-size:12px"><?= $data['nomor'] ?></span></p>
    <table style="vertical-align:top;font-size:12px">
        <tr>
            <td style="text-transform:uppercase;font-weight:bold">pertimbangan</td>
            <td>:
                <?= $data['pertimbangan'] ?>
            </td>
        </tr>
        <tr>
            <td style="text-transform:uppercase;font-weight:bold">dasar</td>
            <td>
                <?= $data['dasar'] ?>
            </td>
        </tr>
        <tr>
            <td style="text-transform:uppercase;font-weight:bold;text-align:center" colspan="2">MEMANGGIL :</td>
        </tr>
        <tr>
            <td style="text-align:center" colspan="2">
                <table style="vertical-align:top">
                    <tr>
                        <td style="text-transform:uppercase;font-weight:bold;text-align:left">nama</td>
                        <td style="text-transform:uppercase;font-weight:bold;text-align:left">:
                            <?= $data['nama'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-transform:uppercase;font-weight:bold;text-align:left">jenis kelamin</td>
                        <td style="text-transform:capitalize;text-align:left">:
                            <?= $data['jenis-kelamin'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-transform:uppercase;font-weight:bold;text-align:left">tempat/tanggal lahir</td>
                        <td style="text-transform:capitalize;text-align:left">:
                            <?= $data['tempat-tanggal-lahir'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-transform:uppercase;font-weight:bold;text-align:left">pekerjaan</td>
                        <td style="text-transform:capitalize;text-align:left">:
                            <?= $data['pekerjaan'] ?>
                            Priok
                        </td>
                    </tr>
                    <tr>
                        <td style="text-transform:uppercase;font-weight:bold;text-align:left">alamat</td>
                        <td style="text-transform:capitalize;text-align:left">:
                            <?= $data['alamat'] ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="text-transform:uppercase;font-weight:bold">untuk</td>
            <td>
                :
                <?= $data['untuk'] ?>
                <table style="vertical-align:top">
                    <?php
                    $waktu = explode(',', $data['hari-tanggal-pukul']);
                    ?>
                    <tr>
                        <td width="50%">Hari</td>
                        <td>:
                            <?= $waktu[0] ?? '' ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">Tanggal</td>
                        <td>:
                            <?= $waktu[1] ?? '' ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">Pukul</td>
                        <td>:
                            <?= $waktu[2] ?? '' ?>
                        </td>
                    </tr>
                </table>
                <p>&emsp;
                    <?= $data['keterangan'] ?>
                </p>
            </td>
        </tr>
    </table>
    <table style="vertical-align:top;width:100%;font-size:12px">
        <tr>
            <td style="font-weight:bold">Mengetahui : </td>
            <td style="text-align:center">
                <?= $data['tempat'] . ',' . $data['tanggal'] ?>
            </td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-align:center">Atasan Penyidik Pagawai Negeri Sipil</td>
            <td style="font-weight:bold;text-align:center">Penyidik Pegawai Negeri Sipil</td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-align:center;text-transform:uppercase;">
                <?= $data['nama-atasan'] ?>
            </td>
            <td style="font-weight:bold;text-align:center;text-transform:uppercase;">
                <?= $data['nama-penyidik'] ?>
            </td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-align:center;text-transform:uppercase">NIP :
                <?= $data['nip-atasan'] ?>
            </td>
            <td style="font-weight:bold;text-align:center;text-transform:uppercase">NIP :
                <?= $data['nip-penyidik'] ?>
            </td>
        </tr>
    </table>
    <hr style="height:3px;color:black">
    <table style="vertical-align:top;width:100%;font-size:12px">
        <tr>
            <td colspan="2">Pada
                <?= $data['tempat'] . ',' . $data['tanggal'] ?>, 1 (satu) lembar surat panggilan ini
                telah diterima oleh yang bersangkutan.
            </td>
        </tr>
        <tr>
            <td style="text-align:center">Atasan Penyidik Pagawai Negeri Sipil</td>
            <td style="text-align:center">Penyidik Pegawai Negeri Sipil</td>
        </tr>
        <tr>
            <td style="text-align:center;text-transform:uppercase;"> <img
                    src="<?= base_url('upload/ttd/') . $data['image']['atasan'] ?>" alt="" width="100px">
            </td>
            <td style="text-align:center;text-transform:uppercase;"> <img
                    src="<?= base_url('upload/ttd/') . $data['image']['penyidik'] ?>" alt="" width="100px">
            </td>
        </tr>
    </table>
    <hr style="height:3px;color:black">
    <p style="font-size:12px;text-align:center">Barang siapa dipanggil sebagai saksi, ahli atau juru bahasa menurut
        undang-undang dengan sengaja tidak memenuhi kewajiban berdasarkan undang – undang yang harus dipenuhinya,
        diancam dengan pidana penjara paling lama Sembilan bulan (pasal 224 KUHPidana)</p>
</body>

</html>