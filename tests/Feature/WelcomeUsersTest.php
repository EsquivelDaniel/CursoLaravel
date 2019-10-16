<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**  @test */
    function bienvenido_usuarios_con_apodos()
    {
        $this->get('saludo/daniel/careca')
        ->assertStatus(200)
        ->assertSee('Bienvenido Daniel, tu apodo es Careca');

    }

    function bienvenido_usuarios_sin_apodos()
    {
        $this->get('saludo/daniel')
        ->assertStatus(200)
        ->assertSee('Bienvenido Daniel');
    }

}
