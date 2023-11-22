<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/cadastroDoacao.css">
  <title>Doador</title>
</head>

<body>

  <div class="container">
    <h1 class="alignCenter">Cadastro de Doação</h1>
    <div class="alignLeft">
      <form action="cadastrarDoacaoAction.php" method="post">
        <label for="txtData">Data:</label>
        <input name="txtData" type="date" id="txtData" required><br>
        <label for="txtHemocentro">Hemocentro:</label>
        <input name="txtHemocentro" type="text" id="txtHemocentro" placeholder="Digite o hemocentro" required><br>
        <label for="txtObservacao">Observações:</label>
        <textarea name="txtObservacao" id="txtObservacao" rows="4" placeholder="Digite as observações"></textarea><br>
        <div class="button-container">
          <button name="btnAdicionar" class="button">
            Cadastrar
          </button>
          <a href="doador.php" class="button">Cancelar</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>