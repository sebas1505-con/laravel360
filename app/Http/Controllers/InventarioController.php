<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;

class InventarioController extends Controller
{
    // Mostrar todos los inventarios
    public function showInventario()
    {
        $inventarios = Inventario::all();
        return view('inventario', compact('inventarios'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'stock' => 'required|date',  // Fecha de stock
            'costo_producto_unitario' => 'required|string', 
            'estado_producto' => 'required|string|max:255',
            'fk_id_producto' => 'required|integer',
            'fk_id_administrador' => 'required|integer',
        ]);

        Inventario::create([
            'stock' => $request->stock,
            'costo_producto_unitario' => $request->costo_producto_unitario,
            'estado_producto' => $request->estado_producto,
            'fk_id_producto' => $request->fk_id_producto,
            'fk_id_administrador' => $request->fk_id_administrador,
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->back()->with('success', '✅ Inventario generado con éxito');
    }
}
