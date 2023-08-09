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
    <?php $this->load->view('pdf/header-surat');
    $data = $data['surat-perintah-penyidikan']; ?>
    <p style="text-decoration: underline;text-align:center;font-size:12px;font-weight:bold">SURAT PERINTAH PENYIDIKAN
    </p>
    <p style="text-align:center;font-size:12px">NOMOR:
        <?= $data['nomor'] ?>
    </p>
    <table style="vertical-align: top;font-size:12px">
        <tr>
            <td style="font-weight:bold">Menimbang</td>
            <td>:
                <?= $data['menimbang'] ?>
            </td>
        </tr>
        <tr>
            <td style="font-weight:bold">Dasar</td>
            <td>:
                <?= $data['dasar'] ?>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;font-weight:bold" colspan="2">DIPERINTAHKAN</td>
        </tr>
        <tr>
            <td style="font-weight:bold">Kepada</td>
            <td>
                <?php $no = 0;
                foreach ($data['penyidik'] as $penyidik): ?>
                    <table>
                        <tr>
                            <td width="10%">
                                <?= $no + 1 ?>.
                            </td>
                            <td width="40%">Nama</td>
                            <td>:
                                <?= $penyidik['nama'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%"></td>
                            <td width="40%">NIP</td>
                            <td>:
                                <?= $penyidik['pangkat-nip'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%"></td>
                            <td width="40%">Jabatan</td>
                            <td>:
                                <?= $penyidik['jabatan'] ?>
                            </td>
                        </tr>
                    </table>
                    <?php $no++;
                endforeach ?>
            </td>
        </tr>
        <tr>
            <td width="20%" style="font-weight:bold">Untuk</td>
            <td>
                <?= $data['untuk'] ?>
            </td>
        </tr>
    </table>
    <p style="text-align:center;margin-left:350px;font-size:12px;margin-top:20px;">
        <?= $data['tempat'] . ',' . $data['tanggal'] ?>
    </p>
    <p style="text-align:center;margin-left:350px;font-size:12px;">KEPALA KANTOR</p>
    <p style="text-align:center;margin-left:350px;font-size:12px;">
        <img src="<?= base_url('upload/ttd/') . $data['image']['kepala-kantor'] ?>" alt="" width="100px">
        <?= $data['kepala-kantor']['nama'] ?>
    </p>
    <p style="font-weight:bold;font-size:12px">Tembusan:</p>
    <p style="font-size:12px">1. Direktur Pengawasan dan Penindakan Keimigrasian Up Kadiv Imigrasi. <br>
        2. Kanwil Kementerian Hukum dan HAM DKI Jakarta Up. Kepala Divisi Keimigrasian.</p>
</body>

</html>