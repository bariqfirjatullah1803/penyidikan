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
    $data = $data['berita-acara-penggeledahan'];
    ?>
    <p
        style="text-transform:uppercase;text-decoration:underline;text-align:center;font-weight:bold;margin:0;font-size:15px">
        BERITA ACARA PENGGELEDAHAN</p>
    <p>Pada
        <?= $data['waktu'] ?>, saya :
    </p>
    <p>
        <?= generate_text_with_line('<b>' . $data['nama-penggeledah'] . '</b>', 196) ?>
    </p>
    <table style="font-size:12px">
        <tr>
            <td colspan="2">
                <?= generate_text_with_line($data['jabatan-penggeledah'] . ' NIP. ' . $data['nip-penggeledah'] . ', pada kantor tersebut di atas selaku Penyidik Pegawai Negeri Sipil Keimigrasian berdasarkan :', 196, 'none') ?>
            </td>
        </tr>
        <tr>
            <td>1. </td>
            <td>
                <?= generate_text_with_line('Laporan Kejadian Nomor : ' . $data['nomor-laporan-kejadian'] . ';', 177, 'none') ?>
            </td>
        </tr>
        <tr>
            <td>2. </td>
            <td>
                <?= generate_text_with_line('Surat Perintah Penggeledahan Nomor : ' . $data['nomor-surat-perintah-penggeledahan'] . ';', 189, 'none') ?>
            </td>
        </tr>
        <tr>
            <td>3. </td>
            <td>
                <?= generate_text_with_line('Surat Kepala Kantor Imigrasi Kelas I TPI Tanjung Priok Nomor : ' . $data['surat-kepala-kantor'] . ' tanggal ' . $data['waktu'] . ', perihal ' . $data['perihal'] . '.', 186, 'none') ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?= generate_text_with_line('telah melakukan penggeledahan terhadap seorang ' . $data['jenis-kelamin-digeledah'] . ' :', 194, 'none') ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:
                            <?= $data['nama-digeledah'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:
                            <?= $data['jenis-kelamin-digeledah'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat / Tanggal Lahir</td>
                        <td>:
                            <?= $data['ttl-digeledah'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:
                            <?= $data['pekerjaan-digeledah'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>:
                            <?= $data['kewarganegaraan-digeledah'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:
                            <?= $data['agama-digeledah'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Tinggal</td>
                        <td>:
                            <?= $data['alamat-digeledah'] ?>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?= generate_text_with_line('dengan disaksikan oleh :', 179, 'none') ?>
            </td>
        </tr>
        <?php $no = 1;
        foreach ($data['petugas-penyaksikan'] as $petugas): ?>
            <tr>
                <td>1. </td>
                <td>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:
                                <?= $petugas['nama'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:
                                <?= $petugas['jabatan'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:
                                <?= $petugas['alamat'] ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <?php $no++;
        endforeach; ?>
    </table>
    <p>
        <?= generate_text_with_line('Yang Orang tersebut diduga melakukan penyelundupan manusia di Wilayah Indonesia sebagaimana dimaksud dalam Pasal ' . $data['pasal'] . '.', 208, 'none') ?>
    </p>
    <p>
        <?= generate_text_with_line('Keadaan kesehatan fisik dan mental tersangka sebelum digeledah dalam keadaan sehat jasmani dan rohani.', 212, 'none') ?>
    </p>
    <p>
        <?= generate_text_with_line('Pemotretan :', 178, 'l-none') ?>
    </p>
    <p>
        <?= generate_text_with_line('Barang-barang milik tersangka yang dititipkan berupa : tidak ada.', 198, 'l-none') ?>
    </p>
    <p>
        <?= generate_text_with_line('Telah diserahkan kepada petugas dan disimpan oleh : tidak ada.', 198, 'none') ?>
    </p>
    <p>
        <?= generate_text_with_line('Demikian Berita Acara Penggeledahan ini dibuat dengan sebenar-benarnya atas kekuatan sumpah jabatan, kemudian ditutup dan ditandatangani di Jakarta pada tanggal bulan dan tahun tersebut di atas.', 106, 'l-none') ?>
    </p>
    <table style="width:100%;text-align:center;font-size:12px">
        <tr>
            <td style="width:50%">Tersangka</td>
            <td>Yang Melakukan Penggeledahan,<br>
                PENYIDIK PEGAWAI NEGERI SIPIL
            </td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase;">
                <img src="<?= base_url('upload/ttd/') . $data['image']['tersangka'] ?>" alt="" width="100px">

                <?= $data['nama-digeledah'] ?>
            </td>
            <td style="font-weight:bold;text-transform:uppercase;">
                <img src="<?= base_url('upload/ttd/') . $data['image']['penyidik'] ?>" alt="" width="100px">

                <?= $data['nama-penggeledah'] ?>
            </td>
        </tr>
    </table>
</body>

</html>