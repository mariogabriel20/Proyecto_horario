<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function test_inicio()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    function test_home_nolog(){
        $this->get('/home')->assertStatus(302);
    }
    
}
