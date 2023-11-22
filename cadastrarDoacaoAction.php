<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/doador.css">
  <title>Cadastrar doação </title>
</head>

<body>

  <div class="container">

    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <?php
      require_once 'conexaoBD.php';
      $sql = "INSERT INTO tb_doacao (data_doacao, ds_hemocentro, ds_observacao, id_doador)
              VALUES ('".$_POST['txtData']."', '".$_POST['txtHemocentro']."', '".$_POST['txtObservacao']."', 1)";
      if ($conexao->query($sql) === TRUE) {
          echo '
          <a href="doador.php">
          <h1 class="w3-button w3-pink w3-round-large">Doação registrada com sucesso! </h1>
          </a>
          ';
      } else {
          echo '
          <a href="doador.php">
          <h1 class="w3-button w3-pink w3-round-large">ERRO! </h1>
          </a>
          ';
        }
      $conexao->close();
    ?>
  </div>
</body>

</html>