@extends('layouts.app')

@section('title', 'SuperMath - Cadastro')

@php
    $hideInicio = true; // Oculta o botão "Início"
    $hideSair = true; 
    $hideRemover = true; 
    $hideAtualizar = true; 
    $hideMensagem = true; 
@endphp

@section('styles')
<link rel="stylesheet" href="{{ asset('css/estilo_inicio.css') }}">
@endsection

@section('content')
<section class="conteudo-principal">
    <div class="conteudo-centralizado">
        <h1 class="conteudo-principal-escrito-titulo">Atualizar Usuário</h1>

        <!-- Exibir mensagem de erro, se existir -->
        @if($mensagem = Session::get('erro'))
            <div class="mensagem-erro">
                {{ $mensagem }}
            </div>
        @endif

        <!-- Botão de Voltar -->
        

        <!-- Formulário de cadastro -->
        <form action="{{ route('login.atualizarCompleto') }}" method="POST" class="formulario">
            @csrf

            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="input-text" required>

            <!-- <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="input-text" required> -->

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" class="input-text" required>

            <button type="submit" class="button">Atualizar</button>

            <button type="button" onclick="window.location.href='{{ route('home') }}'" class="button voltar-button">Voltar</button>
        </form>
    </div>
</section>
@endsection
