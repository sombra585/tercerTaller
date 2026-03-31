<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameForge - @yield('title', 'Inicio')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS propio -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="gamer-bg d-flex flex-column min-vh-100">

    <!-- NAVBAR -->
    @include('partials.navbar')

    <!-- CONTENIDO PRINCIPAL -->
    <main class="container my-5 flex-grow-1">
        @yield('contenido')
    </main>

    <!-- FOOTER -->
    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>