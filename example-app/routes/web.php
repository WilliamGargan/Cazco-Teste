<?php

use Illuminate\Support\Facades\Route;

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
        Route::get('/login', function () {
            return view('frontend\login');
        });
        
        Route::get('/create', function () {
            return view('frontend\CriaçãoUsuarios');
        });
        
        Route::get('/edit', function () {
            return view('frontend\EditarUsuarios');
        });
        
        Route::get('/forgot-password', function () {
            return view('frontend\EsqueciMinhaSenha');
        });
        
        Route::get('/password-recovery', function () {
            return view('frontend\Recuperação');
        });
        
        Route::get('/users', function () {
            return view('frontend\ListadeUsuarios');
        });
    });
    
});

// Rotas Usuarios

Route::prefix('user')->group(function (){
    Route::get('/login', function () {
        return view('frontend\login');
    })->name('login');
    
    Route::get('/forgot-password', function () {
        return view('frontend\EsqueciMinhaSenha');
    });
    
    Route::get('/password-recovery', function () {
        return view('frontend\Recuperação');
    });
});
