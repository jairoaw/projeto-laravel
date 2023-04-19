<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Http\Request;      //lida com requisições de formulário

class EstoqueController extends Controller
{
    public function index()
    {
        $lista = Estoque::all();
        return view('estoque.index', ['lista' => $lista]);
        //return view('estoque.index');
    }

    
    public function adicionar(Request $form){
        if ($form->isMethod('POST')) {
            $dados = $form->validate([
                'nome' => 'required',
                'quantidade' => 'required']);
            
                Estoque::create($dados);
                return redirect('estoque');
                //dd($dados);
        }
        
        //dd ($form->method() );                                         // dd = dump and die
        return view('estoque.adicionar'); //também pode usar estoque/adicionar
    }
}
