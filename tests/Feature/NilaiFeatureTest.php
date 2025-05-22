<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NilaiFeatureTest extends TestCase
{
    public function test_form_dapat_ditampilkan()
    {
        $response = $this->get('/nilai');
        $response->assertStatus(200);
        $response->assertSee('Hitung Nilai Akhir dan Grade');
    }

    public function test_dapat_menghitung_nilai_dan_grade()
    {
        $response = $this->post('/nilai/hitung', [
            'uts' => 80,
            'uas' => 90,
            'tugas' => 85,
        ]);

        $response->assertStatus(200);
        $response->assertSee('Nilai Akhir');
        $response->assertSee('Grade:');
    }
}