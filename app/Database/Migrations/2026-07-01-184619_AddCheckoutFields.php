<?php

if (!function_exists('hitung_ppn')) {
    function hitung_ppn($total_harga)
    {
        return round($total_harga * 0.11);
    }
}

if (!function_exists('hitung_biaya_admin')) {
    function hitung_biaya_admin($total_harga)
    {
        if ($total_harga <= 20000000) {
            return round($total_harga * 0.006);
        } elseif ($total_harga <= 40000000) {
            return round($total_harga * 0.008);
        } else {
            return round($total_harga * 0.01);
        }
    }
}

if (!function_exists('hitung_diskon_voucher')) {
    function hitung_diskon_voucher($total_harga, $voucher_code)
    {
        $vouchers = [
            'FLASH10'  => 0.10,
            'FLASH15'  => 0.15,
            'MEMBER20' => 0.20,
        ];

        $code = strtoupper(trim($voucher_code ?? ''));

        return isset($vouchers[$code]) ? round($total_harga * $vouchers[$code]) : 0;
    }
}