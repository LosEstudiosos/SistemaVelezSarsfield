<?php

use App\Http\Controllers\Admin\AlumnoController;
use App\Http\Controllers\Admin\CargaNotasController;
use App\Http\Controllers\Admin\CargarNotasController;
use App\Http\Controllers\Admin\CursoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\MensajeriaController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UpdateController;
use App\Http\Controllers\CalificacionesController;
use App\Models\Mensajeria;
//use JasperPHP\JasperPHP as JasperPHP;
//use PHPJasper\PHPJasper;

use Dompdf\Dompdf;


Route::resource('user', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('alumnos', AlumnoController::class)->names('admin.alumnos');
Route::resource('cargarNotas', CargarNotasController::class)->names('admin.cargarNotas');


Route::get('', [HomeController::class, 'index']);
Route::get('calendar', [HomeController::class, 'calendar']);
Route::get('usuarios', [UsersController::class, 'list'])->name('admin.user.list');
Route::get('usuarios/registrar', [UsersController::class, 'new'])->name('admin.user.new');
Route::post('usuarios/guardar', [UsersController::class, 'save'])->name('admin.user.save');
Route::post('usuarios/modificar/{id}', [UsersController::class, 'edit'])->name('admin.user.edit');
Route::post('usuarios/actualizar', [UsersController::class, 'update'])->name('admin.user.update');
Route::post('usuarios', [UsersController::class, 'discharge'])->name('admin.user.discharge');
Route::post('usuarios/borrar', [UsersController::class, 'delete'])->name('admin.user.delete');

Route::get('mail', [MensajeriaController::class, 'listInbox'])->name('admin.mail.list.inbox');
Route::get('mail/sent', [MensajeriaController::class, 'listSent'])->name('admin.mail.list.sent');
Route::get('mail/drafts', [MensajeriaController::class, 'listDraft'])->name('admin.mail.list.drafts');
Route::get('mail/trash', [MensajeriaController::class, 'listTrash'])->name('admin.mail.list.trash');
Route::get('mail/new', [MensajeriaController::class, 'new'])->name('admin.mail.new');
Route::get('mail/read/{id}', [MensajeriaController::class, 'read'])->name('admin.mail.read');
Route::post('mail/save', [MensajeriaController::class, 'save'])->name('admin.mail.save');
Route::post('mail/send', [MensajeriaController::class, 'send'])->name('admin.mail.send');
Route::post('mail/delete', [MensajeriaController::class, 'delete'])->name('admin.mail.delete');
Route::post('mail/noted', [MensajeriaController::class, 'noted'])->name('admin.mail.noted');
Route::get('mail/checkBorradores', [MensajeriaController::class, 'checkBorradores'])->name('admin.mail.checkBorradores');
Route::get('mail/checkEnviados', [MensajeriaController::class, 'checkEnviados'])->name('admin.mail.checkEnviados');
/* Route::get('cargaNotas', [CargaNotasController::class, 'cargaNotas'])->name('admin.cargarNotas'); */
Route::get('verNotas', [CargaNotasController::class, 'verNotas'])->name('admin.cargarNotas.vista');
/* Route::post('store', [CargaNotasController::class, 'store'])->name('admin.Cargar.store');  */