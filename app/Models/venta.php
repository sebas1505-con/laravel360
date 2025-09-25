<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';

    protected $fillable = [
    'cantProducto',
    'metodoEnvio',
    'totalVenta',
    'metodo_de_pago',
    'fk_id_cliente',
    'Fecha_de_venta', 
];


    public function cliente()
    {
        return $this->belongsTo(Usuario::class, 'fk_id_cliente');
    }
}
