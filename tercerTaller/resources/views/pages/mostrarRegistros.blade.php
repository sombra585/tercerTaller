@extends('layouts.app')

@section('title', 'Registros')

@section('contenido')

<div class="container py-5">

    <!-- TITULO -->
    <div class="text-center mb-5">
        <div class="hero d-inline-block px-5 py-3">
            <h2 class="fw-bold glow-text" style="font-size: 2.5rem;">
                -- Registros de Usuarios --
            </h2>
        </div>
    </div>

    <!-- TABLA -->
    <div class="gamer-card p-4">

        <div class="table-responsive">
            <table class="table gamer-table text-center align-middle mb-0">

                <!-- HEAD -->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>👤 Nombre</th>
                        <th>📧 Email</th>
                        <th>📅 Fecha</th>
                    </tr>
                </thead>

                <!-- BODY -->
                <tbody>
                    @forelse($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td class="fw-bold glow-text">{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <div class="py-4">
                                    📭 No hay usuarios registrados todavía.
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>

@endsection