@extends('layouts.app')

@section('contenido')

<div class="hero text-center text-light p-5 rounded-4 shadow-lg mb-5">
    <h1 class="display-3 fw-bold glow-text">-- CREA TU PERSONAJE --</h1>
    <p class="lead">Diseña héroes, villanos y leyendas únicas</p>
</div>

@if ($errors->any())
    <div class="alert alert-danger shadow-sm">
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

    <!-- IZQUIERDA -->
    <div class="col-lg-6 d-flex flex-column gap-4">

        <!-- INFO -->
        <div class="card gamer-card p-4" style="box-shadow:none;">
            <h6 class="mb-3 fw-semibold text-light border-bottom pb-2" style="border-color: rgba(255,255,255,0.1);">
                📝 Información Básica
            </h6>

            <div class="mb-3">
                <label class="form-label small text-secondary">Nombre</label>
                <input type="text" class="form-control input-gamer"
                       name="nombre" placeholder="Ej: Arkan el Valiente" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label small text-secondary">Clase</label>
                    <select class="form-select input-gamer" name="clase" required>
                        <option value="">Seleccionar</option>
                        <option>Guerrero</option>
                        <option>Mago</option>
                        <option>Arquero</option>
                        <option>Asesino</option>
                        <option>Sanador</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label small text-secondary">Raza</label>
                    <select class="form-select input-gamer" name="raza" required>
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
        <div class="card gamer-card p-4" style="box-shadow:none;">
            <h6 class="mb-3 fw-semibold text-light border-bottom pb-2" style="border-color: rgba(255,255,255,0.1);">
                📖 Historia
            </h6>

            <textarea class="form-control input-gamer"
                      name="historia" rows="6"
                      placeholder="Cuenta la historia de tu personaje..." required></textarea>
        </div>

    </div>

    <!-- DERECHA -->
    <div class="col-lg-6 d-flex flex-column gap-4">

        <!-- APARIENCIA -->
        <div class="card gamer-card p-4" style="box-shadow:none;">
            <h6 class="mb-3 fw-semibold text-light border-bottom pb-2" style="border-color: rgba(255,255,255,0.1);">
                🎨 Apariencia
            </h6>

            <div class="d-flex justify-content-between mb-4">

                <div class="text-center">
                    <label class="form-label small text-secondary">Cabello</label>
                    <input type="color" class="color-picker d-block mx-auto mt-1"
                           name="color_cabello" value="#ff00ff">
                </div>

                <div class="text-center">
                    <label class="form-label small text-secondary">Ojos</label>
                    <input type="color" class="color-picker d-block mx-auto mt-1"
                           name="color_ojos" value="#0000ff">
                </div>

                <div class="text-center">
                    <label class="form-label small text-secondary">Estatura</label>
                    <input type="number" class="form-control input-gamer mt-1"
                           name="estatura" style="width:100px;" placeholder="cm">
                </div>

            </div>
        </div>

        <!-- HABILIDADES -->
        <div class="card gamer-card p-4" style="box-shadow:none;">
            <h6 class="mb-3 fw-semibold text-light border-bottom pb-2" style="border-color: rgba(255,255,255,0.1);">
                ⚡ Habilidades
            </h6>

            <div class="row text-center">
                @foreach(['Fuerza','Magia','Sigilo','Arquería'] as $hab)
                    <div class="col-6 mb-2">
                        <div class="form-check d-flex justify-content-center align-items-center gap-2 p-2 rounded"
                             style="background: rgba(255,255,255,0.03);">

                            <input class="form-check-input check-gamer"
                                   type="checkbox"
                                   name="habilidades[]"
                                   value="{{ $hab }}"
                                   id="{{ $hab }}">

                            <label class="form-check-label small" for="{{ $hab }}">
                                {{ $hab }}
                            </label>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <!-- BOTÓN -->
    <div class="col-12 text-center mt-3">
        <button type="submit" class="btn btn-gradient btn-lg px-5 fw-semibold">
             Guardar Personaje
        </button>
    </div>

</div>
</form>

@endsection