<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/formsDoacao.css">
  <title>Excluir Doação </title>
</head>

<body>
  <div class="container">
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
      <?php
      require_once 'conexaoBD.php';

      $id = $_POST['txtID'];
      $sql = "DELETE FROM tb_doacao WHERE id_doacao = '$id';";

      $successMessage = '<h1 class="w3-button w3-pink">Doação excluída com sucesso!</h1>';
      $errorMessage = '<h1 class="w3-button w3-pink">Erro ao excluir doação.';

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