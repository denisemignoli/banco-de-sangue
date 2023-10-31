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
        <h1 class="alignCenter">Login</h1>
        <?php
        
        session_start();
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        require_once 'conexaoBD.php';
        
        $sql = "SELECT * FROM tb_pessoa WHERE login = '".$login."';";
        $resultado = $conexao->query($sql);
        $linha = mysqli_fetch_array ($resultado);

        if ($linha != null) {
          if ($linha['senha'] == $senha) {

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
