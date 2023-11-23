<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/formsDoacao.css">
  <title>Doador</title>
</head>

<body>

  <div class="container">

    <h1 class="w3-center w3-pink w3-round-large">EXCLUIR - ID: <?php echo " " . $_GET['id_doacao'] ?> </h1>
    <form action="excluirDoacaoAction.php" class="w3-container" method='post'>
      <input name="txtID" type="hidden" value="<?php echo $_GET['id_doacao'] ?>">
      <label>Data da Doação</label>
      <input name="txtData" type="text" disabled value="<?php echo $_GET['data_doacao'] ?>">
      <label>Hemocentro</label>
      <input name="txtHemocentro" type="text" disabled value="<?php echo $_GET['ds_hemocentro'] ?>">
      <label>Observações</label>
      <input name="txtObservacao" type="text" disabled value="<?php echo $_GET['ds_observacao'] ?>">
      <div class="button-container">
        <button name="btnExcluir" class="button">
          <i class="w3-xxlarge fa fa-check"></i> Confirmar Exclusão
        </button>
        <a href="doador.php" class="button">Cancelar</a>
      </div>
    </form>
  </div>

</body>

</html>