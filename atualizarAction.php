<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" >
  <?php
    require_once 'conexaoBD.php';
    $sql = "UPDATE tb_doacao SET data_doacao = '".$_POST['txtData']."', ds_hemocentro = '".$_POST['txtHemocentro']."', ds_observacao='".$_POST['txtObservacao']."' WHERE id_doacao =". $_POST['txtID'].";";
    if ($conexao->query($sql) === TRUE) {
      echo '
      <a href="doador.php">
      <h1 class="w3-button w3-pink">Doação atualizada com sucesso!</h1>
      </a>
      ';
      $id = mysqli_insert_id($conexao);
    } else {
      echo '
      <a href="doador.php">
      <h1 class="w3-button w3-teal">ERRO! </h1>
      </a>
      ';
    }
    $conexao->close();
    ?>
  </div>