<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/doador.css">
  <title>Doador</title>
</head>

<body>

  <div class="navbar">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="requisitos.php">Requisitos de doação</a></li>
      <li><a href="processo.php">Processo de doação</a></li>
      <li><a href="hemocentros.php">Onde doar?</a></li>
    </ul>
  </div>

  <div class="container">
    <!-- DADOS PESSOAIS --->
    <div class="column personal-info">
      <div class="personal-info-texto">
        <h3>Dados pessoais</h3>
        <form>
          <?php
          session_start();

          $nome = $cpf = $email = $dataNascimento = $login = $cidade = $telefone = $tipoSanguineo = "";

          // Verifica se o CPF está na sessão
          if (isset($_SESSION['cpf'])) {
            $cpfDoUsuario = $_SESSION['cpf'];

            // Consulta SQL com o CPF do usuário logado
            $sql = "SELECT *
            FROM tb_pessoa
            INNER JOIN tb_doador ON tb_pessoa.cpf = tb_doador.cpf
            WHERE tb_pessoa.cpf = '$cpfDoUsuario'";

            require './conexaoBD.php';
            $resultado = $conexao->query($sql);
            if ($resultado != null) {
              while ($row = $resultado->fetch_assoc()) {
                // informacoes tb_pessoa
                $nome = $row["nome"];
                $cpf = $row["cpf"];
                $email = $row["email"];
                $login = $row["login"];
                // informacoes tb_doador
                $dataNascimento = $row["data_nascimento"];
                $sexo = $row["sexo"];
                $logradouro = $row["logradouro"];
                $bairro = $row["bairro"];
                $cidade = $row["cidade"];
                $telefone = $row["telefone"];
                $tipoSanguineo = $row["tipo_sanguineo"];
              }
            }
            $conexao->close();
          }
          ?>

          <div class="image-and-info">
            <div class="image">
              <img src="./assets/profile.svg" alt="" style="width: 250px;">
            </div>
            <div class="info">
              <!-- Informações do doador -->
              <p id="nome"><span>Nome: </span><?php echo $nome; ?></p>
              <p id="cpf"><span>CPF: </span><?php echo $cpf; ?></p>
              <p id="email"><span>Email: </span><?php echo $email; ?></p>
              <p id="dataNascimento"><span>Data de Nascimento: </span><?php echo $dataNascimento; ?></p>
              <p id="sexo"><span>Sexo: </span><?php echo $sexo; ?></p>
              <p id="endereco"><span>Endereço: </span><?php echo $logradouro; ?></p>
              <p id="cidade"><span>Cidade: </span><?php echo $cidade; ?></p>
              <p id="telefone"><span>Telefone: </span><?php echo $telefone; ?></p>
              <p id="tipoSanguineo"><span>Tipo sanguíneo: </span><?php echo $tipoSanguineo; ?></p>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- VERIFICACAO --->
    <div class="column verificar-section">
      <div class="formVerificar">
        <h3>Você está apto para doar?</h3>
        <form>
          <div class="form-item">
            <label for="peso">Peso: </label>
            <input type="number" name="peso">
          </div>
          <div class="form-item">
            <label for="altura">Altura: </label>
            <input type="number" name="altura">
          </div>
          <div class="form-item">
            <label for="idade">Idade: </label>
            <input type="number" name="idade"><br>
          </div>
          <button type="button" class="button" onclick="verificar()" style="width: 250px;">Verificar</button>
        </form>
        <div id="resultado"></div>
      </div>
    </div>
  </div>

  <script>
    function verificar() {
      // Obtém os valores do formulário
      var peso = parseFloat(document.getElementsByName("peso")[0].value);
      var altura = parseFloat(document.getElementsByName("altura")[0].value);
      var idade = parseInt(document.getElementsByName("idade")[0].value);

      // Converte altura para metros (se estiver em centímetros)
      if (altura > 3) {
        altura /= 100; // Converte para metros
      }

      // Verifica se atende aos critérios para doação de sangue
      if (idade >= 18 && idade <= 65 && peso >= 50 && altura >= 1.50) {
        document.getElementById("resultado").innerHTML = "<h3>Você está apto para doar sangue!</h3>";
      } else {
        document.getElementById("resultado").innerHTML = "<h3>Você não atende aos critérios para doação de sangue.</h3>" +
          "<p>Por favor, verifique os critérios <a href='requisitos.php'>aqui</a>!</p>";
      }
    }
  </script>

  <!-- HISTORICO DE DOACOES --->
  <section class="historico-section">
    <h3>Histórico de Doações</h3>
    <table class="tabela-historico" style="width: 80%;">
      <thead>
        <tr>
          <th>ID</th>
          <th>Data</th>
          <th>Local</th>
          <th>Observações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require './conexaoBD.php';
        $sql = 'SELECT *
                        FROM tb_doador
                        INNER JOIN tb_doacao 
                        ON tb_doacao.id_doador = tb_doador.id_doador
                        WHERE tb_doacao.id_doador = 1;';
        $resultado = $conexao->query($sql);
        if ($resultado != null) {
          while ($row = $resultado->fetch_assoc()) {
            echo '<tr>';
            echo '<td style="width: 5%">' . $row["id_doacao"] . "</td>";
            echo '<td style="width: 15%">' . $row["data_doacao"] . "</td>";
            echo '<td style="width: 15%">' . $row["ds_hemocentro"] . "</td>";
            echo '<td style="width: 30%">' . $row["ds_observacao"] . "</td>";
            echo '<td style="width: 10%"><a href="atualizar.php?id_doacao=' . $row['id_doacao'] . '&data_doacao=' . $row['data_doacao'] . '&ds_hemocentro=' . $row['ds_hemocentro'] . '&ds_observacao=' . $row['ds_observacao'] . '"class="button button-atualizar">Atualizar</a></td>';
            echo '<td style="width: 10%"><a href="excluir.php?id_doacao=' . $row['id_doacao'] . '&data_doacao=' . $row['data_doacao'] . '&ds_hemocentro=' . $row['ds_hemocentro'] . '&ds_observacao=' . $row['ds_observacao'] . '"class="button button-excluir">Excluir</a></td>';
            echo '</tr>';
          }
        }
        $conexao->close();
        ?>
      </tbody>
    </table>
    <a href="./cadastrarDoacao.php" class="button button-cadastrar">Cadastrar nova doação</a>
  </section>
</body>

</html>