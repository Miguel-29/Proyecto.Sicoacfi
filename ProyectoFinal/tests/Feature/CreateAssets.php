<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\environment;

use Tests\TestCase;

class CreateAssets extends TestCase
{

    use RefreshDatabase;

    public function test_create()
    {
        $response = environment::factory()->count(5)->create();

        $response = $this->get('/aulas');
    }
}
