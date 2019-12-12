@extends('layout.site')

@section('titulo','Adicionar Cliente')

@section('conteudo')

    <div class="container">
        <h2 class="center">
            Entrar
        </h2>
        <div class="row">
            <form action="{{ route('site.login.entrar') }}" method="post">
                {{ csrf_field() }}
                <div class="input-field">
                    <input type="text" name="email">
                    <label>E-mail</label>
                </div>

                <div class="input-field">
                    <input type="password" name="senha">
                    <label>Senha</label>
                </div>

                <button class="btn blue">Entrar</button>
            </form>
        </div>
    </div>
@endsection
