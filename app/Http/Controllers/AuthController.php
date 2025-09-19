<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('crear-Usuario'); 
    }

    // 📌 Registrar usuario
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,useCorre',
            'usuario' => 'required|string|max:255|unique:usuarios,Usuario',
            'password' => 'required|string|min:6|confirmed',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string|max:255',
            'fecha' => 'nullable|date', 
            'barrio' => 'nullable|string|max:255',
        ]);

        Usuario::create([
            'UseNombre'      => $request->name,
            'useCorre'       => $request->email,
            'Usuario'        => $request->usuario,
            'contrasena'     => Hash::make($request->password),
            'useTelefono'    => $request->telefono,
            'useDireccion'   => $request->direccion,
            'fechaNacimiento'=> $request->fecha,
            'useBarrio'      => $request->barrio,
        ]);

        return redirect()->route('login')->with('success', 'Registro exitoso. Inicia sesión para continuar.');
    }

    public function showLoginForm()
    {
        return view('/login'); 
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'  => 'required|email',
            'password' => 'required|string',
        ]);

        $user = Usuario::where('UseCorre', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->contrasena)) {
            Auth::login($user);
            return redirect('/dashboard')->with('success', 'Bienvenido ' . $user->UseNombre);
        }

        return back()->withErrors([
            'email' => 'Las credenciales no son correctas.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Sesión cerrada correctamente.');
    }
}
