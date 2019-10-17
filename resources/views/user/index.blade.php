@extends('layout')

@section('title', 'Usuarios')

@section('content')
    <h1>{{ $title }}</h1>
    <hr>

    @if(!empty($users))
        <ul>
            @foreach ($users as $user)
                <li>{{ $user }}</li>
            @endforeach
        </ul>
    @else 
        <p>No hay usuarios registrados!</p>
    @endif

@endsection

<!-- ** Alternativa 1 ** 
    @unless(empty($users))
        <ul>
            @foreach ($users as $user)
                <li>{{ $user }}</li>
            @endforeach
        </ul>
    @else 
        <p>No hay usuarios registrados!</p>
    @endunless -->

<!-- ** Alternativa 2 **    
    @empty($users)
        <p>No hay usuarios registrados!</p>
    @else
        <ul>
            @foreach ($users as $user)
                <li>{{ $user }}</li>
            @endforeach
        </ul>
    @endempty -->

<!-- **Alternativa 3 **  
    <ul>
        @forelse ($users as $user)
            <li>{{ $user }}</li>
        @empty
            <li>No hay usuarios registrados!</li>
        @endforelse
    </ul> -->