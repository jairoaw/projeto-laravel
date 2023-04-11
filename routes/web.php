<?php

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

Route::get('/', function () {         //:: operador de reducao de escopo
    return view('welcome');         //renderiza a pagina que está na pasta views
});

Route::get('/teste', function () {
    return 'o teste funcionou';
});

Route::get('/teste-com-view', function () {
    return view('teste');
});
