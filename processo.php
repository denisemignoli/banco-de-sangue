<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>PHP Test</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/processo.css">
</head>

<body>

  <!-- Navbar -->
  <div class="navbar">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="requisitos.php">Requisitos de doação</a></li>
      <li><a href="#">Processo de doação</a></li>
      <li><a href="onde_doar.php">Onde doar?</a></li>
    </ul>
  </div>

  <!-- Conteúdo principal -->
  <div class="info">
    <h2 style="text-align:center;">Sobre o processo de doação</h2>
    <p>Acompanhe a seguir as etapas para doação.</p>
    <br>

    <h3>Antes de ir doar sangue:</h3>
    <ul>
      <li>Consuma alimentos leves, não é possível doar em jejum.</li>
      <li>Evitar alimentos gordurosos no dia da doação.</li>
      <li>Hidrate-se.</li>
    </ul>

    <h3>Etapas da doação</h3>
    <ol>
      <li><span>Recepção e cadastro:</span> ao chegar ao local é feito primeiramente um cadastro com dados pessoais e gerais. Lembre-se sempre de levar documento oficial de identidade com foto.</li>
      <li><span>Triagem clínica:</span> entrevista que avalia as condições de saúde da pessoa que vai doar e os riscos para a pessoa que vai receber. Na triagem clínica, são feitas perguntas a respeito do estado de saúde do candidato à doação de sangue. A triagem clínica é utilizada, pois existem questões que podem ser identificadas na entrevista clínica e não podem ser detectada por testes laboratoriais.</li>
      <li><span>Coleta:</span> dura em torno de 15 minutos. É feita com material esterilizado, descartável e não apresenta nenhum risco para a pessoa que está doando.</li>
    </ol>

    <h3>Depois de doar sangue</h3>
    <ul>
      <li>Faça um pequeno lanche e hidrate-se. É importante para o doador continuar se sentindo bem durante o dia. </li>
      <li>É importante também evitar esforços físicos exagerados por pelo menos 12 horas, não fumar por cerca de 2 horas, evitar bebidas alcóolicas por 12 horas e não dirigir veículos de grande porte, trabalhar em andaimes, praticar paraquedismo ou mergulho.</li>
    </ul>
  </div>

  <!-- Div de cadastro/login -->
  <hr>
  <div class="div-container">
    <div class="div1">
      <h2>Cadastro de Doador</h2>
      <p>Novo por aqui? Faça o seu cadastro.</p>
      <a href="cadastro.php" class="button">Cadastrar</a>
    </div>
    <div class="div2">
      <h2>Login de Doador</h2>
      <p>Já é um doador? Faça o login.</p>
      <a href="login.php" class="button">Login</a>
    </div>
  </div>
  <br>
  <hr>

  <!-- Footer -->
  <div>
    <footer>
      <img src="./assets/facebook.png" alt="facebook icon" width="30">
      <img src="./assets/twitter.png" alt="twitter icon" width="30">
      <img src="./assets/youtube.png" alt="youtube icon" width="30">
      <img src="./assets/instagram.png" alt="instagram icon" width="30">
    </footer>
  </div>

  <!-- Script externo -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"> </script>
</body>

</html>