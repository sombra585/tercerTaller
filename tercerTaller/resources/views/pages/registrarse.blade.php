@extends('layouts.guest')

@section('contenido')

<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <!-- REGISTER CARD -->
    <div class="col-md-6 col-lg-4">
        <div class="card gamer-card shadow-lg p-4 rounded-4 bg-dark text-light">

            <!-- HEADER -->
            <div class="text-center mb-3">
                <h2 class="fw-bold glow-text">📝 Registrarse</h2>
                <p class="small text-secondary">Crea tu cuenta y empieza a diseñar personajes</p>
            </div>

            <!-- FORM -->
            <form method="POST" action="{{ route('registro.post') }}">
                @csrf

                <!-- NOMBRE -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text"
                           class="form-control bg-dark text-light border-secondary @error('name') is-invalid @enderror"
                           id="name"
                           name="name"
                           value="{{ old('name') }}"
                           required
                           placeholder="Tu nombre">
                    @error('name')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- EMAIL -->
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email"
                           class="form-control bg-dark text-light border-secondary @error('email') is-invalid @enderror"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           required
                           placeholder="tu@correo.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- PASSWORD -->
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password"
                           class="form-control bg-dark text-light border-secondary @error('password') is-invalid @enderror"
                           id="password"
                           name="password"
                           required
                           placeholder="••••••••">
                    @error('password')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- PASSWORD CONFIRM -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                    <input type="password"
                           class="form-control bg-dark text-light border-secondary"
                           id="password_confirmation"
                           name="password_confirmation"
                           required
                           placeholder="••••••••">
                </div>

                <!-- BUTTON -->
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary fw-bold">
                        Registrarse
                    </button>
                </div>

                <!-- LOGIN LINK -->
                <p class="text-center text-secondary small">
                    ¿Ya tienes cuenta? 
                    <a href="{{ route('login') }}" class="text-primary fw-bold">Inicia sesión</a>
                </p>

            </form>
        </div>
    </div>

</div>

@endsection