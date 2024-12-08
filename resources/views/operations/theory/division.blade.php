<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/adteoria.css') }}" />
    <link rel="icon" type="images icon" href="{{ asset('img/icon.ico') }}">
    <title>Divisão</title>
</head>
<body>
    <main>
        <a href="{{ route('operation', 'divisao') }}" class="buttonvoltar">&#8592;</a>
        <h1>Divisão</h1>
        <br>

        <h2>O símbolo da divisão é esse “÷” ou “/”.</h2>
        <p>
            A divisão é uma operação matemática que ajuda a descobrir quantas vezes um número cabe em outro número, ela é o inverso da multiplicação. Por exemplo, imagine que você tem 12 balas e quer dividir igualmente com seus 3 amigos.
        </p>
        <img src="{{ asset('img/img divisao/criexe.png') }}" alt="sistema de unidade">
        <p>
            Para descobrir quantas balas cada um vai receber, você pode fazer uma divisão: 12 ÷ 3 = 4.
            <br><br>
            <strong>01- Sara e Sabrina são irmãs, juntas elas ganharam 100,00 R$. Qual será o valor que cada uma vai receber de forma igualitária?</strong>
        </p>
        <img src="{{ asset('img/img divisao/100dinheiro.png') }}" alt="sistema de unidade">
        <p>
            Para saber quanto cada uma vai receber, dividiremos 100 por 2!
            <br><br>
            Então, 100 ÷ 2 = 50. Cada uma vai ficar com 50,00 reais.
            <br><br>
            <strong>Exemplos</strong>
            <br><br>
            22 ÷ 2 = 11, pois 11 x 2 = 22
            <br><br>
            10 ÷ 5 = 2, pois 5 x 2 = 10
            <br><br>
            <strong>Então para realizar uma divisão é necessário que você pratique bem a multiplicação!</strong>
            <br><br>
            <strong>Passo a passo para realizar uma divisão</strong>
            <br><br>
            25 ÷ 5 = ?
            <br><br>
            <strong>Primeiro montaremos a divisão da seguinte forma:</strong>
        </p>
        <img src="{{ asset('img/img divisao/op1.png') }}" alt="sistema de unidade">
        <p>
            <strong>Depois tentaremos encontrar um número que multiplicado por 5 seja igual a 25.</strong>
        </p>
        <img src="{{ asset('img/img divisao/op1.png') }}" alt="sistema de unidade">
        <p>
            Sabemos que 5 × 5 = 25, depois de pegarmos o resultado do quociente (5) multiplicado pelo divisor (5), subtraímos esse resultado do dividendo. Então, a divisão ficaria dessa forma:
        </p>
        <img src="{{ asset('img/img divisao/op2.png') }}" alt="sistema de unidade">
        <p>
            Para facilitar o processo de divisão, temos um algoritmo, isto é, um passo a passo que pode facilitar. Para verificarmos esse processo, vamos tomar a seguinte divisão: 64 ÷ 4.
            <br><br>
            <strong>Primeiro passo: montar a operação utilizando o método da chave.</strong>
        </p>
        <img src="{{ asset('img/img divisao/op4.png') }}" alt="sistema de unidade">
        <p>
            Segundo passo: tentar encontrar um número que multiplicado por 4 seja igual a 64. Como essa não é uma tarefa fácil, vamos tomar somente o número 6 para dividir com o número 4, ou seja, o algarismo da dezena. Assim, devemos determinar um número inteiro que multiplicado por 4 seja igual a 6 ou que chegue o mais próximo possível. Veja:
        </p>
        <img src="{{ asset('img/img divisao/op5.png') }}" alt="sistema de unidade">
        <p>
            <strong>Terceiro passo: prosseguir a divisão descendo o algarismo da unidade, que não foi dividido, nesse caso, o 4.</strong>
        </p>
        <img src="{{ asset('img/img divisao/op6.png') }}" alt="sistema de unidade">
        <p>
            O processo termina quando obtemos que o resto é igual a 0. Caso contrário, devemos continuar a divisão seguindo os mesmos procedimentos.
            <br><br>
            <strong>E é assim que realizamos a divisão. Para exercitar mais o que você aprendeu clique na aba exercícios no início da página. Bons estudos!</strong>
        </p>
        <div>
            <h2>Sugestão de vídeo aula</h2>
            <iframe src="https://www.youtube.com/embed/NGG3gylKnWQ?si=Jtvd8ZAQWE5pON9D" title="YouTube video player" frameborder="0" width="400" height="300"></iframe>
        </div>
    </main>
</body>
</html>
