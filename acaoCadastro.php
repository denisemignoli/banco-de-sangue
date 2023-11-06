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
    <h1 class="alignCenter">Cadastro</h1>
    <?php
    session_start();

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $confirmaSenha = $_POST['confirma_senha'];

    // Validações de preenchimento dos campos.
    if (empty($nome)) {
      echo "Nome não pode estar em branco.<br>";
      exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Email inválido.<br>";
      exit;
    }

    if (empty($login)) {
      echo "Login não pode estar em branco.<br>";
      exit;
    }

    if (strlen($senha) < 8) {
      echo "A senha deve conter pelo menos 8 caracteres.<br>";
      exit;
    }

    if ($senha !== $confirmaSenha) {
      echo "A confirmação de senha não corresponde à senha fornecida.<br>";
      exit;
    }

    require_once 'conexaoBD.php';

    $sql = "INSERT INTO tb_pessoa (cpf, nome, email, login, senha) 
        VALUES ('" . $_POST['cpf'] . "', '" . $_POST['nome'] . "', '" . $_POST['email'] . "', '" . $_POST['login'] . "','" . $_POST['senha'] . "')";

    if ($conexao->query($sql) === TRUE) {

      echo '
              <div>
              <a href="./principal.php">
              <h1>Seja bem vindo(a)!</h1>
              </a>
              </div>          
            ';
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