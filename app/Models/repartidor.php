<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Repartidor extends Authenticatable
{
    protected $table = 'repartidores';

    protected $fillable = [
        'NombreRepar',
        'useCorreo',
        'telefono',
        'vehiculo',
        'fecha_nacimiento',
        'usuario',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
