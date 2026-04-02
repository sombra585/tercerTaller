@extends('layouts.guest')

@section('contenido')

<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <div class="col-md-6 col-lg-4">

        <div class="gamer-card p-4">

            <!-- HEADER -->
            <div class="text-center mb-4">
                <h2 class="fw-bold glow-text">Registrarse</h2>
                <p class="small">Crea tu cuenta y empieza a diseñar personajes</p>
            </div>

            <!-- FORM -->
            <form method="POST" action="{{ route('registro.post') }}">
                @csrf

                <!-- NOMBRE -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text"
                           class="input-gamer w-100 @error('name') is-invalid @enderror"
                           id="name"
                           name="name"
                           value="{{ old('name') }}"
                           required
                           placeholder="Tu nombre">

                    @error('name')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <!-- EMAIL -->
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email"
                           class="input-gamer w-100 @error('email') is-invalid @enderror"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           required
                           placeholder="tu@correo.com">

                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <!-- PASSWORD -->
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password"
                           class="input-gamer w-100 @error('password') is-invalid @enderror"
                           id="password"
                           name="password"
                           required
                           placeholder="••••••••">

                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <!-- CONFIRM -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                    <input type="password"
                           class="input-gamer w-100"
                           id="password_confirmation"
                           name="password_confirmation"
                           required
                           placeholder="••••••••">
                </div>

                <!-- BUTTON -->
                <div class="d-grid mb-3">
                    <button type="submit" class="btn-gradient fw-bold">
                        Registrarse
                    </button>
                </div>

                <!-- LINK -->
                <p class="text-center small">
                    ¿Ya tienes cuenta?
                    <a href="{{ route('login') }}" class="fw-bold footer-link">Inicia sesión</a>
                </p>

            </form>

        </div>

    </div>

</div>

@endsection