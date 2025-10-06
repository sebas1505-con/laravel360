<?php

namespace app\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class repartidor extends Authenticatable
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
        'contraseña', // asegúrate de usar el nombre real de tu campo
    ];

    // Relación con envíos
    public function envios()
    {
        return $this->hasMany(envio::class, 'fk_id_repartidor');
    }
}
