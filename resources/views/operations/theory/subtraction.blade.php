<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/adteoria.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('img/imgs/icon.ico') }}">
    <title>Teoria Subtração</title>
</head>
<body>
    <header>
        <!-- Header vazio ou com elementos futuros -->
    </header>
    
    <main>
        <a href="{{ route('operation', 'subtracao') }}" class="buttonvoltar">&#8592;</a>

        <h1>Subtração</h1>

            <h2>(-) esse é o sinal de subtração, lê-se MENOS.</h2>
            <p>Subtração é uma operação matemática que usamos para descobrir quanto sobra de alguma coisa depois de tirarmos outra coisa. Por exemplo, se você tem 6 balas e dá 2 balas para seu amigo, quantas balas sobram para você? Você pode descobrir isso usando a subtração. O resultado da subtração é o número de balas que você tem agora, que seria 4 balas.
                <br>
                <br>
                <strong> Vamos exercitar:</strong> 
                <br>
                <br>
                <strong>01-</strong> Você tem 5 balas e quer dar 3 ao seu colega, com quantas balas você ficará?</p>
                
                <img src="{{ asset('img/img subtração/bala.png')}}" alt="sistema de unidade">
                <p>5 – 3 = 2.
                    <br>
                    <br>
                <strong> No final você terá 2 balas, basta você tirar o que você deu!</strong> 
                    <br>
                    <br>
                    <strong>02-</strong> A professora pediu para João que tem 8 lápis, para dar 3 a sua colega Julia, com quantos lápis João ficou?
                    </p>
                <img src="{{ asset('img/img subtração/lapis.png')}}" alt="tabela de unidade">
                <p>8 – 3 = 5.
                    <br>
                    <br>
                <strong>No final João terá 5 lápis!</strong>    
                    <br>
                    <br>
                    <p><strong>03-</strong>Maria foi ao mercado com sua mãe e observou que sua mãe deu uma nota de 10,00 R$ ao atendente do supermercado, a mãe de Maria recebeu 8,00 R$ de troco, quanto foi que ela gastou?
                    </p>
                    <img src="{{ asset('img/img subtração/dinheiro 10.png')}}" alt="tabela de unidade">
                    
                    <p><strong>Para saber quanto a mãe de Maria gastou, vamos subtrair 8,00 R$ de 10,00 R$.
                    <br>
                    10,00 – 8,00 = 2,00.</strong>
                    <br>
                    <br>
                    <strong>No final a mãe gastou 2,00 reais.</strong>
                    <br></p>
                    <p>
                        Na subtração vamos subtrair unidade com unidade, dezena com dezena, centena com centena, e assim sucessivamente.
                        <br>
                        <br>
                        Para aprender a utilizar o algoritmo de subtração, vamos calcular o resultado da subtração 365 – 123. Primeiro montaremos o algoritmo escrevendo o número de maior valor (minuendo) em cima, e o de menor valor (subtraendo) embaixo.
                    </p>
                    <img src="{{ asset('img/img subtração/op1.png')}}" alt="tabela de unidade">
                    <p>
                        Agora calcularemos a diferença entre as unidades, dezenas e posteriormente, entre as centenas:
                        <br>
                        <strong>
                                Unidades: 5 – 3 = 2
                                <br>
                                Dezenas: 6 – 2 = 4
                                <br>
                                Centenas: 3 – 1= 2
                        </strong>
                    </p>
                    <img src="{{ asset('img/img subtração/op2.png')}}" alt="tabela de unidade">
                    <p>
                        <strong>Vamos calcular 456 – 275
                            <br>
                            Primeiros montamos a operação </strong> 
                    </p>
                    <img src="{{ asset('img/img subtração/op3.png')}}" alt="tabela de unidade">
                    <p>
                        Vamos subtrair as unidades 6 – 5 = 1
                        <br>
                        Agora vamos subtrair as dezenas, mas perceba que não podemos tirar 5 dezenas de 7 dezenas, para isso vamos desfazer 1 centena, sabemos que uma centena tem 10 dezenas, então faremos a subtração de 15 por 7.
                        <br>
                        <strong>15 – 7 = 8</strong>

                    </p>
                    <img src="{{ asset('img/img subtração/op4.png')}}" alt="tabela de unidade">
                    <p>
                        Agora subtrairmos as centenas, como desfazemos 1 centena, ficamos com 3, assim fazemos 3 – 2.
                        <br>
                        <strong>3 – 2 = 1</strong>

                    </p>

                    <img src="{{ asset('img/img subtração/op5.png')}}" alt="tabela de unidade">
                    <br>
                    <p><strong>456 – 275 = 181</strong></p>


                    <h2>Jogo de sinal (nível avançado)</h2>
                    <p> <strong>5 – 14</strong>
                        <br>
                            Observe que o minuendo é menor que o subtraendo, ou seja, 14 > 5. Para isso conservarmos o sinal do maior número (14), e sabemos que (14 – 5 = 9) então colocamos o sinal do maior número. Assim, o resultado é – 9.
                        <br>
                        <strong>
                            Exemplos:
                            <br>
                            6 – 9 =?
                            <br>
                            Sabemos que (9 - 6 = 3), logo conservarmos o sinal do maior.
                            <br>
                            6 – 9 = - 3
                        </strong>
                        </p>
                            <h3>Propriedades da subtração</h3> 
                            <p>
                                <strong>A subtração não é comutativa</strong>
                                <br>
                                Na subtração o que é minuendo e o que é subtraendo é relevante, pois, <strong>se alterarmos a ordem, a diferença será diferente.</strong>
                                <br>
                                <strong>Exemplo:</strong>
                                <br>
                                <strong>8 – 5 = 3</strong>
                                <br>
                                <strong>
                                    O que é diferente de:
                                    <br>
                                    5 – 8 = -3
                                </strong>
                                <br>
                                <br>
                                <strong>
                                    A subtração não é associativa
                                </strong>
                                <br>
                                <br>
                                A associatividade não vale na adição.
                                <br>
                                <strong>(a – b) – c ≠ a – (b – c)</strong>
                                <br>
                               <strong>Exemplo:</strong>  
                                <br>
                                (6-3) – 2 = 3 – 2 = 1
                                <br>
                                6 – (3-2) = 6 – 1 = 5
                                <br>
                                <br>
                                <strong>
                                    É assim que se realiza a subtração. Para exercitar mais o que você aprendeu clique na aba exercícios no início da página. Bons estudos!

                                </strong>


                            </p> 
                            <div>
                                <h2>Sugestão de vídeo aula</h2>
                                <iframe src="https://www.youtube.com/embed/a-Q4MaWDIO8?si=sq-1E7fwDqPXTMXZ" title="YouTube video player" frameborder= "0" width="400" height="300"></iframe>
        </div>
    </main>
</body>
</html>
