<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\UserController;

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

// Rotas Admins

Route::middleware([])->group(function (){

    Route::prefix('admin')->group(function (){

       Route::get('create', [UsuariosController::class, 'create']);

       Route::get('edit', [UsuariosController::class, 'edit']);

       Route::get('users', [UsuariosController::class, 'users']);

       Route::get('login', [AutenticacaoController::class, 'login']);

       Route::get('forgotpassword', [AutenticacaoController::class, 'forgotpassword']);

       Route::get('passwordrecovery', [AutenticacaoController::class, 'passwordrecovery']);
    });
    
});

// Rotas Usuarios

Route::prefix('user')->group(function (){

    Route::get('login', [UserController::class, 'login']);

    Route::get('forgotpassword', [UserController::class, 'forgotpassword']);

    Route::get('passwordrecovery', [UserController::class, 'passwordrecovery']);
});
