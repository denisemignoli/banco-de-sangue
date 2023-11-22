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
    <h1 class="w3-center w3-pink w3-round-large w3-margin">Cadastro de Doação</h1>
    <form action="cadastrarDoacaoAction.php" class="w3-container" method='post'>
      <label for ="txtID" class="w3-text-deep-purple" style="font-weight: bold;">Doação</label>
      <input name="txtID" id="txtID" class="w3-input w3-grey w3-border" disabled><br>
      <label for ="txtData"class="w3-text-deep-purple" style="font-weight: bold;">Data</label>
      <input name="txtData" id="txtData" class="w3-input w3-light-grey w3-border"><br>
      <label for="txtHemocentro" class="w3-text-deep-purple" style="font-weight: bold;">Hemocentro</label>
      <input name="txtHemocentro" id="txtHemocentro" class="w3-input w3-light-grey w3-border"><br>
      <label for="txtObservacao" class="w3-text-deep-purple" style="font-weight: bold;">Observações</label>
      <input name="txtObservacao" id="txtObservacao" class="w3-input w3-light-grey w3-border"><br>
      <button name="btnAdicionar" class="w3-button w3-pink w3-cell w3-round-large w3-right">
      <i class="w3-xlarge fa fa-user-plus">Adicionar</i> 
      </button>
    </form>
  </div>
  </div>
</body>

</html>