@extends('layout.site')

@section('titulo','Novo Chamado')

@section('conteudo')

    <div class="container">
        <h2 class="center">
            Novo Chamado
        </h2>
        <div class="row">
            <form action="{{ route('chamado.salvar') }}" method="post">
                {{ csrf_field() }}
                @include('chamado._form')
                <div class="row">
                    <button class="btn blue">Salvar</button>
                </div>

            </form>
        </div>
    </div>
@endsection
