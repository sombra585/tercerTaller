@extends('layouts.app')

@section('title', 'Registros')

@section('contenido')
<div class="container">
    <h2 class="fw-bold mb-4 text-light">📋 Registros de Usuarios</h2>

    <div class="card gamer-card shadow-lg p-3 bg-dark text-light">
        <div class="table-responsive">
            <table class="table table-striped table-dark align-middle text-center mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha de creación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if($usuarios->isEmpty())
            <p class="text-center mt-3 text-secondary">No hay usuarios registrados todavía.</p>
        @endif
    </div>
</div>
@endsection