<?php

namespace App\Http\Controllers;

use App\Chamado;
use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChamadoController extends Controller
{
    //
    public function listar(){
        return DB::table('chamados')
            ->leftJoin('clientes','chamados.id_cliente','=','clientes.id')
            ->select('chamados.*',
                              'clientes.nome as cliente_nome')
            ->paginate(4);
    }

    public function index(){
        $chamados = $this->listar();
        return view('chamado.index',compact('chamados'));
    }

    public function editar($id){
        $chamado = Chamado::find($id);
        $clientes = Cliente::pluck('nome','id');
        $selectedID = $chamado->id_cliente;
        return view('chamado.editar',compact('chamado','clientes', 'selectedID'));
    }

    public function adicionar(){
        $clientes = Cliente::pluck('nome','id');
        $selectedID = null;
        return view('chamado.adicionar',compact('clientes', 'selectedID'));
    }

    public function salvar(Request $req){
        $chamado = $req->all();
        $chamado['data'] = \DateTime::createFromFormat ('d/m/Y', $chamado['data']);
        Chamado::create($chamado);
        return redirect()->route('chamado.listar');
    }

    public function alterar(Request $req, $id){
        $chamado = $req->all();
        $chamado['data'] = \DateTime::createFromFormat ('d/m/Y', $chamado['data']);
        Chamado::find($id)->update($chamado);
        return redirect()->route('chamado.listar');
    }
}
