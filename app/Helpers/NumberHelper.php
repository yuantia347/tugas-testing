<?php

namespace App\Helpers;

class NumberHelper
{
    public static function isInteger($number): bool
    {
        return is_int($number) || (is_numeric($number) && floor($number) == $number);
    }

    public static function isEven($number): bool
    {
        if (!self::isInteger($number)) {
            return false;
        }
        return $number % 2 === 0;
    }

    public static function isOdd($number): bool
    {
        if (!self::isInteger($number)) {
            return false;
        }
        return $number % 2 !== 0;
    }
}
