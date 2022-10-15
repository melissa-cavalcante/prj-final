<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projeto Final</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="home.css">
</head>

<body>
  <div class="logo">
    <img src="./img/karpa.png" id="logo">
  </div>

  <div class="navbar">
    <nav>
      <a href="#">Home</a>
      <a href="#">Menus</a>
      <a href="#">Sobre nós</a>
      <a href="#">Login</a>
      <a href="#">Cadastre-se</a>
    </nav>
  </div>

  <div class="linha">
    <hr id="linha">
  </div>
  <div class="header">
    <header>
      <button>reserve agora!</button>
    </header>
  </div>

  <div class="content">
    <div class="card">
      <div class="top-card">
        <h2 class="title">titulo</h2>
        <p class="secondText">descricao sobre o produto que sera inserido</p>
      </div>
      <div class="mediaCard"></div>
      <div class="bottonCard">
        <div class="bottonText">resumo sobre o produto que sera inserido</div>
        <div class="actionCard"></div>
            <button class="actions">ver</button>
      </div>
    </div>
  </div>

  
  <?php
  $vetorI = array(
    array(
      "imagem" => 'img/reChef/hotRoll.jpg',
      "titulo" => 'hot roll',
      "descricao" => '8 unidades de sushis tradicionais recheados com salmão, empanados e fritos.',
      "preco" => 'R$ 38,00'
    ),
    array(
      "imagem" => 'img/reChef/temakiIII.jpg',
      "titulo" => 'temaki',
      "descricao" => 'temaki de salmão cru ou cozido com couve crispy',
      "preco" => 'R$ 18,00'
    ),
    array(
      "imagem" => 'img/reChef/harumaki.jpg',
      "titulo" => 'harumaki',
      "descricao" => 'é composto por uma fina massa crocante recheada com queijo, legumes refogados e temperados com shoyu',
      "preco" => 'R$ 20,95'
    ),
    array(
      "imagem" => 'img/reChef/tempura.jpg',
      "titulo" => 'tempurá',
      "descricao" => 'Ele é feito com uma massa à base de farinha de trigo e frito em óleo quente por cerca de 2 minutos.',
      "preco" => 'R$ 8,00'
    )
  );

  $vetorII = array(
    array(
      "imagem" => 'img/reChef/hotRoll.jpg',
      "titulo" => 'hot roll',
      "descricao" => '8 unidades de sushis tradicionais recheados com salmão, empanados e fritos.',
      "preco" => 'R$ 38,00'
    ),
    array(
      "imagem" => 'img/reChef/hotRoll.jpg',
      "titulo" => 'hot roll',
      "descricao" => '8 unidades de sushis tradicionais recheados com salmão, empanados e fritos.',
      "preco" => 'R$ 38,00'
    ),
    array(
      "imagem" => 'img/reChef/hotRoll.jpg',
      "titulo" => 'hot roll',
      "descricao" => '8 unidades de sushis tradicionais recheados com salmão, empanados e fritos.',
      "preco" => 'R$ 38,00'
    ),
    array(
      "imagem" => 'img/reChef/hotRoll.jpg',
      "titulo" => 'hot roll',
      "descricao" => '8 unidades de sushis tradicionais recheados com salmão, empanados e fritos.',
      "preco" => 'R$ 38,00'
    )
  );
  ?>
  <div class="d-flex flex-row" id="estrutura">
    <?php
    foreach ($vetorI as $vetorproduto) { ?>
      <div class="card" id="card" style="width: 850px">
        <img class="card-img-top" src="<?php echo ("$vetorproduto[imagem]"); ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo ("$vetorproduto[titulo]"); ?></h5>
          <p class="card-text"><?php echo ("$vetorproduto[descricao]"); ?></p>
          <p class="card-text"><?php echo ("$vetorproduto[preco]"); ?></p>
        </div>
      </div>
    <?php }; ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>