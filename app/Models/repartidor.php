<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Repartidor extends Authenticatable
{
    protected $table = 'repartidores';

    protected $fillable = [
      'NombreRepar',
      'useCorreo',
      'repTelefono',
      'tipodevehi',
      'numplaca',
      'Usuario',
      'contraseña',
      'fk_id_usuario',
];


    protected $hidden = [
        'password',
    ];
}
