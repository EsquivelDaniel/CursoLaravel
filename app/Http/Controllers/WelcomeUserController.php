<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function saludoApodo($nombre, $apodo = null){
        $nombre =ucfirst($nombre);
        $apodo =ucfirst($apodo);

        return "Bienvenido {$nombre}, tu apodo es {$apodo}";
    }

    public function saludoNombre($nombre){
        $nombre =ucfirst($nombre);

        return "Bienvenido {$nombre}";
    }

}
