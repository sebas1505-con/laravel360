<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{

    public function index()
    {
        $user = auth()->user(); // Usuario logueado

        // Traer todas las ventas de este cliente
        $ventas = Venta::where('fk_id_cliente', $user->id)->get();

        return view('usuario', compact('user', 'ventas'));
    }


    public function show($id)
    {
        $venta = Venta::with('envio.repartidor')->findOrFail($id);

        return view('cliente.detalle', compact('venta'));
    }
}
