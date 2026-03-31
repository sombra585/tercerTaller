@extends('layouts.app')

@section('contenido')


<div class="hero text-center text-light p-5 rounded-4 shadow-lg mb-5">
    <h1 class="display-3 fw-bold glow-text">🎮 CREA TU PERSONAJE</h1>
    <p class="lead">Diseña héroes, villanos y leyendas únicas</p>
</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form method="POST" action="{{ route('nuevo.personaje.store') }}">
    @csrf

    <div class="row g-4">

  
        <div class="col-md-6">
            <div class="card gamer-card h-100 p-4">
                <h4 class="fw-bold mb-3 glow-text">📝 Información Básica</h4>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del personaje</label>
                    <input type="text" class="form-control input-gamer" id="nombre" name="nombre" required placeholder="Ej: Arkan el Valiente">
                </div>

                <div class="mb-3">
                    <label for="clase" class="form-label">Clase</label>
                    <select class="form-select input-gamer" id="clase" name="clase" required>
                        <option value="">Selecciona una clase</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Mago">Mago</option>
                        <option value="Arquero">Arquero</option>
                        <option value="Asesino">Asesino</option>
                        <option value="Sanador">Sanador</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="raza" class="form-label">Raza</label>
                    <select class="form-select input-gamer" id="raza" name="raza" required>
                        <option value="">Selecciona una raza</option>
                        <option value="Humano">Humano</option>
                        <option value="Elfo">Elfo</option>
                        <option value="Enano">Enano</option>
                        <option value="Orco">Orco</option>
                        <option value="Goblin">Goblin</option>
                    </select>
                </div>

            </div>
        </div>

    
        <div class="col-md-6">
            <div class="card gamer-card h-100 p-4">
                <h4 class="fw-bold mb-3 glow-text">🎨 Apariencia</h4>

                <div class="mb-3">
                    <label for="color_cabello" class="form-label">Color de cabello</label>
                    <input type="color" class="form-control color-picker" id="color_cabello" name="color_cabello" value="#ff00ff" title="Elige un color">
                </div>

                <div class="mb-3">
                    <label for="color_ojos" class="form-label">Color de ojos</label>
                    <input type="color" class="form-control color-picker" id="color_ojos" name="color_ojos" value="#0000ff" title="Elige un color">
                </div>

                <div class="mb-3">
                    <label for="estatura" class="form-label">Estatura (cm)</label>
                    <input type="number" class="form-control input-gamer" id="estatura" name="estatura" min="50" max="300" placeholder="Ej: 175">
                </div>

            </div>
        </div>

       
        <div class="col-12">
            <div class="card gamer-card p-4">
                <h4 class="fw-bold mb-3 glow-text">⚡ Habilidades (Máximo 3)</h4>

                <div class="mb-3 d-flex flex-wrap gap-3">
                    <div class="form-check">
                        <input class="form-check-input check-gamer" type="checkbox" name="habilidades[]" value="Fuerza" id="fuerza">
                        <label class="form-check-label" for="fuerza">Fuerza</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check-gamer" type="checkbox" name="habilidades[]" value="Magia" id="magia">
                        <label class="form-check-label" for="magia">Magia</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check-gamer" type="checkbox" name="habilidades[]" value="Sigilo" id="sigilo">
                        <label class="form-check-label" for="sigilo">Sigilo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check-gamer" type="checkbox" name="habilidades[]" value="Arquería" id="arqueria">
                        <label class="form-check-label" for="arqueria">Arquería</label>
                    </div>
                </div>
            </div>
        </div>

     
        <div class="col-12">
            <div class="card gamer-card p-4">
                <h4 class="fw-bold mb-3 glow-text">📖 Historia del personaje</h4>
                <textarea class="form-control input-gamer" id="historia" name="historia" rows="5" placeholder="Ej: Nació en un reino olvidado..." required></textarea>
            </div>
        </div>

  
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-gradient btn-lg fw-bold mt-3 px-5 glow-btn">
                💾 Guardar Personaje
            </button>
        </div>

    </div>
</form>

@endsection