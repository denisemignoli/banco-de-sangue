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
        <h1> Cadastro de Doador</h1>
        <form id="form1" name="form1" method="post" action="acaoCadastro.php">
            <label for="nome">Nome:</label>
            <input name="nome" type="text" id="nome" placeholder="Digite seu nome" required>
            <label for="cpf">CPF:</label>
            <input name="cpf" type="text" id="cpf" placeholder="Digite seu CPF" required>
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
            <label for="email">Email:</label>
            <input name="email" type="email" id="email" placeholder="Digite seu email" required>
            <label for="login">Login:</label>
            <input name="login" type="text" id="login" placeholder="Digite seu login" required>
            <label for="senha">Senha:</label>
            <input name="senha" type="password" id="senha" placeholder="Digite sua senha" required>
            <label for="confirma_senha">Confirmar Senha:</label>
            <input name="confirma_senha" type="password" id="confirma_senha" placeholder="Confirme sua senha" required>

            <div class="button-container">
                <input name="Enviar" type="submit" class="button" id="enviar" value="Enviar">
                <a href="index.php" class="button">Cancelar</a>
            </div>
        </form>
        
    </div>
</body>
</html>
