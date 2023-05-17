<?php

use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\UserController;
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
    'index'])->name('estoque')->middleware('auth');      //o primeiro parametro é a própria classe e o segundo é a funcao que vai ser executada dentro da classe (index)

Route::get('/estoque/adicionar', 
    [EstoqueController::class,  //GET mostra o formulario  
    'adicionar'])->name('estoque.adicionar');

Route::post('/estoque/adicionar', 
    [EstoqueController::class,  //POST envia o formulario
    'adicionarGravar']);

Route::get('/estoque/editar/{estoque}', 
    [EstoqueController::class, 
    'editar'])->name('estoque.editar');

Route::put('/estoque/adicionar/',
    [EstoqueController::class,  
    'editarGravar']);

Route::get('/estoque/apagar/{estoque}',
    [EstoqueController::class,
    'apagar'])->name('estoque.apagar');    //rota do tipo GET, qualquer um pode apagar

Route::delete('/estoque/apagar/{estoque}',
    [EstoqueController::class,
    'apagar']);    //acessar a mesma rotas, mas do tipo DELETE, ou seja, método diferente


//agupamento de rotas
//grupo para rotas que começam com /user

Route::group(['prefix' => '/user'], function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/create', [UserController::class, 'createSave']);
    Route::get('/login', [UserController::class, 'login'])->name('user.login');
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

    

});
