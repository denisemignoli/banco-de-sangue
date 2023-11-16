<html>
<head>
  <title>PHP Test</title>
  <meta charset="UTF-8"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/doador.css">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div class="hero-image">
          <div class="hero-text">
            <h1 style="font-size:45px">Bem-vindo a Área do Doador!</h1>
            <p>Doe sangue, doe vida.</p>
          </div>
        </div>
    </div>

    <div class="info">
        <section class="personal-info"> 
            <h2>Dados Pessoais</h2>
            <div class="personal-info-items">
              <img src="./assets/profile.svg" alt="">
              <div class="personal-info-texto">
                <form>
                  <?php 
                    require './conexaoBD.php';
                    $sql = "SELECT *
                    FROM tb_pessoa
                    INNER JOIN tb_doador ON tb_pessoa.cpf = tb_doador.cpf
                    WHERE tb_pessoa.cpf = '12345678901';
                    ";
                    $resultado = $conexao->query($sql);
                    if ($resultado != null) {
                      while ($row = $resultado->fetch_assoc()) {
                        echo "<p><span style='font-weight: bold; color: #960000;'>Nome: </span>" . $row["nome"]. "</p>";
                        echo "<p><span style='font-weight: bold; color: #960000;'>CPF: </span>" . $row["cpf"]. "</p>";
                        echo "<p><span style='font-weight: bold; color: #960000;'>Email: </span>" . $row["email"]. "</p>";
                        echo "<p><span style='font-weight: bold; color: #960000;'>Data de Nascimento: </span>" . $row["data_nascimento"]. "</p>";
                        echo "<p><span style='font-weight: bold; color: #960000;'>Login: </span>" . $row["login"]. "</p>";
                        echo "<p><span style='font-weight: bold; color: #960000;'>Cidade: </span>" . $row["cidade"]. "</p>";
                        echo "<p><span style='font-weight: bold; color: #960000;'>Telefone: </span>" . $row["telefone"]. "</p>";
                        echo "<p><span style='font-weight: bold; color: #960000;'>Tipo sanguíneo: </span>" . $row["tipo_sanguineo"]. "</p>";
                    }                   
                    }
                    $conexao->close();
                  ?>
                </form>
                <button type="submit" class="button">Alterar informações</button>
              </div>
              <div class="formVerificar">
                <h3>Você está apto para doar?</h3>
                <form class="">
                  <div class="form-item">
                  <label for="peso">Peso: </label>
                  <input type="text" name="peso">
                  </div>
                  <div class="form-item">
                  <label for="altura">Altura: </label>
                  <input type="text" name="altura">
                  </div>
                  <div class="form-item">
                  <label for="altura">Idade: </label>
                  <input type="text" name="idade"><br>
                  </div>
                  <button type="button" class="button" onclick="verificar()" style="width: 250px;">Verificar</button>
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
                </form>
              </div>             
              <div id="resultado"></div>
              </div>
        </section>

        <section>
            <h2>Histórico de Doações</h2>
            <table class="tabela-historico">
              <thead>
                <tr>
                  <th>Data</th>
                  <th>Local</th>
                  <th>Observações</th>
                </tr>
              <thead>
              <?php 
                require './conexaoBD.php';
                $sql = 'SELECT *
                FROM tb_doador
                INNER JOIN tb_historico_doacoes 
                ON tb_historico_doacoes.id_doador = tb_doador.id_doador
                WHERE tb_historico_doacoes.id_doador = 1;';
                $resultado = $conexao->query($sql);
                if ($resultado != null) {
                  while ($row = $resultado->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row["data_doacao"]. "</td>";
                    echo '<td>' . $row["local_doacao"]. "</td>";
                    echo '<td>' . $row["ds_observacoes"]. "</td>";
                    echo '</tr>';
                }                   
                }
                $conexao->close();
              ?>
            </table>
        </section>

        <!-- <section class="test-results">
            <h2>Resultados de Exames</h2>
            <p>...</p>
        </section> -->

        <section class="future-donations">
            <h2>Agendamento de Doações Futuras</h2>
            <form>
                <label for="data_agendamento">Data de Agendamento:</label>
                <input type="date" id="data_agendamento" name="data_agendamento" required><br>
                <button type="submit" class="button" style="margin-top: 1rem;">Agendar Doação</button>
            </form> 
        </section>

        <!-- <section class="communications">
            <h2>Comunicações e Notificações</h2>
            <p>...</p>
        </section> -->

        <!-- <section class="privacy-settings">
            <h2>Configurações de Privacidade</h2>
            <p>...</p>
        </section> -->

        <!-- <section class="emergency-info">
            <h2>Informações de Emergência</h2>
            <p>Adicione aqui o código para exibir informações de emergência do doador</p>
        </section> -->
    </div>
</body>
</html>
