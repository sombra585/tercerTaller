@extends('layouts.app')

@section('contenido')

<!-- HERO -->
<div class="hero text-center text-light p-5 rounded-4 shadow-lg mb-5">
    <h1 class="display-3 fw-bold glow-text">🛡️ Mis Personajes</h1>
    <p class="lead">Aquí puedes ver todos los héroes y villanos que has creado</p>
</div>

@if($personajes->isEmpty())
    <div class="alert alert-info text-center">
        Aún no has creado ningún personaje. ¡Crea uno nuevo para empezar!
    </div>
@else

<div class="table-responsive">
    <table class="table table-dark table-hover align-middle text-center gamer-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Clase</th>
                <th>Raza</th>
                <th>Estatura (cm)</th>
                <th>Habilidades</th>
                <th>Historia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personajes as $personaje)
                <tr>
                    <td>{{ $personaje->nombre }}</td>
                    <td>{{ $personaje->clase }}</td>
                    <td>{{ $personaje->raza }}</td>
                    <td>{{ $personaje->estatura }}</td>
                    <td>
                        @if(is_array($personaje->habilidades))
                            {{ implode(', ', $personaje->habilidades) }}
                        @else
                            {{ $personaje->habilidades }}
                        @endif
                    </td>
                    <td>{{ Str::limit($personaje->historia, 50, '...') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endif

<!-- Botón crear nuevo -->
<div class="text-center mt-4">
    <a href="{{ route('nuevo.personaje') }}" class="btn btn-gradient btn-lg glow-btn">
        ➕ Crear Nuevo Personaje
    </a>
</div>

@endsection