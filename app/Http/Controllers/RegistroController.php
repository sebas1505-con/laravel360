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


    public function register(Request $request)
    {
     $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:usuarios,email',
    'username' => 'required|string|max:255|unique:usuarios,username',
    'password' => 'required|string|min:6|confirmed',
    'telefono' => 'nullable|string|max:20',
    'direccion' => 'nullable|string|max:255',
    'fecha' => 'nullable|date',
]);


     $user = Usuario::create([
    'name' => $request->name,
    'email' => $request->email,
    'username' => $request->username,
    'password' => Hash::make($request->password),
    'telefono' => $request->telefono,
    'direccion' => $request->direccion,
    'fecha_nacimiento' => $request->fecha,
]);


        Auth::login($user);

        return redirect('/dashboard'); 
    }
}



