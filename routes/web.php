<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ActasController;
use App\Http\Controllers\RecordatorioController;
use App\Http\Controllers\CalificacionesController;
use App\Http\Controllers\RolesController;
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
route::get('tabla1', [TableController::class, 'table'])->name('table');

Route::get('/calendar', [ActasController::class, 'index']);
Route::post('/calendar/agregar', [ActasController::class, 'store']);

Route::get('/recordatorio', [RecordatorioController::class, 'index'])->name('recordatorios');
Route::get('/recordatorio/mostrar', [RecordatorioController::class, 'show'])->name('recordatorio.mostrar');
Route::post('/recordatorio/agregar', [RecordatorioController::class, 'store'])->name('recordatorio.save');
Route::post('/recordatorio/editar/{id}', [RecordatorioController::class, 'edit'])->name('recordatorio.edit');
Route::post('/recordatorio/borrar/{id}', [RecordatorioController::class, 'destroy'])->name('recordatorio.destroy');
Route::post('/recordatorio/actualizar', [RecordatorioController::class, 'update'])->name('recordatorio.update');


Route::post('usuarios/borrar', [UsuariosController::class, 'borrar'])->name('usuarios.borrar');
Route::get('userRoles', [RolesController::class, 'users'])->name('userRoles');

Route::get('/dashboard', function (){
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/actas', [ActasController::class, 'index'])->name('actas');
route::post('actas', [ActasController::class, 'store'])->name('actas.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/calificaciones', [ActasController::class, 'calificaciones'])->name('calificaciones');
Route::middleware(['auth:sanctum', 'verified'])->get('/actas-list', [ActasController::class, 'list'])->name('lista-actas');

Route::middleware(['auth:sanctum', 'verified'])->get('/comunicados', function (){
    return view('comunicados');
})->name('comunicados');

Route::middleware(['auth:sanctum', 'verified'])->post('/calificaciones2/{id}', [CalificacionesController::class, 'calificaciones2'])->name('calificaciones2');
Route::middleware(['auth:sanctum', 'verified'])->get('/alumnos', [CalificacionesController::class, 'alumnos'])->name('alumnos');
Route::middleware(['auth:sanctum', 'verified'])->get('/cargaNotas', [CalificacionesController::class, 'cargaNotas'])->name('cargaNotas');
                                                                   
Route::middleware(['auth:sanctum', 'verified'])->get('/userRoles', [RolesController::class, 'index'])->name('userRoles.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/userRoles/{id}', [RolesController::class, 'edit'])->name('userRoles.edit');
Route::middleware(['auth:sanctum', 'verified'])->post('/userRoles/{id}', [RolesController::class, 'update'])->name('userRoles.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/tabla', Principal::class)->name('table');
http://127.0.0.1:8000/css/app.css

