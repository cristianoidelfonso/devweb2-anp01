<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Veículos</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/app-assets/css/template.css" >

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>
<body>
    {{-- Menu Topo --}}
    <nav class="navbar-material">
        <div class="nav-wrapper">
        <a href="/" class="brand-logo"><strong>{{strtoupper('blade')}}</strong> {{'Auto Mecânica'}}</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/novo-servico">Cadastrar Serviço</a></li>
                <li><a href="/lista-servicos">Listar Serviços</a></li>
                <li><a href="/sobre">Sobre</a></li>
                <li><a href="/contato">Contato</a></li>
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="/novo-servico">Cadastrar Serviço</a></li>
        <li><a href="/lista-servicos">Listar Serviços</a></li>
        <li><a href="/sobre">Sobre</a></li>
        <li><a href="/contato">Contato</a></li>
    </ul>

    {{-- Conteúdo principal --}}
    <div class="container">

        @yield('conteudo-principal')

    </div>

    {{-- Conteúdo Secundario --}}
    <div class="container">

        @yield('conteudo-secundario')

    </div>

    {{-- Rodapé --}}
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
            &copy; {{date('Y')}} Copyright
            <a class="grey-text text-lighten-4 right" href="#" hidden>More Links</a>
            </div>
        </div>
    </footer>



    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
