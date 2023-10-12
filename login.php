<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Doador</title>
    <link rel="stylesheet" href="./css/cadastro-style.css">
</head>
<body>
    <div class="container">
        <h1 class="alignCenter">Login</h1>
        <div class="alignLeft">
            <form id="form1" name="form1" method="get" action="acaoLogin.php">
                <label for="email">Email:</label>
                <input name="email" type="email" id="email" placeholder="Digite seu email" required>
                <label for="senha">Senha:</label>
                <input name="senha" type="password" id="senha" placeholder="Digite sua senha" required>
                <br>
            </form>
        </div>
        <input name="Enviar" type="submit" class="button" id="enviar" value="Enviar">
        <a href="index.php" class="button">Cancelar</a>
  </form>

</div>
</body>
</html>
