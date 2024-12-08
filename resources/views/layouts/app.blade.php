<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styletelaprincipal.css') }}"> <!-- Estilo geral -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/imgs/icon.ico') }}">
    <title>@yield('title', 'SuperMath')</title>

    {{-- Estilos específicos da página --}}
    @yield('styles')
</head>
<body>
    <div class="galaxy-background"></div>
    <header class="cabecalho">
        <div class="cabecalho-div">
            
            <img class="cabecalho-img" src="{{ asset('img/imgs/logonome (2).png') }}" alt="logoSuperMath">
            @if(!isset($hideMensagem) || !$hideMensagem)
                <p class="mensagem-usuario">Bem-Vindo(a), {{session('nome_usuario')}}</p>
            @endif
        </div>
        <div class="cabecalho-div">
            <nav class="cabecalho-menu">
                @if(!isset($hideInicio) || !$hideInicio)
                <a href="{{ route('home') }}" class="cabecalho-menu-item">Início</a>
                @endif
                
                @if(!isset($hideSair) || !$hideSair)
                <a href="{{ route('sair') }}" class="cabecalho-menu-item">Sair</a>
                @endif
                @if(!isset($hideRemover) || !$hideRemover)
                <a href="{{ route('removerUsuario') }}" class="cabecalho-menu-item">Remover Usuário</a>
                @endif

                @if(!isset($hideAtualizar) || !$hideAtualizar)
                <a href="{{ route('login.atualizar') }}" class="cabecalho-menu-item">Atualizar Dados</a>
                @endif
                <!-- <a href="{{ route('login.cadastrar') }}" class="cabecalho-menu-item">Inscreva-se</a>
                <a href="{{ route('login.login') }}" class="cabecalho-menu-item">Entrar</a> -->
            </nav>
        </div>
    </header>
    <main class="conteudo">
        @yield('content')
    </main>
    <footer class="rodape">
        <a class="rodape-texto">SuperMath</a>
    </footer>
</body>
</html>
