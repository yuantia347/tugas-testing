<?php

namespace Tests\Feature;

use Tests\TestCase;

class NumberFeatureTest extends TestCase
{
    public function testNumberCheckPageLoads()
    {
        $response = $this->get('/number');
        $response->assertStatus(200);
        $response->assertSee('Cek Bilangan Ganjil dan Genap dari 1 sampai N');
    }

    public function testNumberCheckLogic()
    {
        $response = $this->post('/number/check', ['number' => 8]);
        $response->assertStatus(200);
        $response->assertSee('Bilangan Ganjil dari 1 sampai 8');
        $response->assertSee('1, 3, 5, 7'); 
        $response->assertSee('Bilangan Genap dari 1 sampai 8');
        $response->assertSee('2, 4, 6, 8'); 
    }

    public function testInvalidNumberInput()
    {
        $response = $this->post('/number/check', ['number' => 'abc']);
        $response->assertSessionHasErrors();
    }
}
