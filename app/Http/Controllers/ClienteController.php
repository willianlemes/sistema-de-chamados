<?php

namespace App\Http\Controllers;

use App\Cliente;
use http\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view('cliente.index',compact('clientes'));
    }

    public function criar(Request $req){
        dd($req->all());
    }

    public function adicionar(){
        return view('cliente.adicionar');
    }

    public function salvar(Request $req){
        $cliente = $req->all();
        Cliente::create($cliente);
        return redirect()->route('cliente.listar');
    }

    public function alterar(Request $req, $id){
        $cliente = $req->all();
        Cliente::find($id)->update($cliente);
        return redirect()->route('cliente.listar');
    }

    public function editar($id){
        $cliente = Cliente::find($id);
        return view('cliente.editar',compact('cliente'));
    }

    public function excluir($id){
        Cliente::find($id)->delete();
        return redirect()->route('cliente.listar');
    }
}

