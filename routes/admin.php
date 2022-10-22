<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermisoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UsersController;


Route::resource('user', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');
Route::resource('permiso', PermisoController::class)->only(['index', 'edit', 'update'])->names('admin.permisos');

Route::get('', [HomeController::class, 'index']);
Route::get('calendar', [HomeController::class, 'calendar']);
Route::get('usuarios', [UsersController::class, 'list'])->name('admin.user.list');
Route::get('usuarios/registrar', [UsersController::class, 'new'])->name('admin.user.new');
Route::post('usuarios/guardar', [UsersController::class, 'save'])->name('admin.user.save');
Route::post('usuarios/modificar/{id}', [UsersController::class, 'edit'])->name('admin.user.edit');
Route::post('usuarios/actualizar', [UsersController::class, 'update'])->name('admin.user.update');
Route::post('usuarios', [UsersController::class, 'discharge'])->name('admin.user.discharge');
Route::post('usuarios/borrar', [UsersController::class, 'delete'])->name('admin.user.delete');


