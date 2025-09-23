<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repartidor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;



class RepartidorController extends Controller
{
    public function create()
{
    $usuarios = Usuario::all(); 
    return view('Crear-Repartidor', compact('usuarios'));
}
    public function showRegisterForm()
    {
        return view('crear-repartidor'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'     => 'required|string|max:255',
            'correo'     => 'required|email|unique:repartidores,useCorreo',
            'usuario'    => 'required|string|max:50|unique:repartidores,Usuario',
            'contrasena' => 'required|string|min:6|confirmed',
            'telefono'   => 'nullable|string|max:20',
            'vehiculo'   => 'nullable|string|max:50',
            'fecha'      => 'nullable|date',
            'placa' => 'required|string|max:20',
            'fk_id_usuario' => 'nullable|exists:usuarios,id',
        ]);

        Repartidor::create([
        'NombreRepar'   => $request->input('nombre'),
        'useCorreo'     => $request->input('correo'),
        'repTelefono'   => $request->input('telefono'),
        'tipodevehi'    => $request->input('vehiculo'),
        'numplaca'      => $request->input('placa'),
        'Usuario'       => $request->input('usuario'),
        'contraseña'    => bcrypt($request->input('contrasena')),
        'fk_id_usuario' => $request->fk_id_usuario ?: null, 
]);




        return redirect('/login')
            ->with('success', 'Registro exitoso. ¡Ahora puedes iniciar sesión!');
    }

    // Mostrar formulario de login
    public function showLoginForm()
    {
        return view('/login'); 
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'     => 'required|email',
            'password' => 'required|string',
        ]);

        $user = Repartidor::where('useCorreo', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->contraseña)) { // corregido
            Auth::login($user);
            return redirect('/repartidor')
                ->with('success', 'Bienvenido ' . $user->NombreRepar);
        }

        return back()->withErrors([
            'email' => 'Credenciales incorrectas.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')
            ->with('success', 'Sesión cerrada correctamente.');
    }
}


