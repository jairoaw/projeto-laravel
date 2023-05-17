<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        return view('user.index');
    }
    
    public function create () {
        return view('user.create');
    }

    public function createSave (Request $data) {
        $data = $data->toArray();
        //criptografar a senha
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('user.index');
    }

    public function login (Request $data) {
        //post == gravando
        if (request()->isMethod('POST')) {            
            /*esse tipo de validação "inline" é diferente do que foi feito em EstoqueRequest.php*/
            $login = $data->validate([
                'name'=>'required',
                'password'=>'required'
            ]);
            if (Auth::attempt($login)) {
                return redirect()->route('estoque');
            } else {
                return redirect()->route('user.login')->with([
                    'error'=>'Usuário ou senha inválidos'
                ]);
            }
            
        }
        
        return view('user.login');
    }
    public function logout () {
        Auth::logout();
        return redirect()->route('user.login');
    }

}
