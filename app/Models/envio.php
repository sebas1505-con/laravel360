<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;

    protected $table = 'envios';

    protected $fillable = [
        'estadoEnvio',
        'fechaEnvio',
        'metodoEnvio',
        'fk_id_venta',
        'fk_id_repartidor',
    ];

    // Relación con la venta
    public function venta()
    {
        return $this->belongsTo(Venta::class, 'fk_id_venta');
    }

    // Relación con el repartidor
    public function repartidor()
    {
        return $this->belongsTo(Repartidor::class, 'fk_id_repartidor');
    }
}
