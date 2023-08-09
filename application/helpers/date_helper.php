<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('tanggal_indonesia')) {
    /**
     * Mengubah format tanggal menjadi format Indonesia (dd MMMM yyyy)
     * @param string $tanggal Tanggal dalam format Y-m-d (opsional, default: waktu sekarang)
     * @return string Tanggal dalam format dd MMMM yyyy
     */
    function tanggal_indonesia($tanggal = null)
    {
        if (!$tanggal) {
            $tanggal = date('Y-m-d');
        } else {
            $tanggal = date('Y-m-d', strtotime($tanggal));
        }

        $bulan = array(
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $tanggal_array = explode('-', $tanggal);
        $tanggal_indonesia = $tanggal_array[2] . ' ' . $bulan[(int) $tanggal_array[1] - 1] . ' ' . $tanggal_array[0];
        return $tanggal_indonesia;
    }
}

if (!function_exists('hari_indonesia')) {
    /**
     * Mengubah nama hari menjadi nama hari dalam bahasa Indonesia
     * @param string $hari Nama hari dalam bahasa Inggris (format l) (opsional, default: waktu sekarang)
     * @return string Nama hari dalam bahasa Indonesia
     */
    function hari_indonesia($hari = null)
    {
        if (!$hari) {
            $hari = date('l');
        }else{
            $hari = date('l', strtotime($hari));
        }

        $nama_hari = array(
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        );

        return $nama_hari[$hari];
    }
}

if (!function_exists('waktu_indonesia')) {
    /**
     * Mendapatkan waktu dalam format H:i WIB
     * @param string $waktu Waktu dalam format H:i:s (opsional, default: waktu sekarang)
     * @return string Waktu dalam format H:i WIB
     */
    function waktu_indonesia($waktu = null)
    {
        if (!$waktu) {
            $waktu = date('H:i:s');
        }

        date_default_timezone_set('Asia/Jakarta');
        return date('H:i', strtotime($waktu)) . ' WIB';
    }
}

?>