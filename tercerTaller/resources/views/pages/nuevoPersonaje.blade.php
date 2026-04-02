@extends('layouts.app')

@section('contenido')

<div class="container py-5">

    <!-- HERO -->
    <div class="hero text-center mb-5">
        <h1 class="display-4 fw-bold glow-text">--  construye tu personaje --</h1>
        <p class="lead mt-2">Diseña un héroe único con historia, habilidades y estilo propio</p>
    </div>

    <!-- ERRORES -->
    @if ($errors->any())
        <div class="gamer-card p-3 mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('nuevo.personaje.store') }}">
    @csrf

    <div class="row g-4">

        <!-- COLUMNA PRINCIPAL -->
        <div class="col-lg-8">

            <!-- INFO GENERAL -->
            <div class="gamer-card p-4 mb-4">
                <h5 class="fw-bold mb-3 glow-text">🧬 Información General</h5>

                <div class="mb-3">
                    <label class="form-label">Nombre del personaje</label>
                    <input type="text" class="input-gamer w-100" name="nombre" placeholder="Ej: Kael el Oscuro" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Clase</label>
                        <select class="input-gamer w-100" name="clase" required>
                            <option value="">Seleccionar</option>
                            <option>Guerrero</option>
                            <option>Mago</option>
                            <option>Arquero</option>
                            <option>Asesino</option>
                            <option>Sanador</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Raza</label>
                        <select class="input-gamer w-100" name="raza" required>
                            <option value="">Seleccionar</option>
                            <option>Humano</option>
                            <option>Elfo</option>
                            <option>Enano</option>
                            <option>Orco</option>
                            <option>Goblin</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- HISTORIA -->
            <div class="gamer-card p-4 mb-4">
                <h5 class="fw-bold mb-3 glow-text">📖 Historia</h5>
                <textarea class="input-gamer w-100" name="historia" rows="6" placeholder="Cuenta la historia de tu personaje..." required></textarea>
            </div>

            <!-- HABILIDADES AVANZADAS -->
            <div class="gamer-card p-4">
                <h5 class="fw-bold mb-3 glow-text">⚡ Habilidades</h5>

                <div class="row">
                    @foreach(['Fuerza','Magia','Sigilo','Arquería','Resistencia','Velocidad'] as $hab)
                        <div class="col-md-4 mb-2">
                            <div class="skill-box"
                                 style="background: rgba(139,92,246,0.08);">

                                <input class="form-check-input check-gamer"
                                       type="checkbox"
                                       name="habilidades[]"
                                       value="{{ $hab }}"
                                       id="{{ $hab }}">

                                <label class="form-check-label" for="{{ $hab }}">
                                    {{ $hab }}
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- SIDEBAR -->
        <div class="col-lg-4">

            <!-- APARIENCIA -->
            <div class="gamer-card p-4 mb-4 text-center">
                <h5 class="fw-bold mb-3 glow-text">🎨 Apariencia</h5>

                <div class="mb-3">
                    <label class="form-label">Color Cabello</label>
                    <input type="color" class="color-picker" name="color_cabello" value="#8b5cf6">
                </div>

                <div class="mb-3">
                    <label class="form-label">Color Ojos</label>
                    <input type="color" class="color-picker" name="color_ojos" value="#4f46e5">
                </div>

                <div class="mb-3">
                    <label class="form-label">Estatura (cm)</label>
                    <input type="number" class="input-gamer w-100" name="estatura" placeholder="170">
                </div>
            </div>

            <!-- EXTRA OPCIONES -->
            <div class="gamer-card p-4 text-center">
                <h5 class="fw-bold mb-3 glow-text">⭐ Extras</h5>

                <div class="form-check mb-2">
                    <input class="form-check-input check-gamer" type="checkbox" name="legendario">
                    <label class="form-check-label">Es legendario</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input check-gamer" type="checkbox" name="villano">
                    <label class="form-check-label">Es villano</label>
                </div>
            </div>

        </div>

        <!-- BOTÓN -->
        <div class="col-12 text-center mt-4">
            <button type="submit" class="btn-gradient px-5 py-3 fw-bold">
                🚀 Crear Personaje
            </button>
        </div>

    </div>

    </form>

</div>

@endsection