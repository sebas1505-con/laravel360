<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;


class registroController extends Controller
{
    public function showRegisterForm()
    {
        return view('crear-Usuario'); 
    }

    //  Registrar usuario
    public function register(Request $request)
    {
   $request->validate([
    'name' => 'required|string|max:255',
    'useCorreo'         => 'required|email|unique:usuarios,useCorreo',
    'Username'          => 'required|string|max:255|unique:usuarios,Username',
    'password'          => 'required|string|min:6|confirmed',
    'useTelefono'       => 'nullable|string|max:20',
    'Direccion'         => 'nullable|string|max:255',
    'fecha_nacimiento'  => 'nullable|date',
    'Barrio'            => 'nullable|string|max:255',
]);



   Usuario::create([
    'name' => $request->name,
    'useCorreo' => $request->useCorreo,
    'Username' => $request->Username,
    'password' => Hash::make($request->password),
    'useTelefono' => $request->useTelefono,
    'Direccion' => $request->Direccion,
    'fecha_nacimiento' => $request->fecha_nacimiento,
    'Barrio' => $request->Barrio,
]);

return redirect()->route('/login')->with('success', 'Usuario registrado correctamente');
        
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
