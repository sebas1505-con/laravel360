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

    public function tomarPedido($ventaId)
    {
        $repartidor = Auth::user(); // repartidor logueado

        $venta = Venta::findOrFail($ventaId);

        if ($venta->envio) {
            return redirect()->back()->with('error', 'Este pedido ya tiene repartidor asignado.');
        }

        Envio::create([
            'fk_id_venta'     => $ventaId,
            'fk_id_repartidor'=> $repartidor->id,
            'estadoEnvio'     => 'En camino',
            'fechaEnvio'      => now(),
            'metodoEnvio'     => $repartidor->tipodevehi ?? 'Motocicleta',
        ]);

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
