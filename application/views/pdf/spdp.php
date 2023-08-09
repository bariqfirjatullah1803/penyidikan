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
    $data = $data['surat-pemberitahuan-penyidikan'];
    ?>
    <p style="font-size:14px;">“PRO JUSTITIA”</p>
    <table style="width:100%;vertical-align:top">
        <tr>
            <td width="15%">Nomor</td>
            <td>:
                <?= $data['nomor'] ?>
            </td>
            <td style="text-align:right" rowspan="3">
                <?= $data['tempat'] . ', ' . $data['waktu'] ?>
            </td>
        </tr>
        <tr>
            <td>Sifat</td>
            <td>: Biasa</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (Berkas)</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td colspan="2">:
                <?= $data['perihal'] ?>
            </td>
        </tr>
    </table>
    <br>
    <p style="font-size:14px">
        Yth.<br>
        Kepala Kejaksaan Negeri Jakarta Barat<br>
        Di - Jakarta Barat
    </p>
    <table style="width:100%;vertical-align:top">
        <tr>
            <td>1.</td>
            <td>
                Dasar Penyidikan :
                <?= $data['dasar'] ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-left:40px">
                <?= $data['pemberitahuan'] ?>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:
                            <?= $data['nama'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat / Tanggal Lahir</td>
                        <td>:
                            <?= $data['tempat-tanggal-lahir'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>:
                            <?= $data['kewarganegaraan'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:
                            <?= $data['alamat'] ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Berikut dilampirkan surat-surat administrasi penyidikan : </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <table>
                    <tr>
                        <td>a.</td>
                        <td>Laporan Kejadian ;</td>
                    </tr>
                    <tr>
                        <td>b.</td>
                        <td>Surat Perintah Tugas ;</td>
                    </tr>
                    <tr>
                        <td>c.</td>
                        <td>Surat Perintah Penyidikan ;</td>
                    </tr>
                </table>
                Demikian untuk menjadi maklum.
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-top:20px">
                <table style="text-align:center">
                    <tr>
                        <td>Kepala Kantor</td>
                    </tr>
                    <tr>
                        <td><img src="<?= base_url('upload/ttd/') . $data['image']['kepala-kantor'] ?>"
                                alt="" width="100px"></td>
                    </tr>
                    <tr>
                        <td>
                            <?= $data['kepala-kantor']['nama'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>NIP.
                            <?= $data['kepala-kantor']['nip'] ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-top:10px">
                <b>Tembusan :</b><br>
                1. Direktur Jenderal Imigrasi Up. Direktur Pengawasan dan Penindakan Keimigrasian; <br>
                2. Kepala Kantor Wilayah; <br>
                3. Arsip. <br>
            </td>
        </tr>
    </table>
</body>

</html>