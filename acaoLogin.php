<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Doador</title>
  <link rel="stylesheet" href="./css/cadastro-e-login-style.css">
</head>

<body>
  <div class="container">
    <?php
    session_start();

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    // Validações de preenchimento dos campos.
    if (empty($cpf) || empty($senha)) {
      echo "Os campos CPF e Senha não podem estar em branco..<br>";
      exit;
    };

    require_once 'conexaoBD.php';

    $sql = "SELECT * FROM tb_pessoa WHERE cpf = '" . $cpf . "';";
    $resultado = $conexao->query($sql);
    $linha = mysqli_fetch_array($resultado);

    if ($linha != null) {
      if ($linha['senha'] == $senha) {
        // Inicia a sessão
        session_start();

        // Armazena informações do usuário na sessão
        $_SESSION['usuario_id'] = $linha['id_doador'];
        $_SESSION['usuario_nome'] = $linha['nome'];
        $_SESSION['cpf'] = $linha['cpf'];

        // Redireciona para a página do doador
        header('Location: doador.php');
        exit();
      } else {
        echo '
          <div>
          <a href="./index.php">
          <h1>Login inválido</h1>
          </a>
          </div>          
        ';
      }
    } else {
      echo '
          <div>
          <a href="./index.php">
          <h1>Login inválido</h1>
          </a>
          </div>          
        ';
    }
    $conexao->close();
    ?>
  </div>
</body>

</html>