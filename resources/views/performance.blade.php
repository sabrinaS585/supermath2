<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/jogo.css') }}">
    <link rel="icon" type="images icon" href="{{ asset('img/icon.ico') }}">
    <title>Desempenho - Adição</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="galaxy-background"></div>
    <header class="cabecalho">
        <img class="cabecalho-img" src="{{ asset('img/imgs/logonome (2).png') }}" alt="logoSuperMAth">
        <nav class="cabecalho-menu">
            <!-- <a href="{{ route('home') }}" class="cabecalho-menu-item">Início</a> -->
            <!-- <a class="cabecalho-menu-item">Sobre</a> -->
            <!-- <a class="cabecalho-menu-item">Inscreva-se</a> -->
            <!-- <a class="cabecalho-menu-item">Entrar</a> -->
        </nav>
    </header>
    <main class="conteudo">
        <section class="conteudo-principal">
            <a href="{{ route('operation', $valores['tipo']) }}" class="buttonvoltar">&#8592;</a>
            <div class="conteudo-principal-escrito">
                <h1 class="conteudo-principal-escrito-titulo">Desempenho - {{$valores['texto']}}</h1>
                <div class="pontuacao">
                    <p>Pontuação: <span>{{ $valores['pontuacao'] }}</span></p>
                    <p>Acertos: <span>{{ $valores['acertos'] }}</span></p>
                    <p>Erros: <span>{{ $valores['erros'] }}</span></p>
                </div>
                <canvas id="adicaoChart"></canvas>
                <form method="POST" action="{{ route('resetar', $valores['tipo']) }}">
                    @csrf
                    <button type="submit" class="botao-resetar">Restaurar Pontuação</button>
                </form>
               
            </div>
        </section>
    </main>
    <footer class="rodape">
        <a class="rodape-texto">SuperMath</a>
    </footer>
    <script>
        const ctx = document.getElementById('adicaoChart').getContext('2d');
        const adicaoChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Pontuação', 'Acertos', 'Erros'],
                datasets: [{
                    label: 'Desempenho em {{$valores["texto"]}}',
                    data: [
                        {{ $valores['pontuacao'] }},
                        {{ $valores['acertos'] }},
                        {{ $valores['erros'] }}
                    ],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
