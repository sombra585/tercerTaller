<nav class="navbar navbar-expand-lg navbar-dark gamer-navbar shadow-sm">
    <div class="container">

    

        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('inicio') }}">
            🎮 <span class="brand-text">GameForge</span>
        </a>

  

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="menu">



            <ul class="navbar-nav me-auto align-items-lg-center gap-lg-2">
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="{{ route('inicio') }}">
                        Inicio
                    </a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="{{ route('mis.personajes') }}">
                            Mis personajes
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="{{ route('nuevo.personaje') }}">
                            Crear
                        </a>
                    </li>

  

                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="{{ route('mostrar.registros') }}">
                            Mostrar registros
                        </a>
                    </li>
                @endauth
            </ul>

       

            <ul class="navbar-nav ms-auto align-items-center gap-2">
                @guest
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-gradient" href="{{ route('registro') }}">
                             Registrarse
                        </a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <span class="user-badge">
                            👤 {{ auth()->user()->name }}
                        </span>
                    </li>

                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                Salir
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>