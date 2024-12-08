<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/adteoria.css') }}" />
    <link rel="icon" type="images icon" href="{{ asset('img/icon.ico') }}">
    <title>Multiplicação</title>
</head>
<body>
    <main>
        <a href="{{ route('operation', 'multiplicacao') }}" class="buttonvoltar">&#8592;</a>
        <h1>Multiplicação</h1>
        <br>

        <h2>O símbolo da multiplicação é esse “x” ou “.”.</h2>
        <p>
            Multiplicação é <strong>a soma sucessiva de um número por ele mesmo.</strong> O resultado da multiplicação é conhecido como produto, e os números que serão multiplicados são chamados de fatores.
            <br><br>
            <strong>Por exemplo:</strong> 
            <br><br>
            <strong>01-</strong> Vamos dizer que você tem 4 grupos com 3 pirulitos, quantos pirulitos você tem?
        </p>
        <img src="{{ asset('img/img multiplicacao/pirulito.png') }}" alt="sistema de unidade">
        <p>
            3 + 3 + 3 + 3 = 12
            <br><br>
            <strong>Assim temos 12 pirulitos!</strong>
            <br><br>
            <strong>Quantas vezes aparece o número 3?</strong>
            <br><br>
            O 3 aparece 4 vezes, então dizemos que é 4 x 3 = 12. Veja que é mais simples do que somar o 3, 4 vezes, basta multiplicar.
            <strong>3 e 4 são chamados de fatores</strong>
            <br><br>
            <strong>e o 12 de produto.</strong>
            <br><br>
            <strong>02-</strong> Observe as peças de um dominó, há quantas bolinhas contando com todas as peças?
        </p>
        <img src="{{ asset('img/img multiplicacao/domino.png') }}" alt="tabela de unidade">
        <p>
            <br><br>
            <strong>O resultado é 15, pois existem 3 peças, cada peça contém 5 bolinhas, então, multiplicaremos 3x5 = 15.</strong>
        </p>

        <p>
            Agora vamos aprender a calcular 21 x 4.
            <br><br>
            Primeiramente vamos montar o algoritmo, para isso colocamos o número de maior valor em cima:
        </p>
        <img src="{{ asset('img/img multiplicacao/op1.png') }}" alt="tabela de unidade">
        <p>
            Logo após, multiplicaremos as unidades: 4 x 1 = 4.
        </p>
        <img src="{{ asset('img/img multiplicacao/op2.png') }}" alt="tabela de unidade">
        <p>
            Agora vamos <strong>multiplicar a dezena do primeiro fator com a unidade do segundo fator</strong>, ou seja, 4 x 2 = 8, e o resultado será colocado na frente do primeiro resultado.
        </p>
        <img src="{{ asset('img/img multiplicacao/op3.png') }}" alt="tabela de unidade">
        <p>
            Assim, o produto de 21 x 4 = 84.
            <br><br>
            <strong>Agora faremos um caso um pouco mais complexo, quando a multiplicação entre as unidades resulta em um número maior que 9.</strong>
            <br><br>
            Vamos calcular 42 × 5.
        </p>
        <img src="{{ asset('img/img multiplicacao/op4.png') }}" alt="tabela de unidade">
        <p>
            Realizando a <strong>multiplicação entre as unidades</strong>, sabemos que 5 × 2 = 10. Nesse caso, vamos colocar o 0 no produto e o 1 acima da casa das dezenas para somar com o próximo resultado.
        </p>
        <img src="{{ asset('img/img multiplicacao/op5.png') }}" alt="tabela de unidade">
        <p>
            <strong>Agora realizaremos a segunda multiplicação, somando 1 ao seu resultado</strong>, ou seja, 5 × 4 + 1 = 20 + 1 = 21. Como não há mais nenhum número no primeiro fator, vamos escrever 21 no produto.
        </p>
        <img src="{{ asset('img/img multiplicacao/op6.png') }}" alt="tabela de unidade">
        <p>
            <strong>Então 42 x 5 = 210.</strong>
            <br><br>
            E é assim que realizamos a multiplicação. Para exercitar mais o que você aprendeu clique na aba exercícios no início da página. Bons estudos!
        </p>

        <div>
            <h2>Sugestão de vídeo aula</h2>
            <iframe src="https://www.youtube.com/embed/DjEx1pdEqSM?si=NlJt4ULfmiMHY2oZ" title="YouTube video player" frameborder="0" width="400" height="300"></iframe>
        </div>
    </main>
</body>
</html>
