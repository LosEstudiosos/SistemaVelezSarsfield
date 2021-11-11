<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;

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

Route::get('/', HomeController::class);
Route::get('/home', [HomeController::class, 'home']);
Route::get('usuarios', [UsuariosController::class, 'listar']);
Route::get('usuarios/registrar', [UsuariosController::class, 'registrar']);
Route::get('usuarios/modificar', [UsuariosController::class, 'modificar']);