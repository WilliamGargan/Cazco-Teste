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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/admin/login', function () {
    return view('frontend\login');
});

Route::get('/admin/create', function () {
    return view('frontend\CriaçãoUsuarios');
});

Route::get('/admin/edit', function () {
    return view('frontend\EditarUsuarios');
});

Route::get('/admin/forgot-password', function () {
    return view('frontend\EsqueciMinhaSenha');
});

Route::get('/admin/password-recovery', function () {
    return view('frontend\Recuperação');
});

Route::get('/admin/users', function () {
    return view('frontend\ListadeUsuarios');
});