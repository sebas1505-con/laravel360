<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';

   protected $fillable = [
    'name',
    'useCorreo',
    'Username',
    'password',
    'useTelefono',
    'Direccion',
    'fecha_nacimiento',
    'Barrio',
    'rol',
];



    public $timestamps = true;

    protected $hidden = [
        'contrasena',
        'remember_token',
    ];

    protected $casts = [
        'fechaNacimiento' => 'date',
    ];

    public function getAuthPassword()
    {
        return $this->contrasena;
    }

}

