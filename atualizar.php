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

  <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
    <h1 class="w3-center w3-pink w3-round-large w3-margin">Atualizar - ID: <?php echo " ".$_GET['id_doacao']?> </h1>
    <form action="atualizarAction.php" class="w3-container" method='post'>
      <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id_doacao']?>">
      <br>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Data da doação</label>
      <input name="txtData" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['data_doacao']?>">
      <br>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Hemocentro</label>
      <input name="txtHemocentro" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['ds_hemocentro']?>">
      <br>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Observação</label>
      <input name="txtObservacao" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['ds_observacao']?>">
      <br>
      <button name="btnAtualizar" class="w3-button w3-deep-purple w3-cell w3-round-large w3-right">
      <i class="w3-large fa fa-spinner"></i> Atualizar
      </button>
    </form>
  </div>

    </div>
</body>

</html>