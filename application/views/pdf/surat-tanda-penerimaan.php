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
                <p style="font-size:14px">Jl. . Melati, No. 124, Jakarta Utara Telp. (021)-43934909,Fax. (021)-4352253
                    email:
                    kanimpriuk.dki@gmail.com</p>
            </td>
        </tr>
    </table>
    <hr style="height:3px;color:black;margin-top:4px">
    <p
        style="text-transform:uppercase;text-decoration:underline;text-align:center;font-weight:bold;margin:0;font-size:15px">
        surat tanda penerimaan </p>
    <p style="font-size:14px">
        <?= generate_text_with_line('Yang bertanda tangan dibawah ini. Nama : KIKI ANANDA MUSTARI, A.Md.Im., SH Pangkat Penata Tk.l (11I/b), NIP.20202066203, Selaku Penyidik Pegawai Negeri Sipil lmigrasi, menerima penyerahan barang-barang atau surat atau tulisan lain dri pemilik yang menguasai :', 190, 'none') ?>
    </p>
    <table>
        <tr>
            <td width="5%"></td>
            <td>Nama</td>
            <td width="5%">:</td>
            <td>
                <?= $data['surat-acara-penyitaan']['nama-disita'] ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Tempat/ Tanggal lahir</td>
            <td width="5%">:</td>
            <td>
                <?= $data['surat-acara-penyitaan']['ttl-disita'] ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Umur</td>
            <td width="5%">:</td>
            <td>
                <?= $data['surat-acara-penyitaan']['umur-disita'] ?> Tahun
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Nomor KTP/ NIK</td>
            <td width="5%">:</td>
            <td>
                <?= $data['surat-acara-penyitaan']['ktp-disita'] ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Kewarganegaraan</td>
            <td width="5%">:</td>
            <td>
                <?= $data['surat-acara-penyitaan']['kewarganegaraan-disita'] ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Agama</td>
            <td width="5%">:</td>
            <td>
                <?= $data['surat-acara-penyitaan']['agama-disita'] ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Pekerjaan</td>
            <td width="5%">:</td>
            <td>
                <?= $data['surat-acara-penyitaan']['pekerjaan-disita'] ?>
            </td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td>Alamat</td>
            <td width="5%"></td>
            <td>
                <?= $data['surat-acara-penyitaan']['alamat-disita'] ?>
            </td>
        </tr>
    </table>
    <p style="font-size:14px">
        <?= generate_text_with_line('Dengan disaksikan oleh : ', 180, 'none') ?>
    </p>
    <table width="100%">
        <?php $no = 1;
        foreach ($data['surat-acara-penyitaan']['petugas'] as $petugas): ?>
            <tr>
                <td width="5%">1.</td>
                <td>Nama</td>
                <td width="5%">:</td>
                <td>
                    <?= $petugas['nama-petugas'] ?>
                </td>
            </tr>
            <tr>
                <td width="5%"></td>
                <td>NIP</td>
                <td width="5%">:</td>
                <td>
                    <?= $petugas['nip-petugas'] ?>
                </td>
            </tr>
            <tr>
                <td width="5%"></td>
                <td>Jabatan</td>
                <td width="5%">:</td>
                <td>
                    <?= $petugas['jabatan-petugas'] ?>
                </td>
            </tr>
            <?php $no++;
        endforeach ?>
    </table>
    <p style="font-size:14px">Benda-benda atau barang atau surat atau tulisan lain sebagai bukti dalam perkara tersangka
        M.DHAFIN , yang diduga
        teiah melakukan tindak pidana dibidang Keimigrasian, sebagaimana dimaksud dalam Pasal 120 ayat (1) sub Pasal 120
        ayat (2) Undang-Undang Nomor 6 Tahun 2011 Tentang Keimigrasian
    </p>
    <p style="font-size:14px">Benda-benda atau barang-barang atau surat atau tulisan lain tersebut adalah sebagai
        berikut.</p>
    <ol type="a">
        <li>1 (satu) unit Handphone merek samsung;</li>
        <li>1 (satu) unit Buku rekening BCA;</li>
    </ol>
    <table width="100%" style="font-weight:bold;margin-top:100px">
        <tr>
            <td width="50%">
                <table width="100%">
                    <tr>
                        <td style="text-align:center">Tersangka</td>
                    </tr>
                    <tr>
                        <td style="padding-top:80px;text-align:center">
                            <?= $data['surat-acara-penyitaan']['nama-disita'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>tanda tangan saksi:</td>
                    </tr>
                    <tr>
                        <td>
                            <ol>
                                <?php foreach ($data['surat-acara-penyitaan']['petugas'] as $petugas): ?>
                                    <li>
                                        <?= $petugas['nama-petugas'] ?>
                                    </li>
                                <?php endforeach ?>
                            </ol>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table width="100%">
                    <tr>
                        <td>Tanjung Priok, 7 Maret 2023</td>
                    </tr>
                    <tr>
                        <td>Yang Menerima,</td>
                    </tr>
                    <tr>
                        <td>PENYIDIK PEGAWAI NEGERI SIPIL</td>
                    </tr>
                    <tr>
                        <td>
                            <table style="width:100%">
                                <tr>
                                    <td>Nama</td>
                                    <td width="5%">:</td>
                                    <td>Kiki Ananda Mustari ,Amd.,IM.,SH</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td width="5%">:</td>
                                    <td>20202066203</td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td width="5%">:</td>
                                    <td>Kasubsi Penindakan Keimigrasian</td>
                                </tr>
                                <tr>
                                    <td>Pangkat</td>
                                    <td width="5%">:</td>
                                    <td>Penata TK.I (II/b)</td>
                                </tr>
                                <tr>
                                    <td>Td. Tangan</td>
                                    <td width="5%">:</td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <p style="font-size:14px;padding-top:150px">
        <?= generate_text_with_line('Demikianlah Serita Acara Penangkapan ini dibuat dengan sebenarnya atas kekuatan Sumpah Jabatan, kemudian ditutup dan ditandatangani di Tanjung Priok pada hari selasa, tanggal tujuh, buIan Maret dan tahun 2023 tersebut diatas', 100, 'left') ?>
    </p>
    <table style="width:100%;text-align:center;font-size:16px">
        <tr>
            <td style="width:50%">Tersangka</td>
            <td>Penyidik Pegawai Negeri Sipil</td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-transform:uppercase;padding-top:80px">
                <?= $data['surat-acara-penyitaan']['nama-disita'] ?>
            </td>
            <td style="font-weight:bold;text-transform:uppercase;padding-top:80px">KIKI ANANDA MUSTARI, A.md.Im.,SH
                <br>
                NIP. 20202066203
            </td>
        </tr>
    </table>
</body>

</html>