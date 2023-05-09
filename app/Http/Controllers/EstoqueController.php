<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstoqueRequest;
use App\Models\Estoque;
use Illuminate\Http\Request;      //lida com requisições de formulário

class EstoqueController extends Controller
{
    public function index()
    {
        //$lista = Estoque::all();
        $lista = Estoque::orderBy ('id', 'desc') -> get();          //ordena por id de forma decrescente
        // se quser mostrar apagados, use: $lista = Estoque::withTrashed()->get();
        return view('estoque.index', ['lista' => $lista]);
        //return view('estoque.index');
    }

    public function adicionar(){       //dd ($form->method() );  // dd = dump and die

        return view('estoque.adicionar'); //também pode usar estoque/adicionar
    }
    
    public function adicionarGravar(EstoqueRequest $form){
        
        $dados = $form->validated(); //os valores já chegam validados com os dados do form da request
        Estoque::create($dados);
        return redirect('estoque');
    }
    
    public function editar(Estoque $estoque){ 
        return view('estoque.adicionar',[
            'editar' => $estoque,
        ]);
            
    }

    public function editarGravar(EstoqueRequest $form){
        $dados = $form->validated();
        $estoque = Estoque::find($dados['id']);
        $estoque->fill($dados);
        $estoque->save();
        return redirect('estoque');
    }

    public function apagar(Estoque $estoque){
        /*se o meetodo de acesso for DELETE, apaga no banco, senao mostra a conformação*/
        if (request()->isMethod('DELETE')){ //aqui apaga de verdade
            $estoque->delete();
            return redirect('estoque');
        }
        return view('estoque.apagar', [
            'estoque' => $estoque
        ]);
    }

}
