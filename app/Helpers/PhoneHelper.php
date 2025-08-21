<?php

namespace App\Helpers;

class PhoneHelper
{
    public static function format($phone)
    {
        $digits = preg_replace('/\D/', '', $phone);

        if (strlen($digits) === 11) {
            return preg_replace('/(\d{3})(\d{4})(\d{4})/', '$1-$2-$3', $digits);
        }

        if (strlen($digits) === 10) {
            return preg_replace('/(\d{2,3})(\d{3,4})(\d{4})/', '$1-$2-$3', $digits);
        }

        return $digits;
    }
}