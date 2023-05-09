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

Route::get('/estoque', 
    [EstoqueController::class, 
    'index'])->name('estoque');      //o primeiro parametro é a própria classe e o segundo é a funcao que vai ser executada dentro da classe (index)

Route::get('/estoque/adicionar', 
    [EstoqueController::class,  //GET mostra o formulario  
    'adicionar'])->name('estoque.adicionar');

Route::post('/estoque/adicionar', 
    [EstoqueController::class,  //POST envia o formulario
    'adicionarGravar']);

Route::get('/estoque/editar/{estoque}', 
    [EstoqueController::class,  //GET mostra o formulario
    'editar'])->name('estoque.editar');

Route::put('/estoque/adicionar/{estoque}',
    [EstoqueController::class,  
    'editarGravar'])->name('estoque.editarGravar');

Route::get('/estoque/apagar/{estoque}',
    [EstoqueController::class,
    'apagar'])->name('estoque.apagar');    //rota do tipo GET, qualquer um pode apagar

Route::delete('/estoque/apagar/{estoque}',
    [EstoqueController::class,
    'apagar']);    //acessar a mesma rotas, mas do tipo DELETE, ou seja, método diferente
