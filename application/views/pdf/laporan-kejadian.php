<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $title ?>
    </title>
    <style>
        table,
        th,
        tr,
        td {
            /* border: 1px solid black; */
            vertical-align: top;
        }
    </style>
</head>

<body>
    <?php $this->load->view('pdf/header-surat'); ?>
    <p style="text-decoration: underline;text-align:center;font-size:12px;margin:0;font-weight:bold">LAPORAN KEJADIAN
    </p>
    <p style="text-align:center;font-size:12px;margin:0">NOMOR:
        <?= $data['laporan-kejadian']['nomor'] ?>
    </p>
    <p style="text-align:left;font-size:12px">PELAPOR:</p>
    <?php
    $pelapor = $data['laporan-kejadian']['pelapor'];
    ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>:
                <?= $pelapor['nama'] ?>
            </td>
        </tr>
        <tr>
            <td>Tempat / Tanggal Lahir</td>
            <td>:
                <?= $pelapor['tempat_lahir'] . ',' . $pelapor['tanggal_lahir'] ?>
            </td>
        </tr>
        <tr>
            <td>NIP/NIK/No Paspor</td>
            <td>:
                <?= $pelapor['nip'] ?>
            </td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>:
                <?= $pelapor['kewarganegaraan'] ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:
                <?= $pelapor['jenis-kelamin'] ?>
            </td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:
                <?= $pelapor['pekerjaan'] ?>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:
                <?= $pelapor['alamat'] ?>
            </td>
        </tr>
    </table>
    <table>
        <?php
        $peristiwa = $data['laporan-kejadian']['peristiwa'];
        ?>
        <tr>
            <td style="padding-top:70px">Peristiwa yang dilaporkan</td>
            <td style="padding-top:70px">:</td>
        </tr>
        <tr>
            <td style="padding-left:40px">1. Waktu Kejadian</td>
            <td>:
                <?= $peristiwa['waktu-kejadian'] ?>
            </td>
        </tr>
        <tr>
            <td style="padding-left:40px">2. Tempat Kejadian</td>
            <td>:
                <?= $peristiwa['tempat-kejadian'] ?>
            </td>
        </tr>
        <tr>
            <td style="padding-left:40px">3. Yang Terjadi</td>
            <td>:
                <?= $peristiwa['yang-terjadi'] ?>
            </td>
        </tr>
        <?php $tersangka = $data['laporan-kejadian']['tersangka']; ?>
        <tr>
            <td style="padding-left:40px">4. Nama</td>
            <td>:
                <?= $tersangka['nama'] ?>
            </td>
        </tr>
        <tr>
            <td style="padding-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;Tempat/ Tanggal lahir</td>
            <td>:
                <?= $tersangka['tempat-lahir'] ?>
            </td>
        </tr>
        <tr>
            <td style="padding-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;Umur</td>
            <td>:
                <?= $tersangka['umur'] . ' Tahun' ?>
            </td>
        </tr>
        <tr>
            <td style="padding-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;No Paspor</td>
            <td>:
                <?= $tersangka['nomor-ktp'] ?>
            </td>
        </tr>
        <tr>
            <td style="padding-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin</td>
            <td>:
                <?= $tersangka['jenis-kelamin'] ?>
            </td>
        </tr>
        <tr>
            <td style="padding-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;Kewarganegaraan</td>
            <td>:
                <?= $tersangka['kewarganegaraan'] ?>
            </td>
        </tr>
        <tr>
            <td style="padding-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;Agama</td>
            <td>:
                <?= $tersangka['agama'] ?>
            </td>
        </tr>
        <tr>
            <td style="padding-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
            <td>:
                <?= $tersangka['pekerjaan'] ?>
            </td>
        </tr>
        <tr>
            <td style="padding-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
            <td>:
                <?= $tersangka['alamat'] ?>
            </td>
        </tr>
        <tr>
            <td style="padding-left:40px">5. Saksi-saksi</td>
            <td>: </td>
        </tr>
        <?php $no = 0;
        $saksi = $data['laporan-kejadian']['saksi'];
        foreach ($data['laporan-kejadian']['saksi']['nama'] as $nama): ?>
            <tr>
                <td style="padding-left:100px">
                    <?= $no + 1; ?>. Nama
                </td>
                <td>:
                    <?= $nama ?>
                </td>
            </tr>
            <tr>
                <td style="padding-left:100px">&nbsp;&nbsp;&nbsp;&nbsp;Tempat/Tgl Lahir</td>
                <td>:
                    <?= $saksi['tempat-lahir'][$no] ?>
                </td>
            </tr>
            <tr>
                <td style="padding-left:100px">&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin</td>
                <td>:
                    <?= $saksi['jenis-kelamin'][$no] ?>
                </td>
            </tr>
            <tr>
                <td style="padding-left:100px">&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
                <td>:
                    <?= $saksi['pekerjaan'][$no] ?>
                </td>
            </tr>
            <tr>
                <td style="padding-left:100px">&nbsp;&nbsp;&nbsp;&nbsp;Kebangsaan</td>
                <td>:
                    <?= $saksi['kebangsaan'][$no] ?>
                </td>
            </tr>
            <tr>
                <td style="padding-left:100px">&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
                <td>:
                    <?= $saksi['alamat'][$no] ?>
                </td>
            </tr>
            <tr>
                <td style="padding-left:100px">&nbsp;&nbsp;&nbsp;&nbsp;Keterangan</td>
                <td>:
                    <?= $saksi['keterangan'][$no] ?>
                </td>
            </tr>
            <?php $no++;
        endforeach ?>
        <tr>
            <td style="padding-left:40px">6. Barang Bukti</td>
            <td>:
                <?= $data['laporan-kejadian']['barang-bukti'] ?>
            </td>
        </tr>
    </table>
    <p style="text-align:left;font-size:12px;margin-top:70px">URAIAN SINGKAT KEJADIAN : (hanya mengisi kejadian saat
        penangkapan)</p>
    <p style="text-align:left;font-size:12px">
        <?= $data['laporan-kejadian']['uraian-singkat-kejadian'] ?>
    </p>
    <p style="text-align:left;font-size:12px;text-decoration:underline;margin-top:70px">Tindakan yang diambil:</p>
    <ol>
        <li>Membuat Laporan Kejadian</li>
        <li>mengamankan barang bukti</li>
        <li>Meminta keterangan saksi-saksi</li>
    </ol>
    <p style="text-align:left;font-size:12px;margin-top:70px">
        <?= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian laporan terjadinya Tindak Pidana Keimigrasian ini dibuat dengan sebenar-benarnya mengingat sumpah jabatan kemudian ditutup dan ditanda tangani pada hari  ' . hari_indonesia() . ', ' . tanggal_indonesia() ?>
    </p>
    <table style="width:100%;">
        <tr>
            <td width="70%">
            </td>
            <td>
                <table style="text-align:center">
                    <tr>
                        <td>
                            <p style="text-align:center;margin-left:300px;font-size:12px;margin-top:70px;">Yang membuat
                                laporan</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?= base_url('upload/ttd/') . $data['laporan-kejadian']['image']['pelapor'] ?>"
                                alt="" width="100px">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="text-align:center;margin-left:300px;font-size:12px;">
                                <?= $pelapor['nama'] ?>
                            </p>
                            <p style="text-align:center;margin-left:300px;font-size:12px">
                                <?= 'NIP.' . $pelapor['nip'] ?>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>