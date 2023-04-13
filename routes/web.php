<?php

use App\Http\Controllers\AutoresController;
use App\Http\Controllers\cmsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('cms/login');
});

Route::get('/cms/login', [LoginController::class, 'index'])->name('login');

Route::group(['prefix' => 'cms', 'middleware' => 'auth'], function () {
    Route::get('/bienvenida', [cmsController::class, 'bienvenida'])->name('bienvenida');
    Route::get('/users', [cmsController::class, 'nuevoUsuario'])->name('users');
    Route::get('/users/new', [cmsController::class, 'nuevoUsuario'])->name('newUser');
    Route::get('/notas', [cmsController::class, 'nuevoUsuario'])->name('notas');
    Route::get('/nota/new', [cmsController::class, 'nuevaNota'])->name('newNota');

    Route::get('/autores', [AutoresController::class, 'index'])->name('autores');
    Route::get('/autor/new', [AutoresController::class, 'nuevo'])->name('autores.new');
    Route::get('/autor/{id}', [AutoresController::class, 'editar'])->name('autores.edit');
    
    Route::get('/notas', [NotasController::class, 'index'])->name('notas');
    Route::get('/nota/new', [NotasController::class, 'nuevo'])->name('notas.new');
    Route::get('/nota/{id}', [NotasController::class, 'editar'])->name('notas.edit');
});


Route::post('/validarLogin', [LoginController::class, 'login'])->name("validarLogin");
Route::post('/nuevo-nota', [NotasController::class, 'create'])->name("newNota");
Route::post('/cerrarSesion', [LoginController::class, 'logOut'])->name("salir");
Route::post('/registro-usuario', [LoginController::class, 'create'])->name("registro-usuario");

Route::post('/nuevo-autor', [AutoresController::class, 'create'])->name("newAutor");
