@extends('layout.site')

@section('titulo','Editar Cliente')

@section('conteudo')

    <div class="container">
        <h2 class="center">
            Adicionar Cliente
        </h2>
        <div class="row">
            <form action="{{ route('cliente.alterar',$cliente->id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('cliente._form')
                <button class="btn deep-orange">Alterar</button>
            </form>
        </div>
    </div>
@endsection
