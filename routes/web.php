<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('inicio'); 
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/menu', function () {
    return view('menu'); 
});
Route::get('/usuario', function () {
    return view('usuario');
})->name('usuario');
Route::get('/repartidor', function () {
    return view('repartidor');
})->name('repartidor');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/sugerencias', function () {
    return view('sugerencias'); 
});
Route::get('/producto-camiseta', function () {
    return view('producto-camiseta');
})->name('producto-camiseta');
Route::get('/chaqueta', function () {
    return view('producto-chaqueta');
})->name('producto-chaqueta');
Route::get('/conjunto-mujer', function () {
    return view('producto-conjunto');
})->name('producto-caonjunto');
Route::get('/leggings', function () {
    return view('producto-leggings');
})->name('producto-leggings');
Route::get('/short', function () {
    return view('producto-short');
})->name('producto-short');
Route::get('/sudadera', function () {
    return view('producto-sudadera');
})->name('producto-sudadera');
Route::get('/top', function () {
    return view('producto-top');
})->name('producto-top');
Route::get('/productos', function () {
    return view('productos');
})->name('productos');



// Rutas para los registros (usando el controlador)
Route::get('/registro/usuario', [RegistroController::class, 'usuario']);
Route::get('/registro/admin', [RegistroController::class, 'admin']);
Route::get('/registro/repartidor', [RegistroController::class, 'repartidor']);
Route::get('/crear-cuenta', [RegistroController::class, 'seleccionar']);


