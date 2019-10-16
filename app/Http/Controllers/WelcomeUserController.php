<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($nombre, $apodo = null){
        $nombre =ucfirst($nombre);
        $apodo =ucfirst($apodo);

        if($apodo) {
            return "Bienvenido {$nombre}, tu apodo es {$apodo}";
        } else {
            return "Bienvenido {$nombre}";
        }
    }
}
