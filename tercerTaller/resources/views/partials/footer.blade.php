<footer class="gamer-footer mt-auto">

    <div class="container py-5">

        <div class="row text-center text-md-start">

            <!-- MARCA -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold glow-text">🎮 GameForge</h5>
                <p class="small mt-2">
                    Crea y guarda tus personajes ficticios de forma fácil y rápida.
                </p>
            </div>

            <!-- NAV -->
            <div class="col-md-4 mb-4">
                <h6 class="fw-bold mb-3">Navegación</h6>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="{{ route('inicio') }}" class="footer-link">Inicio</a></li>
                    <li><a href="{{ route('login') }}" class="footer-link">Login</a></li>
                    <li><a href="{{ route('registro') }}" class="footer-link">Registro</a></li>
                </ul>
            </div>

            <!-- INFO -->
            <div class="col-md-4 mb-4">
                <h6 class="fw-bold mb-3">Sobre la app</h6>
                <p class="small">
                    Proyecto desarrollado con Laravel para la creación de personajes.
                </p>
            </div>

        </div>

        <!-- LINEA -->
        <hr class="footer-line my-4">

        <!-- COPYRIGHT -->
        <div class="text-center small">
            © 2026 <span class="glow-text">GameForge</span> 🎮 | Todos los derechos reservados
        </div>

    </div>

</footer>