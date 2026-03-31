<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Personaje;

class PersonajeController extends Controller
{
    public function index()
    {
        $personajes = auth()->user()->personajes; // Trae los personajes del usuario logueado
        return view('pages.misPersonajes', compact('personajes'));
    }

    public function create()
    {
        return view('pages.nuevoPersonaje');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'clase' => 'required|string',
            'raza' => 'required|string',
            'estatura' => 'nullable|integer',
            'habilidades' => 'nullable|array|max:3',
            'historia' => 'required|string',
        ]);

        Personaje::create([
            'user_id' => auth()->id(),
            'nombre' => $request->nombre,
            'clase' => $request->clase,
            'raza' => $request->raza,
            'estatura' => $request->estatura,
            'habilidades' => $request->habilidades,
            'historia' => $request->historia,
        ]);

        return redirect()->route('mis.personajes')->with('success', '¡Personaje creado!');
    }

    public function registros()
    {
        $usuarios = User::all();
        return view('pages.mostrarRegistros', compact('usuarios'));
    }
}