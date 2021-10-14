<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'ingresar']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'registrar']);
Route::post('/usuario', [UsuarioController::class, 'cerrarSesion']);
Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario');
Route::get('/productos', [ProductosController::class, 'index'])->name('productos');

Route::get('/sesion/get', [SessionController::class, 'getSesion'])->name('sesion.get');
Route::get('/sesion/set', [SessionController::class, 'almacenarSesion'])->name('sesion.almacenar');
Route::get('/sesion/remove', [SessionController::class, 'eliminarSesion'])->name('sesion.eliminar');
