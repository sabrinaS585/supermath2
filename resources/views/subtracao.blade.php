<!-- resources/views/subtracao.blade.php -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/jogo.css') }}"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/imgs/icon.ico') }}">
    <title>Operações - Subtração</title>
</head>
<body>
    <div class="galaxy-background"></div>
    <header class="cabecalho">
        <img class="cabecalho-img" src="{{ asset('img/imgs/logonome (2).png') }}" alt="logoSuperMath">
        <nav class="cabecalho-menu">
            <a href="{{ route('subtracao') }}" class="cabecalho-menu-item">Subtração</a>
            <a href="{{ route('desempenhoSub') }}" class="cabecalho-menu-item">Desempenho</a>
        </nav>
    </header>
    <main class="conteudo">
        <section class="conteudo-principal">
            <a href="{{ route('subtracao') }}" class="buttonvoltar">&#8592;</a>
            <div class="conteudo-principal-escrito">
                <h1 class="conteudo-principal-escrito-titulo">Jogo de Subtração</h1>
                <div class="quiz">
                    <div class="question">
                        <p id="questionText"></p>
                    </div>
                    <div class="options" id="optionsContainer">
                    </div>
                    <br><br>
                    <form method="POST" action="{{ route('processarSubtracao') }}">
                        @csrf
                        <input type="hidden" name="correctAnswer" id="correctAnswer">
                        <input type="hidden" name="userAnswer" id="userAnswer">
                        <button class="botao-verificar" type="submit">Verificar</button>
                    </form>
                    <br><br>
                    @if(session('message'))
                        <p>{{ session('message') }}</p>
                    @endif
                    <div class="pontuacao">
                        <p>Pontuação: <span id="score">{{ session('score_subtracao') ?? 0 }}</span></p>
                        <p>Acertos: <span id="correct">{{ session('correct_subtracao') ?? 0 }}</span></p>
                        <p>Erros: <span id="incorrect">{{ session('incorrect_subtracao') ?? 0 }}</span></p>
                    </div>
                    <a href="{{ route('desempenhoSub') }}" class="botao-desempenho">Ver Desempenho</a>
                </div>
            </div>
        </section>
    </main>
    <footer class="rodape">
        <a class="rodape-texto">SuperMath</a>
    </footer>
    <script>
        // Gera questões de subtração
        function generateQuestion() {
            let num1 = Math.floor(Math.random() * 10) + 1;
            let num2 = Math.floor(Math.random() * 10) + 1;
            if (num1 < num2) {
                [num1, num2] = [num2, num1];
            }
            let correctAnswer = num1 - num2;

            let question = num1 + ' - ' + num2;
            return { question, correctAnswer };
        }

        // Gera opções de resposta
        function generateOptions(correctAnswer) {
            let options = [];
            options.push(correctAnswer);

            while (options.length < 4) {
                let randomNum = Math.floor(Math.random() * 10);
                if (!options.includes(randomNum) && randomNum !== correctAnswer) {
                    options.push(randomNum);
                }
            }

            options = options.sort(() => Math.random() - 0.5);
            return options;
        }

        function displayQuestion() {
            let generated = generateQuestion();
            let question = generated.question;
            let correctAnswer = generated.correctAnswer;

            document.getElementById('questionText').textContent = question + ' = ';
            document.getElementById('correctAnswer').value = correctAnswer;

            let options = generateOptions(correctAnswer);
            let optionsContainer = document.getElementById('optionsContainer');
            optionsContainer.innerHTML = '';

            options.forEach(option => {
                let button = document.createElement('button');
                button.textContent = option;
                button.classList.add('option');
                button.onclick = function() {
                    document.getElementById('userAnswer').value = option;
                };
                optionsContainer.appendChild(button);
            });
        }

        displayQuestion();
    </script>
</body>
</html>
