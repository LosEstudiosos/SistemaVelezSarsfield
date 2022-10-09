<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ActasController;
use App\Http\Livewire\Principal;


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
//route::get('tabla', [TableController::class, 'table'])->name('table');

Route::post('usuarios/borrar', [UsuariosController::class, 'borrar'])->name('usuarios.borrar');

Route::get('/dashboard', function (){
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/actas', function (){
    return view('actas');
})->name('actas');
route::post('actas', [ActasController::class, 'store'])->name('actas.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/comunicados', function (){
    return view('comunicados');
})->name('comunicados');

Route::middleware(['auth:sanctum', 'verified'])->get('/calificaciones', function (){
    return view('calificaciones');
})->name('calificaciones');

Route::middleware(['auth:sanctum', 'verified'])->get('/tabla', Principal::class)->name('table');
http://127.0.0.1:8000/css/app.css

