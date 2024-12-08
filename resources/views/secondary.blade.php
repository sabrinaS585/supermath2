<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styletelasecundaria.css') }}"> <!-- Estilo geral -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/imgs/icon.ico') }}">
    <title>@yield('title', 'SuperMath')</title>

    {{-- Estilos específicos da página --}}
    @yield('styles')
</head>
<body>
    <div class="galaxy-background"></div>
    <header class="cabecalho">
        <img class="cabecalho-img" src="{{ asset('img/imgs/logonome (2).png') }}" alt="logoSuperMath">
        <nav class="cabecalho-menu">
            <a href="{{ route('home') }}" class="cabecalho-menu-item">Início</a>
            <a href="{{ route('sair') }}" class="cabecalho-menu-item">Sair</a>

            <!-- <a href="{{ route('login.cadastrar') }}" class="cabecalho-menu-item">Inscreva-se</a> -->
            <!-- <a href="{{ route('login.login') }}" class="cabecalho-menu-item">Entrar</a> -->
        </nav>
    </header>

<main class="conteudo">
        @yield('content')
   
    <section class="conteudo-principal">
    <a href="{{ route('home') }}" class="buttonvoltar">&#8592;</a> {{-- Link para voltar à página inicial --}}

    <div class="conteudo-principal-escrito">
        <h1 class="conteudo-principal-escrito-titulo">Escolha uma operação</h1>
        <div class="container">
            <div>
                {{-- Links para cada operação --}}
                <a href="{{ route('operation', 'adicao') }}" class="button">Adição +</a>
                <a href="{{ route('operation', 'subtracao') }}" class="button">Subtração -</a>
                <a href="{{ route('operation', 'multiplicacao') }}" class="button">Multiplicação x</a>
                <a href="{{ route('operation', 'divisao') }}" class="button">Divisão ÷</a>
            </div>
        </div>
    </div>
    <img class="conteudo-principal-escrito-imagem" src="{{ asset('img/imgs/tcc.png') }}" alt="Imagem logo do site">
</section>
    </main>
    <footer class="rodape">
        <a class="rodape-texto">SuperMath</a>
    </footer>

