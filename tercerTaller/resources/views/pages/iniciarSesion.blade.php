@extends('layouts.guest')

@section('contenido')

<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <!-- LOGIN CARD -->
    <div class="col-md-6 col-lg-4">
        <div class="card gamer-card shadow-lg p-4 rounded-4 bg-dark text-light">

            <!-- HEADER -->
            <div class="text-center mb-3">
                <h2 class="fw-bold glow-text">🔑 Iniciar Sesión</h2>
                <p class="small text-secondary">Accede a tu cuenta y empieza a crear personajes</p>
            </div>

            <!-- FORM -->
            <form method="POST" action="{{ route('login.post') }}">
                @csrf

                <!-- EMAIL -->
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email"
                           class="form-control bg-dark text-light border-secondary @error('email') is-invalid @enderror"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           required
                           autofocus
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

                <!-- REMEMBER -->
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Recordarme</label>
                </div>

                <!-- BUTTON -->
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary fw-bold">
                        Entrar
                    </button>
                </div>

                <!-- REGISTER LINK -->
                <p class="text-center text-secondary small">
                    ¿No tienes cuenta? 
                    <a href="{{ route('registro') }}" class="text-primary fw-bold">Regístrate</a>
                </p>

            </form>
        </div>
    </div>

</div>

@endsection