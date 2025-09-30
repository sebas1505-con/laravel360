<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $table = 'inventarios';

    protected $fillable = [
        'stock',
        'costo_producto_unitario',
        'estado_producto',
        'fk_id_producto',
        'fk_id_administrador'
    ];
}
