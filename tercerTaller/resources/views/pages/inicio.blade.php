@extends('layouts.guest')

@section('contenido')

<!-- HERO -->
<div class="hero text-center text-light p-5 rounded-4 shadow-lg mb-5">
    <h1 class="display-3 fw-bold glow-text">🎮 CREA TU PERSONAJE</h1>
    <p class="lead">Diseña héroes, villanos y leyendas únicas</p>
</div>

<!-- CARDS -->
<div class="row g-4 mb-5">

    <div class="col-md-4">
        <div class="card gamer-card h-100 text-center">
            <div class="card-body">
                <h4>⚔️ Personaliza</h4>
                <p>Crea personajes con habilidades únicas</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card gamer-card h-100 text-center">
            <div class="card-body">
                <h4>📖 Historia</h4>
                <p>Define su pasado, motivación y destino</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card gamer-card h-100 text-center">
            <div class="card-body">
                <h4>💾 Guardar</h4>
                <p>Accede a tus creaciones cuando quieras</p>
            </div>
        </div>
    </div>

</div>

<div class="row align-items-stretch mb-5 gy-5">

    <!-- SECCIÓN CON IMAGEN + INFO -->
<div class="row align-items-stretch mb-5 gy-5" style="min-height: 750px;"> <!-- altura mínima igual a la imagen -->

    <!-- IZQUIERDA -->
    <div class="col-md-6 text-light d-flex flex-column justify-content-between">
        <h2 class="fw-bold mb-3">Crea sin límites</h2>

        <p class="mb-4">
            Diseña personajes únicos con habilidades, historia y estilo propio.
            Dale vida a tus ideas y conviértelas en personajes increíbles.
        </p>

        <!-- LISTA -->
        <ul class="list-group mb-4">
            <li class="list-group-item bg-dark text-light border-secondary">✔ Fácil de usar</li>
            <li class="list-group-item bg-dark text-light border-secondary">✔ Diseño moderno</li>
            <li class="list-group-item bg-dark text-light border-secondary">✔ Experiencia fluida</li>
        </ul>

        <!-- PROCESO -->
        <div class="mt-4">
            <h5 class="fw-bold mb-3">¿Cómo funciona?</h5>

            <div class="row g-3">

                <div class="col-6">
                    <div class="process-card text-center p-3">
                        <div class="process-number">1</div>
                        <h6 class="mt-2 mb-1">Registro</h6>
                        <p class="small mb-0">Crea tu cuenta</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="process-card text-center p-3">
                        <div class="process-number">2</div>
                        <h6 class="mt-2 mb-1">Login</h6>
                        <p class="small mb-0">Accede al sistema</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="process-card text-center p-3">
                        <div class="process-number">3</div>
                        <h6 class="mt-2 mb-1">Crear</h6>
                        <p class="small mb-0">Diseña tu personaje</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="process-card text-center p-3">
                        <div class="process-number">4</div>
                        <h6 class="mt-2 mb-1">Guardar</h6>
                        <p class="small mb-0">Consúltalo luego</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- DERECHA (IMAGEN) -->
    <div class="col-md-6 text-center d-flex align-items-center justify-content-center" style="margin-right: -50px;">
    <img src="{{ asset('img/presentacion.jpg') }}"
         class="img-fluid hero-img"
         style="max-height: 750px;"
         alt="Personaje">
</div>

</div>
</div>


@endsection