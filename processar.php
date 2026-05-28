<?php
// Script simples para simular validações e processos do backend

$acao = isset($_GET['acao']) ? $_GET['acao'] : 'reserva';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if ($acao === 'login') {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        // Aqui entraria a verificação com Banco de Dados
        echo "<script>alert('Login efetuado com sucesso!'); window.location.href='index.php';</script>";
        exit;
    }
    
    if ($acao === 'cadastro') {
        echo "<script>alert('Conta criada com sucesso! Faça seu acesso.'); window.location.href='login.php';</script>";
        exit;
    }
    
    if ($acao === 'reserva') {
        $nome = htmlspecialchars($_POST['nome']);
        $whatsapp = htmlspecialchars($_POST['whatsapp']);
        $servico = htmlspecialchars($_POST['servico']);
        
        // Redireciona de forma profissional gerando um link direto para o WhatsApp do Bruno
        $textoMensagem = urlencode("Olá Bruno! Me chamo $nome. Gostaria de confirmar o agendamento do serviço ($servico). Meu contato é $whatsapp.");
        $linkWhatsapp = "https://api.whatsapp.com/send?phone=5547999999999&text=$textoMensagem";
        
        header("Location: $linkWhatsapp");
        exit;
    }
} else {
    // Proteção de acesso direto ao arquivo
    header("Location: index.php");
    exit;
}