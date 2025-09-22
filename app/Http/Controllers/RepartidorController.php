<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repartidor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RepartidorController extends Controller
{
    // Mostrar formulario de registro
    public function showRegisterForm()
    {
        return view('crear-repartidor'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:repartidores,useCorreo',
            'usuario' => 'required|string|max:50|unique:repartidores,usuario',
            'contrasena' => 'required|string|min:6|confirmed',
            'telefono' => 'nullable|string|max:20',
            'vehiculo' => 'nullable|string|max:50',
            'fecha' => 'nullable|date',
        ]);

        Repartidor::create([
    'NombreRepar' => $request->input('nombre'),
    'useCorreo'   => $request->input('useCorreo'),
    'repTelefono' => $request->input('telefono'),
    'tipodevehi'  => $request->input('vehiculo'),
    'numplaca'    => $request->input('placa'),
    'Usuario'     => $request->input('usuario'),
    'contraseña'  => bcrypt($request->input('password')),
    'fk_id_usuario' => $request->input('fk_id_usuario'),
]);


        return redirect('/login-repartidor')->with('success', 'Registro exitoso. ¡Ahora puedes iniciar sesión!');
    }

    // Mostrar formulario de login
    public function showLoginForm()
    {
        return view('login-repartidor'); 
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'correo' => 'required|email',
            'contrasena' => 'required|string',
        ]);

        $user = Repartidor::where('useCorreo', $credentials['correo'])->first();

        if ($user && Hash::check($credentials['contrasena'], $user->password)) {
            Auth::login($user);
            return redirect('/repartidor-dashboard')->with('success', 'Bienvenido ' . $user->nombre);
        }

        return back()->withErrors([
            'correo' => 'Credenciales incorrectas.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login-repartidor')->with('success', 'Sesión cerrada correctamente.');
    }
}

