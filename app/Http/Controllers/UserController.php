<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        if(request()->has('empty')){
            $users = [];
        } else {

            $users = [
                'Daniel',
                'Juan',
                'Pedro'
            ];
        }

        $title = 'Listados de Usuarios';

        return view('user.index', compact('title', 'users'));

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
        $title = 'Listados de Usuarios';
        return view('user.show', compact('title', 'id'));
    }

    public function create() {
        return 'Crear nuevo Usuario';
    }

}
