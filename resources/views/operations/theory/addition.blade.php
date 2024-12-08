<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/adteoria.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('img/imgs/icon.ico') }}">
    <title>Teoria Adição</title>
</head>
<body>
    <header>
        <!-- Header vazio ou elementos futuros -->
    </header>
    
    <main>
        <a href="{{ route('operation', 'adicao') }}" class="buttonvoltar">&#8592;</a>

        <h1>ADIÇÃO</h1>

        <h2>Para entendermos como funciona a adição, vamos aprender o que é Sistema de Numeração Decimal: unidade, dezena e centena.</h2>
        <p>O Sistema de Numeração Decimal surgiu da necessidade de se contarem quantidades maiores.
            A palavra decimal lembra o nome do número 10. Nele, contamos formando grupos de 10 em 10. 
            Cada elemento do grupo é chamado de unidade. Um grupo de 10 unidades é chamado de dezena. 
            Um grupo de 10 dezenas é chamado de centena.
        </p>
        <img src="{{ asset('img/imgs/img Adição/unidade.png') }}" alt="Sistema de unidade">
        <p>Em um numeral cada algarismo ocupa uma ordem. A unidade é a primeira ordem, a dezena é a segunda ordem, e a centena é a terceira ordem. Observe como o número 193 foi representado no quadro de ordens.</p>
        <img src="{{ asset('img/imgs/img Adição/tabelauni.png') }}" alt="Tabela de unidade">

        <h3>Outros exemplos</h3>
        <p> 
            164 = 1 centena + 6 dezenas + 4 unidades • Cento e sessenta e quatro<br>
            Realizando a decomposição do número, temos:<br>
            504 → 500 + 0 + 4<br>
            5 centenas (5 x 100) – Quinhentas unidades<br>
            0 dezena (0 x 10) – Zero unidade e <br>
            4 unidades
        </p>

        <h4>"Ordem e classe no sistema decimal"</h4>
        <img src="{{ asset('img/imgs/img Adição/ordemsistema.png') }}" alt="Ordens no sistema decimal">

        <h4>Agora vamos para o nosso estudo sobre adição!</h4>
        <p>(+) Esse é o sinal da adição, lê-se MAIS.
           Adição é um jeito de juntar duas ou mais coisas para descobrir quantas coisas você tem no total. Por exemplo, se você tem 2 maçãs e ganha mais 3 maçãs, você pode somar essas maçãs juntas usando a adição. O resultado da adição é o total de maçãs que você tem agora, que seria 5 maçãs.
        </p>
        <img src="{{ asset('img/img Adição/maça.png') }}" alt="Exemplo de adição com maçãs">

        <h5>Exercícios:</h5>
        <p>
            1- Digamos que você tem 3 maçãs e seu coleguinha te deu mais 6 maçãs. Quantas no total você tem agora?<br>
            2- Você possui 4 bonecas e compra mais 3. Qual é o total de bonecas?
        </p>
        <img src="{{ asset('img/img Adição/boneca.png') }}" alt="Exemplo de adição com bonecas">

        <h3>Quantas árvores tem na casa de Miguel?</h3>
        <p>Na casa de Miguel têm 10 laranjeiras, 1 mangueira, 2 limoeiros, 12 aceroleiras e 2 bananeiras.</p>
        <img src="{{ asset('img/img Adição/arvore.png') }}" alt="Adição de árvores">

        <h4>Adição com reserva</h4>
        <p>
            Ao somar os algarismos em uma ordem, caso o resultado seja maior que 9, devemos acrescentar esta quantidade à ordem seguinte.<br>
            <img src="{{ asset('img/img Adição/exemploreserva.png') }}" alt="Exemplo de adição com reserva">
        </p>

        <div>
            <h2>Sugestão de vídeo aula</h2>
            <iframe src="https://www.youtube.com/embed/HjyCT6K5O1I?si=DCTCFW95-CgO8UwT" frameborder="0" width="400" height="300"></iframe>
        </div>
    </main>
</body>
</html>
