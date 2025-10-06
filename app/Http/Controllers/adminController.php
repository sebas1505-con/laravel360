<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function store(Request $request)
    { 
        $request->validate([
            'correo' => 'required|email|unique:administradores,admCorreo',
            'usuario' => 'required|string|max:50',
            'contrasena' => 'required|min:6|confirmed',
            'telefono' => 'required|string|max:20',
            'codigo' => 'required|string|max:20',
        ]);

        Administrador::create([
            'admCorreo' => $request->correo,
            'usuario' => $request->usuario,
            'contraseña' => Hash::make($request->contrasena),
            'telefono' => $request->telefono,
            'codigo' => $request->codigo,
            'fk_id_usuario' => $request->fk_id_usuario ?? null,
        ]);

        return redirect()->route('login')->with('success', 'Administrador registrado correctamente');
    }
}
