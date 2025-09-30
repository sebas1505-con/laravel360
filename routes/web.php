<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\registroController;
use App\Http\Controllers\RepartidorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
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
Route::get('/camiseta', function () {
    return view('producto-camiseta');
})->name('producto-camiseta');
Route::get('/chaqueta', function () {
    return view('producto-chaqueta');
})->name('producto-chaqueta');
Route::get('/conjunto-mujer', function () {
    return view('producto-conjunto-mujer');
})->name('producto-conjunto-mujer');
Route::get('/leggings', function () {
    return view('producto-leggings');
})->name('producto-leggings');
Route::get('/short', function () {
    return view('producto-short');
})->name('producto-short');
Route::get('/sudadera', function () {
    return view('producto-sudadera');
})->name('producto-sudadera');
Route::get('/producto-top', function () {
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
Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');
Route::get('/formulario-compra', function () {
    return view('formulario-compra');
})->name('formulario-compra');
route::get('/paginaNo', function () {
    return view('paginaNo');
})->name('paginaNo');
route::get('/pedidos', function () {
    return view('pedidos');
})->name('pedidos');
route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
route::get('/quienes', function () {
    return view('quienes');
})->name('quienes');
route::get('/404', function () {
    return view('404');
})->name('404');
route::get('/505', function () {
    return view('505');
})->name('505');

Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario');
Route::post('/inventario', [InventarioController::class, 'store'])->name('inventario.store');


Route::get('/register', [RegistroController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegistroController::class, 'store'])->name('register.store');
Route::get('/register-repartidor', [RepartidorController::class, 'showRegisterForm'])->name('register.repartidor');
Route::post('/register-repartidor', [RepartidorController::class, 'store'])->name('register.repartidor.store');

Route::post('/guardar-venta', [VentaController::class, 'store'])->name('guardar.venta');
Route::post('/ventas', [VentaController::class, 'store'])->name('ventas.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

route::post('/administradores',[AdminController::class,'store'])->name('administradores.store');


// Usuario 
Route::middleware('auth:web')->group(function () {
    Route::get('/usuario', function () {
        return view('usuario');
    })->name('usuario');

    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
});

// Repartidor 
Route::middleware('auth:repartidor')->group(function () {
    Route::get('/repartidor', function () {
        return view('repartidor');
    })->name('repartidor');
});

//administrador
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::middleware(['auth'])->group(function () {
    Route::get('/ventas/create', [VentaController::class, 'create'])->name('ventas.create');
    Route::post('/ventas', [VentaController::class, 'store'])->name('ventas.store');
});

