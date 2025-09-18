<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function usuario()
    {
        return view('Crear-Usuario'); 
    }

    public function admin()
    {
        return view('Crear-Admin'); 
    }

    public function repartidor()
    {
        return view('Crear-Repartidor'); 
    }

    public function seleccionar()
    {
        return view('crear-cuenta'); 
    }
   
}


