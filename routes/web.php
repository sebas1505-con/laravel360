<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use Illuminate\Container\Attributes\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome'); 
});
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
Route::get('/Crear-Usuario', function () {
    return view('Crear-Usuario');
})->name('/Crear-usuario'); 
Route::get('/Crear-Repartidor', function () {
    return view('Crear-Repartidor');
})->name('/Crear-Repartidor');
Route::get('/Crear-Admin', function () {
    return view('Crear-Admin');
})->name('/Crear-Admin');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
// (cerrar sesión)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


