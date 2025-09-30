<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Producto;

class InventarioController extends Controller
{
    
    public function index()
{
    $inventarios = Inventario::all();
    return view('inventario', compact('inventarios'));
}

    /**
     * Guardar un producto en el inventario
     */
    public function store(Request $request)
    {
        // Validar datos
        $request->validate([
            'stock' => 'required|integer|min:1',
            'costo_producto_unitario' => 'required|numeric|min:0',
            'fk_id_producto' => 'required|exists:productos,id',
            'fk_id_administrador' => 'required|exists:administradores,id',
        ]);

        // Crear inventario
        Inventario::create([
            'stock' => $request->stock,
            'costo_producto_unitario' => $request->costo_producto_unitario,
            'estado_producto' => $request->estado_producto ?? 'disponible',
            'fk_id_producto' => $request->fk_id_producto,
            'fk_id_administrador' => $request->fk_id_administrador,
        ]);

        // Redirigir con mensaje
        return redirect()->route('inventario.index')->with('success', 'Producto agregado al inventario.');
    }
}
