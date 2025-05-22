<?php

namespace App\Helpers;

class NilaiHelper
{
    public static function hitungNilaiAkhir($uts, $uas, $tugas)
    {
        return ($uts * 0.3) + ($uas * 0.4) + ($tugas * 0.3);
    }

    public static function tentukanGrade($nilai_akhir)
    {
        if ($nilai_akhir >= 85) return 'A';
        if ($nilai_akhir >= 75) return 'B';
        if ($nilai_akhir >= 65) return 'C';
        if ($nilai_akhir >= 50) return 'D';
        return 'E';
    }
}