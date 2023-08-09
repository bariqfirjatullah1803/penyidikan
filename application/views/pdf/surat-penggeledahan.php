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
    $data = $data['surat-perintah-penggeledahan'];
    ?>
    <p style="font-style:italic;text-decoration:underline;font-weight:bold;font-size:12px;margin:0">“PRO JUSTITIA”</p>
    <p style="text-decoration: underline;text-align:center;font-size:15px;margin:0;font-weight:bold">SURAT PERINTAH
        PENGGELEDAHAN
    </p>
    <p style="text-align:center;font-size:14px;margin:0">NOMOR:
        <?= $data['nomor'] ?>
    </p>
    <table>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase">pertimbangan</td>
            <td width="3%">:</td>
            <td>
                <?= $data['pertimbangan'] ?>
            </td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase">dasar</td>
            <td width="3%">:</td>
            <td>:
                <?= $data['dasar'] ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td style="font-weight:bold">Diperintahkan</td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase">kepada</td>
            <td width="3%">:</td>
            <td>
                <table>
                    <?php $no = 1;
                    foreach ($data['petugas'] as $petugas): ?>
                        <tr>
                            <td width="5%">
                                <?= $no ?>
                            </td>
                            <td>Nama</td>
                            <td width="2%">:</td>
                            <td>
                                <?= $petugas['nama-diperintah'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pangkat</td>
                            <td width="2%">:</td>
                            <td>
                                <?= $petugas['pangkat-golongan'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Jabatan</td>
                            <td width="2%">:</td>
                            <td>
                                <?= $petugas['jabatan'] ?>
                            </td>
                        </tr>
                        <?php $no++;
                    endforeach ?>
                </table>
            </td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase">untuk</td>
            <td width="3%">:</td>
            <td>
                <?= $data['untuk'] ?>
            </td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase">selesai</td>
            <td width="3%">:</td>
            <td>--</td>
        </tr>
    </table>
    <table style="width:100%;text-align:center;font-size:12px">
        <tr>
            <td colspan="2" style="text-align:right">Dikeluarkan di :
                <?= $data['tempat'] ?><br>Pada tanggal :
                <?= $data['waktu'] ?>
            </td>
        </tr>
        <tr>
            <td style="width:50%">Tanda tangan<br>
                Yang menerima perintah
            </td>
            <td>An. Kepala Kantor Imigrasi
            </td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase;">
                <img src="<?= base_url('upload/ttd/') . $data['image']['diperintah'] ?>" alt="" width="100px">
                <?= $data['nama-yang-diperintah'] ?>
                <br>NIP.
                <?= $data['nip-yang-diperintah'] ?>
            </td>
            <td style="font-weight:bold;text-transform:uppercase;">
                <img src="<?= base_url('upload/ttd/') . $data['image']['kepala-kantor'] ?>" alt="" width="100px">

                <?= $data['nama-kepala-kantor'] ?>
                <br>NIP.
                <?= $data['nip-kepala-kantor'] ?>
            </td>
        </tr>
    </table>
</body>

</html>