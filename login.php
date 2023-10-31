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
        <h1 class="alignCenter">Entrar</h1>
        <div class="alignLeft">
            <form id="form1" name="form1" method="post" action="acaoLogin.php">
                <label for="login">Login:</label>
                <input name="login" type="text" id="login" placeholder="Digite seu login" required>
                <label for="senha">Senha:</label>
                <input name="senha" type="password" id="senha" placeholder="Digite sua senha" required>
                <div class="button-container">
                    <input name="Enviar" type="submit" class="button" id="enviar" value="Enviar">
                    <a href="index.php" class="button">Cancelar</a>
                </div>
            </form>
        </div>
        
  </form>

</div>
</body>
</html>
