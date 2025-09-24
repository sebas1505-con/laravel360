<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\Repartidor;

class AuthController extends Controller
{
    
    public function showLoginForm()
    {
        return view('/login'); 
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        $email = $request->email;
        $password = $request->password;

        //  usuario 
        $user = Usuario::where('useCorreo', $email)->first();
        if ($user && Hash::check($password, $user->password)) {
            Auth::guard('web')->login($user); 
            $redirect = $user->rol === 'administrador' ? route('admin') : route('usuario');
            return redirect($redirect)->with('success', 'Bienvenido ' . $user->Username);
        }

        // repartidor
        $repartidor = Repartidor::where('useCorreo', $email)->first();
        if ($repartidor && Hash::check($password, $repartidor->contraseña)) {
            Auth::guard('repartidor')->login($repartidor); 
            return redirect()->route('repartidor')->with('success', 'Bienvenido ' . $repartidor->Usuario);
        }

        return back()->withErrors([
            'email' => 'Las credenciales no son correctas.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        // Cerrar sesión 
        Auth::guard('web')->logout();
        Auth::guard('repartidor')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Sesión cerrada correctamente.');
    }
}
