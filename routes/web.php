<?php

use App\Http\Controllers\cmsController;
use App\Http\Controllers\LoginController;
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
});


Route::post('/validarLogin', [LoginController::class, 'login'])->name("validarLogin");
Route::post('/cerrarSesion', [LoginController::class, 'logOut'])->name("salir");
Route::post('/registro-usuario', [LoginController::class, 'create'])->name("registro-usuario");