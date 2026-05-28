<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Crie uma Conta</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="display:flex; justify-content:center; align-items:center; height:100vh;">
    <div class="form-box" style="width:100%;">
        <h2 style="margin-bottom: 20px; text-align:center;">CRIE UMA <span style="color:var(--primary-cyan);">CONTA</span></h2>
        <form action="processar.php?acao=cadastro" method="POST">
            <div class="form-group">
                <label>Seu melhor e-mail</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Escolha um nome de usuário</label>
                <input type="text" name="usuario" required>
            </div>
            <div class="form-group">
                <label>Digite uma senha forte</label>
                <input type="password" name="senha" required>
            </div>
            <button type="submit" class="btn-header" style="width:100%; border:none; padding:12px; cursor:pointer;">CRIAR CONTA</button>
        </form>
        <p style="margin-top:20px; text-align:center; font-size:0.9rem; color:var(--text-muted);">Já tem conta? <a href="login.php" style="color:var(--primary-cyan); text-decoration:none;">Clique aqui</a></p>
    </div>
</body>
</html>