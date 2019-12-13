@extends('layout.site')

@section('titulo','Lista de Chamados')

@section('conteudo')

    <div class="container">
        <h3 class="center">
            Chamados
        </h3>
        <div class="row">
            <table>
                <thred>
                    <tr>
                        <th>Título</th>
                        <th>Data</th>
                        <th>Cliente</th>
                        <th>Ação</th>
                    </tr>
                </thred>
                <tbody>
                @foreach($chamados as $chamado)
                    <tr>
                        <td>{{$chamado->titulo}}</td>
                        <td>{{ date("d/m/Y", strtotime($chamado->data)) }}</td>
                        <td>{{$chamado->cliente_nome}}</td>
                        <td>
                            <a class="btn deep-orange" href="{{ route('chamado.editar',$chamado->id) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('chamado.adicionar') }}">Novo</a>
        </div>
        {{ $chamados->links() }}
    </div>

@endsection
