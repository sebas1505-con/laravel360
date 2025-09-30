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

    $pedidoExistente = Venta::where('fk_id_cliente', $usuarioId)
        ->whereDate('Fecha_de_venta', now()->toDateString())
        ->first();

    if ($pedidoExistente) {
        // Vaciar carrito
        $request->session()->forget('carrito');

        // Redirigir de vuelta con alerta
        return redirect()->back()->with('success', '¡Ya se hizo tu pedido!');
    }

    Venta::create([
        'cantProducto' => $request->cantProducto,
        'metodoEnvio' => $request->metodoEnvio,
        'totalVenta' => $request->totalVenta,
        'metodo_de_pago' => $request->metodo_de_pago,
        'fk_id_cliente' => $usuarioId,
        'Fecha_de_venta' => now(),
    ]);

    $request->session()->forget('carrito');

    // Redirigir de vuelta con alerta de éxito
    return redirect()->back()->with('success', '¡Venta registrada correctamente!');
}

}