<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    
    public function index()
    {
        // Obtener el ID del usuario autenticado
        $usuarioId = Auth::id();

        // Buscar todas las ventas de ese usuario con sus relaciones
        $ventas = Venta::where('fk_id_cliente', $usuarioId)
                        ->with('envio.repartidor')
                        ->orderBy('Fecha_de_venta', 'desc')
                        ->get();

        // Retornar la vista con los datos
        return view('pedidos', compact('ventas'));
    }
}
