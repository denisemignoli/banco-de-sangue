<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/doador.css">
  <title>Doador</title>
</head>

<body>

  <div class="navbar">
    <ul>
      <li><a href="index.php" style="margin-left:40px">Home</a></li>
      <li><a href="requisitos.php">Requisitos de doação</a></li>
      <li><a href="processo.php">Processo de doação</a></li>
      <li><a href="hemocentros.php">Onde doar?</a></li>
    </ul>
  </div>

  <div class="container">

    <h1 class="w3-center w3-pink w3-round-large w3-margin">EXCLUIR - ID: <?php echo " ".$_GET['id_doacao']?> </h1>
    <form action="excluirAction.php" class="w3-container w" method='post'>
      <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id_doacao']?>">
      <br>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Data da Doação</label>
      <input name="txtData" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['data_doacao']?>">
      <br>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Hemocentro</label>
      <input name="txtHemocentro" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['ds_hemocentro']?>">
      <br>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Observações</label>
      <input name="txtObservacao" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['ds_observacao']?>">
      <br>
      <button name="btnExcluir" class="w3-button w3-deep-purple w3-cell w3-round-large w3-right">
      <i class="w3-xxlarge fa fa-check"></i> Confirmar Exclusão.
      </button>
    </form>
  </div>

    </div>
</body>

</html>