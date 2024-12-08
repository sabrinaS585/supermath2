@extends('layouts.app')

@section('title', 'SuperMath - Página Inicial')

@php
    $hideInicio = true;

 
@endphp

@section('styles')
<link rel="stylesheet" href="{{ asset('css/styletelaprincipal.css') }}">
@endsection

@section('content') {{-- Início da seção de conteúdo --}}
<section class="conteudo-principal">
    <div class="conteudo-principal-escrito">
        <h1 class="conteudo-principal-escrito-titulo">SuperMath</h1>
        <h2 class="conteudo-principal-escrito-subtitulo">Bem-vindo, clique no botão para começar.</h2>
        <a href="{{ route('secondary') }}" class="button">Começar</a>
    </div>
    <img class="conteudo-principal-escrito-imagem" src="{{ asset('img/imgs/ini.png') }}" alt="Imagem logo do site">
</section>

<section id="sobre" class="conteudo-secundario">
    <h3 class="conteudo-secundario-titulo">O que é o SuperMath?</h3>
    <p class="conteudo-secundario-paragrafo">1. Site interativo com foco nas crianças que estão aprendendo as quatro operações básicas da matemática.</p>
    <p class="conteudo-secundario-paragrafo">2. Esse site possui uma área exclusiva para teoria de cada operação: adição, subtração, multiplicação e divisão.</p>
    <p class="conteudo-secundario-paragrafo">3. Possui um jogo para colocar em prática o que foi aprendido nas teorias.</p>
</section>
@endsection {{-- Fim da seção de conteúdo --}}
