@extends('layouts.app')

@section('contenido')

<div class="container py-5">

    <!-- TITULO -->
   <div class="text-center mb-5">
    <div class="page-title">
        <h2>-- Mis Personajes Creados--</h2>
        <p class="small mt-2">Gestiona y visualiza tus creaciones</p>
    </div>
</div>

    <!-- ALERTA -->
    @if(session('success'))
        <div class="text-center mb-4">
            <div class="gamer-card p-3">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- VACIO -->
    @if($personajes->isEmpty())
        <p class="text-center">No has creado ningún personaje aún.</p>
    @else

        <div class="row g-4">

            @foreach($personajes as $personaje)

                <div class="col-md-4">

                    <div class="gamer-card p-3 h-100">

                        <!-- IMAGEN -->
                        <img src="{{ asset('img/bonitico.gif') }}" 
                             class="hero-img mb-3"
                             style="max-height: 140px; object-fit: cover; width: 100%;">

                        <!-- NOMBRE -->
                        <h4 class="fw-bold glow-text text-center mb-3">
                            {{ $personaje->nombre }}
                        </h4>

                        <div class="text-center mb-2">

    @if($personaje->legendario)
        <span class="badge bg-warning text-dark px-3 py-1 me-1">
            ⭐ Legendario
        </span>
    @endif

    @if($personaje->villano)
        <span class="badge bg-danger px-3 py-1">
            🔥 Villano
        </span>
    @endif

    @if(!$personaje->legendario && !$personaje->villano)
        <span class="badge bg-secondary px-3 py-1">
            ⚔️ Normal
        </span>
    @endif

</div>

                        <!-- DATOS -->
                        <ul class="list-group mb-3">
                            <li class="list-group-item">
                                Clase: {{ $personaje->clase }}
                            </li>
                            <li class="list-group-item">
                                Raza: {{ $personaje->raza }}
                            </li>
                            <li class="list-group-item">
                                Estatura: {{ $personaje->estatura }} cm
                            </li>
                            <li class="list-group-item">
                                Habilidades: {{ implode(', ', $personaje->habilidades) }}
                            </li>
                        </ul>

                        <!-- HISTORIA -->
                        <p class="small">
                            {{ Str::limit($personaje->historia, 100) }}
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    @endif

</div>

@endsection