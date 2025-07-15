<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://kit.fontawesome.com/1fa02d05b6.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentalzen - Contato do Profissional</title>
    <link rel="stylesheet" href="css/tela_profissionais.css">
</head>
<body>

    <!-- CABEÇALHO ORIGINAL DO SEU TEMPLATE -->
    <header>
        <div class="container">
            <div class="logo"><img src="img/logo(mentalzen).png"></div>
            <div class="menu">
                <nav>
                    <a href="chat.php">Chat</a>
                    <a href="profissionais.php" id='profissio'>Profissionais</a>
                    <a href="forum.php">Fórum</a>
                    <a href="diario.php">Diário</a>
                </nav>
            </div>
            <div class="sociais">
                <button><i class="fa-brands fa-instagram"></i></button>
                <button><i class="fa-brands fa-youtube"></i></button>
                <button><i class="fa-brands fa-whatsapp"></i></button>
            </div>
        </div>
    </header>

    <!-- CONTEÚDO DO PROFISSIONAL -->
    <div class="container-principal">
        <div class="perfil">
            <img src="img/homa.png" alt="Foto da Profissional">
            <h2>Dr. Júlio Silva</h2>
            <p>Psicólogo Clínico | CRP 00/0000</p>
            <div class="horarios">
                <strong>Atendimento:</strong><br>
                Segunda à Sexta<br>
                Das 9h às 12h e 14h às 18h<br>
                Sessões online ou presenciais
            </div>
        </div>

        <div class="form-contato">
            <h3>Entre em contato</h3>
            <form id="form-contato">
                <input type="text" name="nome" placeholder="Seu nome" required>
                <input type="email" name="email" placeholder="Seu e-mail" required>
                <input type="text" name="assunto" placeholder="Assunto" required>
                <textarea name="mensagem" placeholder="Escreva sua mensagem..." required></textarea>
                <button type="submit">Enviar mensagem</button>
                <p id="mensagem-sucesso" style="display:none; margin-top:15px; color: #05a862; font-weight: bold;">Mensagem enviada com sucesso!</p>
            </form>
        </div>
    </div>

    <!-- SCRIPT PARA EVITAR ENVIO E MOSTRAR MENSAGEM -->
    <script>
        document.getElementById("form-contato").addEventListener("submit", function(e) {
            e.preventDefault(); // Evita envio real

            const msg = document.getElementById("mensagem-sucesso");
            msg.style.display = "block"; // Mostra a mensagem

            this.reset(); // Limpa o formulário

            // Esconde depois de 4 segundos (opcional)
            setTimeout(() => {
                msg.style.display = "none";
            }, 4000);
        });
    </script>

</body>
</html>
