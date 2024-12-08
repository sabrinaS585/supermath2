<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/styleadicao.css') }}" />
  <link rel="icon" type="image/x-icon" href="{{ asset('img/imgs/icon.ico') }}">
  <title>Adição</title>
</head>
<body>
  <div class="galaxy-background"></div>
  <header class="cabecalho">
      <img class="cabecalho-img" src="{{ asset('img/imgs/logonome (2).png') }}" alt="logoSuperMath">
      <nav class="cabecalho-menu">
          <a href="{{ route('home') }}" class="cabecalho-menu-item">Início</a>
          <a href="{{ route('sair') }}" class="cabecalho-menu-item">Sair</a>

          <!-- <a href="{{ route('login.cadastrar') }}" class="cabecalho-menu-item">Inscreva-se</a> -->
          <!-- <a href="{{ route('login.login') }}" class="cabecalho-menu-item">Entrar</a> -->
      </nav>
  </header>

  <main class="conteudo">
      <section class="conteudo-principal">
        <a href="{{ route('secondary') }}" class="buttonvoltar">&#8592;</a>
        <div class="conteudo-principal-escrito">
          <h1 class="conteudo-principal-escrito-titulo">Escolha uma opção</h1>
          <div class="container">
            <div>
           
              <a href="{{ route('theory', 'addition') }}" class="button">TEORIA</a>
              <a href="{{ route('exercicios', 'adicao') }}" class="button">EXERCÍCIOS</a>
              <a href="{{ route('calculadora') }}" class="button">CALCULADORA</a>
              <a href="{{ route('performance', 'adicao') }}" class="button">DESEMPENHO</a>
            </div>
            <img class="conteudo-principal-escrito-imagem" src="{{ asset('img/imgs/abees.png') }}" alt="Imagem logo do site">
          </div>
        </div>
      </section>
  </main>

  <footer class="rodape">
      <a class="rodape-texto">SuperMath</a>
  </footer>
</body>
</html>
