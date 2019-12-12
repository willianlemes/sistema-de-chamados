<?php

namespace App\Http\Controllers\api;

use App\Chamado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChamadoController extends Controller
{
    public function listarTodos()
    {
        return DB::table('chamados')
                     ->leftJoin('clientes','chamados.id_cliente','=','clientes.id')
                     ->select('chamados.id',
                               'chamados.titulo',
                               'chamados.data',
                               'clientes.nome')
                     ->get();
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
