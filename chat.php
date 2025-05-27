<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/1fa02d05b6.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentalzen-Chat</title>
    <link rel="stylesheet" href="css/chat.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo"><img src=img/logo(mentalzen).png></div>
            <div class="menu">
                <nav>
                    <a href="chat.php" id="chat">Chat</a>
                    <a href="profissionais.php">Profissionais</a>
                    <a href="forum.php">Fórum</a>
                    <a href="diario.php">Diário</a>
                    
                </nav>
            </div>
            <div class="sociais">
                <button><i class="fa-brands fa-instagram"></i></button>
                <button><i class="fa-brands fa-youtube"></i></button>
                <button><i class="fa-brands fa-whatsapp"></i></i></button>
            </div>
        </div>
    </header>
        <div class="box-question">
            <div class="header">
                <h1>Chat-Bot</h1>
            </div>
            <p id="status"></p>
            <div id="historic">

            </div>
            <div class="footer">
                <input type="text" placeholder="Como posso ajudar?" id="message-input">
                <button id="btn-submit">Enviar</button>
            </div>
        </div>

    </body>
</body>

</html>