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
<style>
    .daftar,
    .daftar tr,
    .daftar td,
    .daftar th {
        font-size: 14px;
        text-transform: uppercase;
        border-collapse: collapse;
        border: 1px solid black;
        padding: 5px
    }
</style>

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
    <p style="font-style:italic;text-decoration:underline;font-weight:bold;font-size:12px">“PRO
        JUSTITIA”</p>
    <p style="text-align:center;font-size:16px">Daftar Saksi</p>
    <table class="daftar" width="100%">
        <tr style="text-align:center;">
            <th>No</th>
            <th>Nama</th>
            <th>Kebangsaan</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Agama</th>
            <th>Keterangan</th>
        </tr>
        <?php $no = 1;
        foreach ($data['daftar-saksi']['saksi'] as $saksi): ?>
            <tr>
                <td>
                    <?= $no ?>
                </td>
                <td><?= $saksi['nama']?></td>
                <td><?= $saksi['kebangsaan']?></td>
                <td><?= $saksi['alamat']?></td>
                <td><?= $saksi['pekerjaan']?></td>
                <td><?= $saksi['agama']?></td>
                <td><?= $saksi['keterangan']?></td>
            </tr>
            <?php $no++;
        endforeach ?>
    </table>
    <table width="100%" style="margin-top:100px">
        <tr>
            <td width="50%"></td>
            <td>
                <table width="100%" style="text-align:center">
                    <tr>
                        <td>Jakarta Utara, 7 Maretl 2023<br>
                            Penyidik Pegawai Negeri Sipil</td>
                    </tr>
                    <tr>
                        <td style="padding-top:80px">
                            Kiki Ananda Mustari,A.md.Im.,S.H.,M.Si.<br>
                            NIP. 20202066202
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>