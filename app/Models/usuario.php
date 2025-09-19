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
        'UseNombre',
        'useCorre',
        'Usuario',
        'contrasena',
        'useTelefono',
        'useDireccion',
        'fechaNacimiento',
        'useBarrio',
    ];

    public $timestamps = true;

    protected $hidden = [
        'contrasena',
        'remember_token', // opcional, si en tu tabla existe
    ];

    protected $casts = [
        'fechaNacimiento' => 'date',
    ];

    public function getAuthPassword()
    {
        return $this->contrasena;
    }
}
