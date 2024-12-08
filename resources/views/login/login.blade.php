@extends('layouts.app')

@section('title', 'SuperMath - Login')

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
        <h1 class="conteudo-principal-escrito-titulo">Login</h1>

        @if($mensagem = Session::get('erro'))
            <div class="alert alert-error">{{ $mensagem }}</div>
        @endif

        @error('error')
            <div class="alert alert-error">{{ $message }}</div>
        @enderror

        @if(session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif

    
        @if($errors->any())
            <div class="alert alert-error">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
            </div>
        @endif

        <form action="{{ route('login.auth') }}" method="POST" class="formulario">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="input-text" placeholder="Digite seu email" required>
            
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" class="input-text" placeholder="Digite sua senha" required>
            
            <button type="submit" class="button">Entrar</button>

            <button type="button" onclick="window.location.href='{{ route('inicio') }}'" class="button voltar-button">Voltar</button>


        </form>
    </div>
</section>
@endsection
