<?php
session_start(); // Inicia a sessão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Lê os usuários do arquivo (ou do banco de dados)
    $usuarios = file('usuarios.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    foreach ($usuarios as $usuario) {
        list($nome, $emailSalvo, $senhaHash) = explode(',', $usuario);

        // Verifica se o e-mail corresponde
        if ($emailSalvo === $email && password_verify($senha, $senhaHash)) {
            // Login bem-sucedido
            $_SESSION['nome'] = $nome; // Salva o nome na sessão
            header("Location: chat.php"); // Redireciona para a tela principal
            exit();
        }
    }

    // Se chegar aqui, as credenciais estão incorretas
    $erro = "E-mail ou senha incorretos.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <title>Mentalzen-Login</title>
</head>
<body>
    <div class="titulo">
        <h1>LOGIN</h1>
        <?php if (isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
        <form id="loginForm" method="POST" action="login.php">
            <p id="g">E-mail</p>
            <input type="email" id="loginEmail" name="email" placeholder="exemplo@email.com" required>
            <br><br><br>
            <p id="g">Senha</p>
            <input type="password" id="loginSenha" name="senha" placeholder="1234" required>
            <br><br><br>
            <button type="submit">Entrar</button>
        </form>
        <br>
        <p>Ainda não tem conta? <a href="cadastro.php" id="c">Cadastre-se</a></p>
    </div>
</body>
</html>
