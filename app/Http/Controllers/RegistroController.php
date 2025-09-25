<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    // Mostrar formulario de registro
    public function showRegisterForm()
    {
        return view('crear-Usuario');
    }

    // Guardar usuario en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'useCorreo' => 'required|email|unique:usuarios,useCorreo',
            'Username' => 'required|string|max:50|unique:usuarios,Username',
            'password' => 'required|string|min:6|confirmed',
            'useTelefono' => 'nullable|string|max:20',
            'Direccion' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'Barrio' => 'nullable|string|max:100',
        ]);

        Usuario::create([
            'name' => $request->name,
            'useCorreo' => $request->useCorreo,
            'Username' => $request->Username,
            'password' => bcrypt($request->password),
            'useTelefono' => $request->useTelefono,
            'Direccion' => $request->Direccion,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'Barrio' => $request->Barrio,
        ]);

        return redirect('/login')->with('success', 'Registro exitoso. ¡Ahora puedes iniciar sesión!');
    }
}
