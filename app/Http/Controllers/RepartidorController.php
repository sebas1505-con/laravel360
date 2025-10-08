<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repartidor;
use App\Models\Usuario;
use App\Models\Venta;
use App\Models\Envio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RepartidorController extends Controller
{
    public function index()
    {
        // Pedidos pendientes (sin envío)
        $ventasPendientes = Venta::doesntHave('envio')->with('cliente')->get();
        return view('repartidor', compact('ventasPendientes'));
    }

    public function store(Request $request)
{
    // Validar los datos
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'correo' => 'required|email|unique:repartidores,useCorreo',
        'usuario' => 'required|string|max:50|unique:repartidores,Usuario',
        'contrasena' => 'required|string|min:6|confirmed',
        'placa' => 'required|string|max:10',
        'telefono' => 'required|string|max:20',
        'vehiculo' => 'required|string',
        'fecha' => 'nullable|date',
    ]);

    // Crear el repartidor
    $repartidor = new \App\Models\Repartidor();
    $repartidor->NombreRepar = $validated['nombre'];
    $repartidor->useCorreo = $validated['correo'];
    $repartidor->Usuario = $validated['usuario'];
    $repartidor->contraseña = Hash::make($validated['contrasena']);
    $repartidor->repTelefono = $validated['telefono'];
    $repartidor->tipodevehi = $validated['vehiculo'];
    $repartidor->numplaca = $validated['placa'];
    $repartidor->fk_id_usuario = null; // opcional si tienes relación

    $repartidor->save();
    return redirect()->route('repartidor.index')->with('success', 'Pedido tomado correctamente.');
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
