
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/jogo.css') }}"/>
    <link rel="icon" type="images icon" href="{{ asset('img/imgs/icon.ico') }}">
    <title>Operações - Divisão</title>
</head>
<body>
    <div class="galaxy-background"></div>
    <header class="cabecalho">
        <img class="cabecalho-img" src="{{ asset('img/imgs/logonome (2).png') }}" alt="logoSuperMath">
        <nav class="cabecalho-menu">
            <!-- <a href="{{{ route('home') }}}" class="cabecalho-menu-item">Início</a> -->
            <!-- <a href="{{ route('sair') }}" class="cabecalho-menu-item">Sair</a> -->

            <!-- <a class="cabecalho-menu-item">Sobre</a> -->
            <!-- <a class="cabecalho-menu-item">Inscreva-se</a> -->
            <!-- <a class="cabecalho-menu-item">Entrar</a> -->
        </nav>
    </header>
    <main class="conteudo">
        <section class="conteudo-principal">
        <a href="{{ route('salvarResolucao', 'divisao') }}" class="buttonvoltar">&#8592;</a>
            <div class="conteudo-principal-escrito">
                <h1 class="conteudo-principal-escrito-titulo">Jogo de Divisão</h1>
                <div class="quiz">
                    <div class="question">
                        <p>{{ $question }}</p>
                    </div>
                    <div class="options">
                        <form method="POST" action="{{ route('conferirResposta', 'divisao') }}">
                            @csrf
                            <input type="hidden" name="correctAnswer" value="{{ $correctAnswer }}">
                            <input type="hidden" name="userAnswer" id="userAnswer">
                            <div id="optionsContainer">
                                @foreach($options as $option)
                                    <button type="button" class="option" onclick="setAnswer({{ $option }})">{{ $option }}</button>
                                @endforeach
                            </div>
                            <br>
                            <button class="botao-verificar" type="submit">Verificar</button>
                        </form>
                    </div>
                    <div class="pontuacao">
                        <p>Pontuação: <span id="score">{{ session('score_divisao', 0) }}</span></p>
                        <p>Acertos: <span id="correct">{{ session('correct_divisao', 0) }}</span></p>
                        <p>Erros: <span id="incorrect">{{ session('incorrect_divisao', 0) }}</span></p>
                    </div>
                    <a href="{{ route('desempenhoDireto', 'divisao') }}" class="botao-desempenho">Ver Desempenho</a>
                </div>
            </div>
            <img class="conteudo-principal-escrito-imagem" src="{{ asset('img/imgs/gp.png') }}" alt="Imagem logo do site">
        </section>
    </main>
    <footer class="rodape">
        <a class="rodape-texto">SuperMath</a>
    </footer>

    <script>
        function setAnswer(answer) {
            document.getElementById('userAnswer').value = answer;
        }
    </script>
</body>
</html>