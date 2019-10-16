<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = [
            'Daniel',
            'Juan',
            'Pedro',
            '<script>alert("Clicker")</script>'
        ];

        $title = 'Listados de Usuarios';

        return view('users', compact('title', 'users'));

       /*  
       **Alternativa 1**
            return view('users', [
            'users' => $users,
            'title' => '$title'
            ]); 

        **Alternativa 2**
            return view('users')
            ->with('users', $users)
            ->with('title', $title);
            */
    }

    public function show($id) {
        return "Mostrando detalles del usuario: {$id}";
    }

    public function create() {
        return 'Crear nuevo Usuario';
    }

}
