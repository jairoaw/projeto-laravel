<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index()
    {
        return view('estoque.index');
    }

    
    public function adicionar()
    {
        return view('estoque.adicionar'); //pode usar o estoque/adicionar
    }
}
