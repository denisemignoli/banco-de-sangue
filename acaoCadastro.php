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

        echo "Nome: ".$_POST['nome']."<br>";
        echo "CPF: ".$_POST['cpf']."<br>";
        echo "Email: ".$_POST['email']."<br>";
        echo "Login: ".$_POST['login']."<br>";
        echo "Senha: ".$_POST['senha']."<br>";

        require_once 'conexaoBD.php';
        
        $sql = "INSERT INTO tb_pessoa (cpf, nome, email, login, senha) 
        VALUES ('".$_POST['cpf']."', '".$_POST['nome']."', '".$_POST['email']."', '".$_POST['login']."','".$_POST['senha']."')";
    
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
