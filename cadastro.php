<?php
session_start(); // Inicia a sessão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Aqui você pode adicionar a lógica para salvar os dados em um banco de dados
    // Exemplo simples de armazenamento em um arquivo (para fins de demonstração)
    $dados = $nome . ',' . $email . ',' . password_hash($senha, PASSWORD_DEFAULT) . PHP_EOL;
    file_put_contents('usuarios.txt', $dados, FILE_APPEND); // Salva em um arquivo

    // Redireciona para a página de login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Mentalzen-Cadastro</title>
</head>
<body>
    <div class="titulo">
        <h1>Cadastro</h1>
        <form id="registerForm" method="POST" action="cadastro.php">
            <p id="g">Nome</p>
            <input type="text" id="nome" name="nome" placeholder="Insira seu nome completo" required>
            <br><br><br>
            <p id="g">E-mail</p>
            <input type="email" id="email" name="email" placeholder="Insira seu e-mail" required>
            <br><br><br>
            <p id="g">Senha</p>
            <input type="password" id="senha" name="senha" placeholder="Insira sua senha" required>
            <br><br><br>
            <p id="h">Confirme sua senha</p>
            <input type="password" id="senha2" name="senha2" placeholder="Insira a senha novamente" required>
            <br><br><br><br>
            <button type="button" onclick="validateAndSubmit()">Cadastrar</button>
            <br>
            <p>Já tem conta? <a href="login.php" id="c">Faça login</a></p>
        </form>
    </div>

    <script>
    function validateAndSubmit() {
        const senha = document.getElementById('senha').value;
        const senha2 = document.getElementById('senha2').value;
        const email = document.getElementById('email').value;
        const nome = document.getElementById('nome').value;

        // Verifica se as senhas correspondem
        if (senha !== senha2) {
            alert('Senhas não correspondem.');
            return; // Impede o envio se as senhas não forem iguais
        }

        // Verifica se o e-mail contém '@'
        if (!email.includes('@')) {
            alert('O e-mail deve conter "@"');
            return; // Impede o envio se o e-mail for inválido
        }

        // Verifica se o nome está preenchido
        if (nome.trim() === '') {
            alert('O nome é obrigatório');
            return; // Impede o envio se o nome estiver vazio
        }

        alert('Cadastro realizado!');
        document.getElementById('registerForm').submit(); // Enviar o formulário
    }
    </script>
</body>
</html>
