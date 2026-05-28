<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Acesse sua Conta</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="display:flex; justify-content:center; align-items:center; height:100vh;">
    <div class="form-box" style="width:100%;">
        <h2 style="margin-bottom: 20px; text-align:center;">ACESSE SUA <span style="color:var(--primary-cyan);">CONTA</span></h2>
        <form action="processar.php?acao=login" method="POST">
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" required placeholder="seuemail@exemplo.com">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" required placeholder="••••••••">
            </div>
            <button type="submit" class="btn-header" style="width:100%; border:none; padding:12px; cursor:pointer;">ENTRAR</button>
        </form>
        <p style="margin-top:20px; text-align:center; font-size:0.9rem; color:var(--text-muted);">Não tem conta? <a href="cadastro.php" style="color:var(--primary-cyan); text-decoration:none;">Crie uma aqui</a></p>
    </div>
</body>
</html>