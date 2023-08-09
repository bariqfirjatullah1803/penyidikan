<table style="width:100%">
    <tr>
        <td><img src="<?php echo base_url('upload/logo.png'); ?>" style="width:80px"></td>
        <td style="text-align:center">
            <h1 style="font-weight:bold;font-size:14px">
                KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA RI<br>
                KANTOR WILAYAH
                <?= $data['general']['wilayah'] ?><br>
                KANTOR
                <?= $data['general']['kantor'] ?>
            </h1>
            <p>
                <?= $data['general']['alamat'] . ' Telp. ' . $data['general']['telp'] ?><br>
                <?= 'Fax. '.$data['general']['fax'] . ' Email. ' . $data['general']['email'] ?> 
            </p>
        </td>
    </tr>
</table>
<hr style="height:3px;color:black;margin-top:4px">