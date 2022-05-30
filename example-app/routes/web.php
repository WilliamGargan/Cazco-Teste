<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\User\UserController;

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

       Route::get('create', [UsersController::class, 'create']);

       Route::get('edit', [UsersController::class, 'edit']);

       Route::get('users', [UsersController::class, 'users']);

       Route::get('login', [AuthenticationController::class, 'login']);

       Route::get('forgot-password', [AuthenticationController::class, 'forgotPassword']);

       Route::get('password-recovery', [AuthenticationController::class, 'passwordRecovery']);
    });
    
});

// Rotas Usuarios

Route::prefix('user')->group(function (){

    Route::get('login', [UserController::class, 'login'])->name('login');

    Route::get('forgot-password', [UserController::class, 'forgotPassword'])->name('userforgotPassword');

    Route::get('password-recovery', [UserController::class, 'passwordRecovery']);
});
