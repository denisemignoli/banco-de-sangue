<?php
    require_once 'conexaoBD.php';
    $sql = "DELETE FROM tb_doacao WHERE id_doacao = '".$_POST['txtID'] ."';";
    if ($conexao->query($sql) === TRUE) {
      echo '
      <a href="doador.php">
      <h1 class="w3-button w3-pink">Doação excluída com sucesso! </h1>
      </a>
      ';
    } else {
      echo '
      <a href="doador.php">
      <h1 class="w3-button w3-pink">ERRO! </h1>
      </a>
      ';
    }
    $conexao->close();
  ?>
  </div>