<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function entrar(Request $req){
        $login = $req->all();
        if (Auth::attempt(['email'=>$login['email'],'password'=>$login['senha']])):
            return redirect()->route('cliente.listar');
        else:
            return redirect()->route('site.login');
        endif;
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('site.login');
    }
}
