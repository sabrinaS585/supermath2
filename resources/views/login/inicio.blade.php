@extends('layouts.app')

@php
    $hideInicio = true; // Oculta o botão "Início"
    $hideSair = true; 
    $hideRemover = true; 
    $hideAtualizar = true; 
    $hideMensagem = true; 

@endphp

@section('title', 'SuperMath - Login e Registro')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/estilo_inicio.css') }}">
@endsection

@section('content')
<section class="conteudo-principal">
    <div class="conteudo-centralizado">
        <h1 class="conteudo-principal-escrito-titulo">SuperMath</h1>
        <h2 class="conteudo-principal-escrito-subtitulo">Faça login ou registre-se para continuar!</h2>

        <div class="auth-buttons">
            <a href="{{ route('login.login') }}" class="button">Login</a>
            <a href="{{ route('login.cadastrar') }}" class="button">Registrar</a>
        </div>
    </div>
</section>
@endsection
