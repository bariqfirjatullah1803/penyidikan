<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('generate_text_with_line')) {
    function generate_text_with_line($text, $widthMax, $align = null)
    {
        // $CI =& get_instance();
        // $CI->load->library('mpdf');
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => ['210', '330']]);
        $mpdf->SetDefaultFont('Arial');
        $panjangBaris = $mpdf->GetStringWidth($text);
        $baris = ceil($panjangBaris / $widthMax);
        $sisaPanjangBaris = ($widthMax * $baris) - $panjangBaris;
        $sisaPanjangBarisSetengah = floor($sisaPanjangBaris / 2);

        $garisSebelum = str_repeat("-", $sisaPanjangBarisSetengah);
        $garisSesudah = str_repeat("-", $sisaPanjangBarisSetengah);
        if ($align == 'none') {
            $garisSebelum = "";
            $garisSesudah = str_repeat("-", $sisaPanjangBaris);
        }
        if ($align == 'l-none') {
            $garisSebelum = str_repeat("-", 10);
            $garisSesudah = str_repeat("-", $sisaPanjangBaris - 10);
        }
        if ($align == 'left') {
            $garisSebelah = $sisaPanjangBarisSetengah / 2;
            $garisSebelum = str_repeat("-", $garisSebelah);
            $garisSesudah = str_repeat("-", $sisaPanjangBarisSetengah + $garisSebelah);
        }
        if ($align == 'right') {
            $garisSebelah = $sisaPanjangBarisSetengah / 2;
            $garisAkhir = ($widthMax - ($panjangBaris + $garisSebelah - $widthMax) + $garisSebelah) / $baris;
            $garisSebelum = str_repeat("-", $garisAkhir);
            $garisSesudah = str_repeat("-", $garisSebelah);
        }

        // if($panjangBaris >= $widthMax){
        //     $garisSesudah = str_repeat("-", $sisaPanjangBarisSetengah+($widthMax-$sisaPanjangBaris));
        // }

        $output = "$garisSebelum$text$garisSesudah";

        return $output;
    }
}