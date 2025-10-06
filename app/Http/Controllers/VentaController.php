<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Usuario;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class VentaController extends Controller
{
public function store(Request $request)
{
    $request->validate([
        'cantProducto' => 'required|integer|min:1',
        'metodoEnvio' => 'required|string|max:255',
        'totalVenta' => 'required|numeric|min:0',
        'metodo_de_pago' => 'required|string|max:50',
    ]);

    // Obtener usuario logueado
    $usuario = Auth::user();
    if (!$usuario) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para realizar la compra.');
    }

    $usuarioId = $usuario->id;

    Venta::create([
        'cantProducto' => $request->cantProducto,
        'metodoEnvio' => $request->metodoEnvio,
        'totalVenta' => $request->totalVenta,
        'metodo_de_pago' => $request->metodo_de_pago,
        'fk_id_cliente' => $usuarioId,
        'Fecha_de_venta' => now(),
    ]);

    $request->session()->forget('carrito');

    // Redirigir al menú principal (ajusta el nombre de la ruta según tu app)
    return redirect()->route('usuario')->with('success', 'Compra realizada correctamente.');
}



public function detalle($id)
{
    $venta = \App\Models\Venta::with('envio.repartidor')->findOrFail($id);

    return view('ventas.detalle', compact('venta'));
}

}