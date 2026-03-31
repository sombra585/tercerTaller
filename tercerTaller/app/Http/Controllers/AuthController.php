<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // ==================================================================

    public function showLogin()
    {
        return view('pages.iniciarSesion'); 
    }

    // ==================================================================

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/mis-personajes');
        }

        return back()->withErrors([
            'email' => 'Credenciales incorrectas',
        ]);
    }

    // ==================================================================

    public function showRegister()
    {
        return view('pages.registrarse'); 
    }

    // ==================================================================

    public function register(Request $request)
    {
       $request->validate([
    'name' => [
        'required',
        'string',
        'max:255',
        'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/'
    ],
    'email' => ['required','email','unique:users,email'],
    'password' => ['required','confirmed','min:6'],
], [
    'name.regex' => 'El nombre solo puede contener letras y espacios.'
]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Cuenta creada correctamente.');
    }
}