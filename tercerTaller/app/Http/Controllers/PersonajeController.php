<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personaje;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PersonajeController extends Controller
{
    // ==================================================================
    public function index()
    {
        $personajes = Auth::user()->personajes()->get();
        return view('pages.misPersonajes', compact('personajes'));
    }

    // ==================================================================
    public function create()
    {
        return view('pages.nuevoPersonaje');
    }

    // ==================================================================
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:50',
            'clase' => 'required|string|in:Guerrero,Mago,Arquero,Asesino,Sanador',
            'raza' => 'required|string|in:Humano,Elfo,Enano,Orco,Goblin',
            'estatura' => 'required|integer|min:50|max:300',
            'habilidades' => 'required|array|min:1|max:3',
            'habilidades.*' => 'string|in:Fuerza,Magia,Sigilo,Arquería',
            'historia' => 'required|string|max:1000',
        ]);

        Personaje::create([
            'user_id' => Auth::id(),
            'nombre' => $validated['nombre'],
            'clase' => $validated['clase'],
            'raza' => $validated['raza'],
            'estatura' => $validated['estatura'],
            'habilidades' => $validated['habilidades'],
            'historia' => $validated['historia'],
        ]);

        return redirect()->route('mis.personajes')->with('success', 'Personaje creado correctamente.');
    }

    public function registros()
{
    $usuarios = \App\Models\User::all(); // Trae todos los usuarios
    return view('pages.mostrarRegistros', compact('usuarios'));
}
}