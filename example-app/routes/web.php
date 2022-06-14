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

       Route::delete('delete', [UsersController::class, 'destroy']);

       Route::post('store', [UsersController::class, 'store']);

       Route::get('edit/{id}', [UsersController::class, 'edit']);

       Route::put('update/{id}', [UsersController::class, 'update']);

       Route::get('users', [UsersController::class, 'users']);

       Route::get('reports', [UsersController::class, 'reports']);

       Route::get('reports/{id}', [UsersController::class, 'show']);

       Route::get('login', [AuthenticationController::class, 'login']);

       Route::get('forgot-password', [AuthenticationController::class, 'forgotPassword']);

       Route::get('password-recovery', [AuthenticationController::class, 'passwordRecovery']);
       
    });
    
});

// Rotas Usuarios

Route::prefix('user')->group(function (){

    Route::get('login', [UserController::class, 'login']);

    Route::get('forgot-password', [UserController::class, 'forgotPassword'])->name('userforgotPassword');

    Route::get('password-recovery', [UserController::class, 'passwordRecovery']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});