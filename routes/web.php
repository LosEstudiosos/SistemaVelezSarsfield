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
Route::post('/home', [HomeController::class, 'home'])->name('home');
Route::get('usuarios', [UsuariosController::class, 'listar'])->name('homeUser');
Route::get('usuarios/registrar', [UsuariosController::class, 'registrar'])->name('usuarios.registrar');
Route::post('usuarios/almacenar', [UsuariosController::class, 'almacenar'])->name('usuarios.save');
Route::post('usuarios/modificar/{id}', [UsuariosController::class, 'modificar'])->name('usuarios.modificar');
Route::post('usuarios/actualizar', [UsuariosController::class, 'actualizar'])->name('usuarios.update');
Route::post('usuarios', [UsuariosController::class, 'altabaja'])->name('usuarios.altabaja');

Route::post('usuarios/borrar', [UsuariosController::class, 'borrar'])->name('usuarios.borrar');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
http://127.0.0.1:8000/css/app.css
