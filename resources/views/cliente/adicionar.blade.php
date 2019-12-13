@extends('layout.site')

@section('titulo','Adicionar Cliente')

@section('conteudo')

    <div class="container">
        <h2 class="center">
            Adicionar Cliente
        </h2>
        <div class="row">
            <form action="{{ route('cliente.salvar') }}" method="post">
                {{ csrf_field() }}
                @include('cliente._form')
                <button class="btn deep-orange">Salvar</button>
            </form>
        </div>
    </div>
@endsection
