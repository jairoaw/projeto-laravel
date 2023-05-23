<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index() {
        return view('upload.index');
    }

    public function save(Request $form){
        $arquivo = $form->file('file');

        //grava com nome alatorio
        $arquivo->store('public');

        //grava com nome original
        $arquivo->storeAs('public', $arquivo->getClientOriginalName());

        return 'Arquivo salvo com sucesso!';
    }
}
