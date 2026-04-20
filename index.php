<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Corporativo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="login-container">
        <h2><i class="fas fa-shield-alt"></i> Acesso Restrito</h2>

        <?php if(isset($_GET['erro']) && $_GET['erro'] == '1') { ?>
            <div class="msg-erro">
                <i class="fas fa-exclamation-circle"></i> E-mail ou senha incorretos!
            </div>
        <?php } ?>

        <form action="logar.php" method="POST">
            <div class="input-group">
                <label><i class="fas fa-envelope"></i> E-mail:</label>
                <input type="email" name="email" placeholder="Digite seu e-mail" required>
            </div>
            
            <div class="input-group">
                <label><i class="fas fa-lock"></i> Senha:</label>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
            </div>
            
            <div class="botoes-grupo">
                <button type="submit" class="btn-entrar"><i class="fas fa-sign-in-alt"></i> Entrar</button>
                <button type="reset" class="btn-limpar"><i class="fas fa-eraser"></i> Limpar</button>
            </div>
        </form>
    </div>

</body>
</html>