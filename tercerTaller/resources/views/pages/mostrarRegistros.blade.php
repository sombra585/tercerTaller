@extends('layouts.app')

@section('title', 'Registros')

@section('contenido')

<div class="container py-5">

  
    <div class="text-center mb-5">

    
            <h2 style="
                margin: 0;
                font-size: 3rem;
                font-weight: bold;
                color: #ffffff;
                letter-spacing: 2px;
                text-shadow: 0 0 15px rgba(112, 87, 255, 1);
            ">
                -- Registros de Usuarios --
            </h2>
        </div>
    </div>

  
    <div class="card gamer-card shadow-lg p-4 bg-dark text-light border-0"
         style="border-radius: 15px; box-shadow: 0 0 25px rgba(123,44,255,0.5);">

        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle text-center mb-0">

         
                <thead style="background: rgba(123,44,255,0.2);">
                    <tr>
                        <th>ID</th>
                        <th>👤 Nombre</th>
                        <th>📧 Email</th>
                        <th>📅 Fecha</th>
                    </tr>
                </thead>

             
                <tbody>
                    @forelse($usuarios as $usuario)
                        <tr style="transition: 0.3s;">
                            <td>{{ $usuario->id }}</td>
                            <td class="fw-bold text-info">{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <div class="py-4 text-secondary">
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