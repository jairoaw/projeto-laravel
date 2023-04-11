<?php

use App\Http\Controllers\EstoqueController;
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

Route::get('/estoque', [EstoqueController::class, 'index']);      //o primeiro parametro é a própria classe e o segundo é a funcao que vai ser executada dentro da classe (index)



// Route::get('/teste', function () {
//     return 'o teste funcionou';
// });

// Route::get('/teste-com-view', function () {
//     return view('teste');
// });

// Route::get('/noticia/{id}', function ($id) {
//     return "voce está lendo a noticia {$id}";
// });
