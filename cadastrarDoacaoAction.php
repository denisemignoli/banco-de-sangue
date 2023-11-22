<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/cadastroDoacao.css">
  <title>Cadastrar Doação </title>
</head>

<body>

  <div class="container">
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
      <?php
      require_once 'conexaoBD.php';

      $sql = "INSERT INTO tb_doacao (data_doacao, ds_hemocentro, ds_observacao, id_doador)
              VALUES ('" . $_POST['txtData'] . "', '" . $_POST['txtHemocentro'] . "', '" . $_POST['txtObservacao'] . "', 1)";

      $successMessage = '<h1 class="w3-button w3-pink w3-round-large">Doação registrada com sucesso!</h1>';
      $errorMessage = '<h1 class="w3-button w3-pink w3-round-large">Erro ao registrar doação.</h1>';

      if ($conexao->query($sql) === TRUE) {
        echo $successMessage;
      } else {
        echo $errorMessage;
      }
      $conexao->close();
      ?>

      <!-- Modal -->
      <div id="modal" class="modal">
        <div class="modal-content">
          <?php echo isset($successMessage) ? $successMessage : $errorMessage; ?>
          <button class="close-button" onclick="closeModal()">Fechar</button>
        </div>
      </div>

      <script>
        function showModal() {
          document.getElementById('modal').style.display = 'flex';
        }

        function closeModal() {
          document.getElementById('modal').style.display = 'none';
          window.location.href = "doador.php";
        }

        window.onload = function() {
          showModal();
          setTimeout(closeModal, 3000);
        };
      </script>
    </div>
  </div>
</body>


</html>