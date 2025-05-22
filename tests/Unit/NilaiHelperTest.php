<?php

namespace Tests\Unit;

use App\Helpers\NilaiHelper;
use PHPUnit\Framework\TestCase;

class NilaiHelperTest extends TestCase
{
    public function test_hitung_nilai_akhir()
    {
        $hasil = NilaiHelper::hitungNilaiAkhir(80, 90, 85);
        $this->assertEquals(85.5, $hasil);
    }

    public function test_tentukan_grade_A()
    {
        $grade = NilaiHelper::tentukanGrade(90);
        $this->assertEquals('A', $grade);
    }

    public function test_tentukan_grade_B()
    {
        $grade = NilaiHelper::tentukanGrade(80);
        $this->assertEquals('B', $grade);
    }

    public function test_tentukan_grade_E()
    {
        $grade = NilaiHelper::tentukanGrade(45);
        $this->assertEquals('E', $grade);
    }
}
