@extends('layouts.guest')

@section('contenido')

<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <div class="col-md-6 col-lg-4">

        <div class="gamer-card p-4">

            <!-- HEADER -->
            <div class="text-center mb-4">
                <h2 class="fw-bold glow-text">Iniciar Sesión</h2>
                <p class="small">Accede a tu cuenta y empieza a crear personajes</p>
            </div>

            <!-- FORM -->
            <form method="POST" action="{{ route('login.post') }}">
                @csrf

                <!-- EMAIL -->
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email"
                           class="input-gamer w-100 @error('email') is-invalid @enderror"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           required
                           autofocus
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

                <!-- CHECK -->
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input check-gamer" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Recordarme</label>
                </div>

                <!-- BUTTON -->
                <div class="d-grid mb-3">
                    <button type="submit" class="btn-gradient fw-bold">
                        Entrar
                    </button>
                </div>

                <!-- LINK -->
                <p class="text-center small">
                    ¿No tienes cuenta?
                    <a href="{{ route('registro') }}" class="fw-bold footer-link">Regístrate</a>
                </p>

            </form>

        </div>

    </div>

</div>

@endsection