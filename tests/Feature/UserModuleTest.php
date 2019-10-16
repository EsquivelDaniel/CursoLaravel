<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test para verificar el listado del usuarios*/
    function carga_página_listados_usuarios()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listados de Usuarios')
        ->assertSee('Daniel')
        ->assertSee('Juan');
    }

    /** @test para verificar el listado del usuarios vacio*/
    function carga_página_listados_usuarios_vacio()
    {
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('No hay usuarios registrados!');
    }

    /** @test para verificar los detalles de usuarios*/
    function carga_página_detalles_usuarios()
    {
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrando detalles del usuario: 5');
    }

    /** @test para verificar un nuevo usuario*/
    function carga_página_nuevo_usuarios()
{
    $this->get('/usuarios/nuevo')
    ->assertStatus(200)
    ->assertSee('Crear nuevo Usuario');
}

}
