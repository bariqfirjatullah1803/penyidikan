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
    $data = $data['surat-perintah-penangkapan'];
    ?>
    <p style="font-style:italic;text-decoration:underline;font-weight:bold;font-size:12px">“PRO
        JUSTITIA”</p>
    <p
        style="text-transform:uppercase;text-decoration:underline;text-align:center;font-weight:bold;margin:0;font-size:15px">
        SURAT PERINTAH PENANGKAPAN</p>
    <p style="text-transform:uppercase;font-weight:bold;font-size:12px;text-align:center;margin:0">Nomor:
        <?= $data['nomor'] ?>
    </p>
    <table style="vertical-align: top; font-size:12px;">
        <tr>
            <td>Pertimbangan</td>
            <td>:
                <?= $data['pertimbangan'] ?>
            </td>
        </tr>
        <tr>
            <td>Dasar</td>
            <td>
                <?= $data['dasar'] ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-weight:bold;text-decoration:underline;text-align:center">MEMERINTAHKAN</td>
        </tr>
        <tr>
            <td>Kepada</td>
            <td>
                <table style="width:100%">
                    <?php $no = 0;
                    foreach ($data['nama-petugas'] as $namaPetugas): ?>
                        <tr>
                            <td>
                                <?= $no + 1 ?>
                            </td>
                            <td>Nama</td>
                            <td>:
                                <?= $namaPetugas ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>NIP</td>
                            <td>:
                                <?= $data['nip-petugas'][$no] ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Jabatan</td>
                            <td>:
                                <?= $data['jabatan-petugas'][$no] ?>
                            </td>
                        </tr>
                        <?php $no++;
                    endforeach; ?>
                </table>
            </td>
        </tr>
        <tr>
            <td>Untuk</td>
            <td>
                <?= $data['untuk'] ?>
            </td>
        </tr>
    </table>
    <table style="width:100%;text-align:center;font-size:12px">
        <tr>
            <td rowspan="2" width="50%"></td>
            <td>
                <table style="width:100%">
                    <tr>
                        <td>Dikeluarkan di</td>
                        <td>:
                            <?= $data['tempat'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pada tanggal</td>
                        <td>:
                            <?= $data['tanggal'] ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table style="width:100%;text-align:center;font-size:12px">
        <tr>
            <td>Yang Menerima Perintah</td>
            <td>Kepala Kantor</td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase;">
                <img src="<?= base_url('upload/ttd/') . $data['image']['diperintah'] ?>" alt="" width="100px">

                <?= $data['nama-penerima-perintah'] ?><br>
                NIP.
                <?= $data['nip-penerima-perintah'] ?>
            </td>
            <td style="font-weight:bold;text-transform:uppercase;">
                <img src="<?= base_url('upload/ttd/') . $data['image']['kepala-kantor'] ?>" alt="" width="100px">

                <?= $data['nama-kepala-kantor'] ?><br>
                NIP.
                <?= $data['nip-kepala-kantor'] ?>
            </td>
        </tr>
    </table>
    <table style="font-size:12px">
        <tr>
            <td colspan="2" style="font-weight:bold">Tembusan :</td>
        </tr>
        <tr>
            <td>1. </td>
            <td>Direktur Jenderal lmigrasi;
            </td>
        </tr>
        <tr>
            <td>2. </td>
            <td>Direktur Pengawasan dan Penindakan Keimigraslan:
            </td>
        </tr>
        <tr>
            <td>3. </td>
            <td>Direktur lntelljen Keimigraslan:

            </td>
        </tr>
        <tr>
            <td>4. </td>
            <td>Kepala Kantor Wilayah Hukum dan HAM DKI Jakarta
                <br>Up. Kepala Divisi Kelmigrasian.
            </td>
        </tr>
    </table>
</body>

</html>