<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/quiz.css">
  <script src="js/quiz.js" async></script>

  <title>Quiz JavaScript</title>
</head>
<body>


<br><br>

<header>

    <a href="#" class="logo">LOGO</a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar">MENU</label>


<nav class="navbar">
    <ul>
        <li><a href="/syzs/index.php">home</a></li>
        <li><a href="/syzs/componentes.php">componentes</a></li>
        <li><a href="/syzs/quemsomos.php">quem somos</a></li>
        <li><a href="#">manutençao +</a>
            <ul>
                <li><a href="./manutençao/placa-mae.html">PLACA-MÃE</a></li>
                <li><a href="./manutençao/cpu.html">CPU</a></li>
                <li><a href="./manutençao/memoria-ram.html">MEMÓRIA RAM</a></li>
                <li><a href="./manutençao/disco-rigido.html">DISCO RÍGIDO</a></li>
                <li><a href="./manutençao/ssd.html">SSD</a></li>
                <li><a href="./manutençao/gpu.html">GPU</a></li>
                <li><a href="./manutençao/psu.html">PSU</a></li>
            </ul>
        </li>
        <li><a href="/syzs/quiz.php">Quiz</a></li>
    </ul>
</nav>

</header>
  <div class="container">
    <div class="questions-container hide">
      <span class="question">Pergunta aqui?</span>
      <div class="answers-container">
        <button class="answer button">Resposta 1</button>
        <button class="answer button">Resposta 2</button>
        <button class="answer button">Resposta 3</button>
        <button class="answer button">Resposta 4</button>
      </div>
    </div>
    <div class="controls-container">
      <button class="start-quiz button">Começar Quiz!</button>
      <button class="next-question button hide">Próxima pergunta</button>
    </div>
  </div>

</body>
</html>