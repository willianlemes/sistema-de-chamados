<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper deep-orange">
                <a href="#!" class="brand-logo">Sistema de Chamados</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    @if(Auth::guest())
                        <li><a href="{{ route('site.login') }}">Entrar</a></li>
                    @else
                        <li><a href="{{ route('cliente.listar') }}">Clientes</a></li>
                        <li><a href="{{ route('chamado.listar') }}">Chamados</a></li>
                        <li><a href="{{ route('site.login.sair') }}">{{ Auth::user()->name }} | Sair</a></li>
                    @endif
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile">
            @if(Auth::guest())
                <li><a href="{{ route('site.login') }}">Entrar</a></li>
            @else
                <li><a href="{{ route('cliente.listar') }}">Clientes</a></li>
                <li><a href="{{ route('chamado.listar') }}">Chamados</a></li>
                <li><a href="{{ route('site.login.sair') }}">{{ Auth::user()->name }} | Sair</a></li>
            @endif
        </ul>
    </header>

    @yield('conteudo')


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('select').formSelect();
            $('.sidenav').sidenav();
            $('.datepicker').datepicker({
                format: "dd/mm/yyyy"
            });
        });
    </script>
</body>
</html>
