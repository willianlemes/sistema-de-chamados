@extends('layout.site')

@section('titulo','Clientes')

@section('conteudo')

    <div class="container">
        <h2 class="center">
            Clientes
        </h2>
        <div class="row">
            <table>
                <thred>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Ação</th>
                    </tr>
                </thred>
                <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->id}}</td>
                        <td>{{$cliente->nome}}</td>
                        <td>
                            <a class="btn deep-orange" href="{{ route('cliente.editar',$cliente->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('cliente.excluir',$cliente->id) }}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('cliente.adicionar') }}">Adicionar</a>
        </div>
        <div class="row" >
            <div class="center-align" ></div>
        </div>
    </div>
@endsection
