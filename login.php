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
                <label for="cpf">CPF:</label>
                <input name="cpf" type="text" id="cpf" placeholder="Digite seu cpf" required>
                <script>
                    function formatCPF() {
                        const cpfInput = document.getElementById("cpf");
                        const cpfValue = cpfInput.value.replace(/\D/g, '');
                        const formattedCPF = cpfValue.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
                        cpfInput.value = formattedCPF;
                    }
                    const cpfInput = document.getElementById("cpf");
                    cpfInput.addEventListener("input", formatCPF);
                </script>
                <label for="senha">Senha:</label>
                <input name="senha" type="password" id="senha" placeholder="Digite sua senha" required>
                <div class="button-container">
                    <input name="Enviar" type="submit" class="button" id="enviar" value="Enviar">
                    <a href="index.php" class="button">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>