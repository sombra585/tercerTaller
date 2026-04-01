@extends('layouts.app')

@section('contenido')

<div class="container py-5">

<div class="text-center mb-5">
    <div style="
        display: inline-block;
        padding: 25px 50px;
        border-radius: 20px;
        background: linear-gradient(135deg, rgba(59, 10, 196, 0.85), rgba(94, 55, 126, 0.95));
        box-shadow: 0 0 30px rgba(90, 28, 172, 0.8);
    ">
        <h2 style="
            margin: 0;
            font-size: 3.5rem;
            font-weight: bold;
            color: #ffffff;
            letter-spacing: 2px;
            text-shadow: 0 0 15px rgba(112, 87, 255, 1);
        ">
            -- Mis Personajes Épicos --
        </h2>
    </div>
</div>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @if($personajes->isEmpty())
        <p class="text-light text-center">No has creado ningún personaje aún.</p>
    @else
        <div class="row g-4">
            @foreach($personajes as $personaje)
                <div class="col-md-4">
                    <div class="card gamer-card p-3 h-100 shadow-lg">

                        <!-- GIF dentro de la card (opcional, se ve brutal 😎) -->
                        <img src="{{ asset('img/bonitico.gif') }}" 
                             class="img-fluid rounded mb-2" 
                             style="max-height: 120px; object-fit: cover;">

                        <h4 class="fw-bold glow-text text-center">
                            {{ $personaje->nombre }}
                        </h4>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-dark text-light border-secondary">
                                Clase: {{ $personaje->clase }}
                            </li>
                            <li class="list-group-item bg-dark text-light border-secondary">
                                Raza: {{ $personaje->raza }}
                            </li>
                            <li class="list-group-item bg-dark text-light border-secondary">
                                Estatura: {{ $personaje->estatura }} cm
                            </li>
                            <li class="list-group-item bg-dark text-light border-secondary">
                                Habilidades: {{ implode(', ', $personaje->habilidades) }}
                            </li>
                        </ul>

                        <p class="mt-2 text-light">
                            {{ Str::limit($personaje->historia, 100) }}
                        </p>

                    </div>
                </div>
            @endforeach
        </div>
    @endif

</div>

@endsection