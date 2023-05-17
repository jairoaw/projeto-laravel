<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        $user=User::create($data);
        //event(new Registered($user));
        Mail::raw('email teste', function ($message) {
            $message->to('destinatario@email.com')->subject ('usuario criado com sucesso');          
        });
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
