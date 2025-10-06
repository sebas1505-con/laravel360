<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable;

class administrador extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'administradores';

    protected $fillable = [
        'admCorreo',
        'usuario',
        'contraseña', 
        'telefono',
        'codigo',
        'fk_id_usuario'
    ];
}
