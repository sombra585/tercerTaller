@extends('layouts.app')

@section('contenido')

<div class="container py-5">
    <h2 class="text-light mb-4 glow-text">🎭 Mis Personajes</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($personajes->isEmpty())
        <p class="text-light">No has creado ningún personaje aún.</p>
    @else
        <div class="row g-4">
            @foreach($personajes as $personaje)
                <div class="col-md-4">
                    <div class="card gamer-card p-3 h-100">
                        <h4 class="fw-bold glow-text">{{ $personaje->nombre }}</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-dark text-light border-secondary">Clase: {{ $personaje->clase }}</li>
                            <li class="list-group-item bg-dark text-light border-secondary">Raza: {{ $personaje->raza }}</li>
                            <li class="list-group-item bg-dark text-light border-secondary">Estatura: {{ $personaje->estatura }} cm</li>
                            <li class="list-group-item bg-dark text-light border-secondary">Habilidades: {{ implode(', ', $personaje->habilidades) }}</li>
                        </ul>
                        <p class="mt-2 text-light">{{ Str::limit($personaje->historia, 100) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection