<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetRoutes extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */

    public function test_Get_route_of_home()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

    }

    public function test_Get_route_of_assets()
    {
        $response = $this->get('/activos');

        $response->assertStatus(200);

    }

    public function test_Get_route_of_environments()
    {
        $response = $this->get('/aulas');

        $response->assertStatus(200);
    }

    public function test_Get_route_of_teachers()
    {
        $response = $this->get('/profesores');

        $response->assertStatus(200);
    }
}
