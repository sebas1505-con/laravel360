<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

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
    public function eliminarUsuario($id)
    {
    try {
        $usuario = \App\Models\Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->back()->with('success', 'Usuario eliminado correctamente ✅');
    }   catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error al eliminar el usuario ❌');
    }
    }
    public function index()
    {
        $usuarios = Usuario::all();

        return view('admin', compact('usuarios'));
    }

    public function eliminar($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('admin')->with('success', 'Usuario eliminado correctamente');
    }


    
}
