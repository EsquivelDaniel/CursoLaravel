<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    function carga_página_listados_usuarios()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Usuarios');
    }

    /** @test */
    function carga_página_detalles_usuarios()
    {
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrando detalles del usuario: 5');
    }

    /** @test */
    function carga_página_nuevo_usuarios()
{
    $this->get('/usuarios/nuevo')
    ->assertStatus(200)
    ->assertSee('Crear nuevo Usuario');
}

}
