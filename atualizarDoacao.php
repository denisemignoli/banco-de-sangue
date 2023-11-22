<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/formsDoacao.css">
  <title>Doador</title>
</head>

<body>

  <div class="container">
    <h1 class="alignCenter">Atualizar Doação</h1>
    <div class="alignLeft">
      <form action="atualizarDoacaoAction.php" method="post">
        <input name="txtID" type="hidden" value="<?php echo $_GET['id_doacao']; ?>">
        <label for="txtData">Data:</label>
        <input name="txtData" type="date" id="txtData" value="<?php echo $_GET['data_doacao']; ?>" required><br>
        <label for="txtHemocentro">Hemocentro:</label>
        <input name="txtHemocentro" type="text" id="txtHemocentro" value="<?php echo $_GET['ds_hemocentro']; ?>" placeholder="Digite o hemocentro" required><br>
        <label for="txtObservacao">Observações:</label>
        <textarea name="txtObservacao" id="txtObservacao" rows="4" placeholder="Digite as observações"><?php echo $_GET['ds_observacao']; ?></textarea><br>
        <div class="button-container">
          <button name="btnAtualizar" class="button">
            Atualizar
          </button>
          <a href="doador.php" class="button">Cancelar</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>