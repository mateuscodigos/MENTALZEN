<!DOCTYPE html>
<html lang="pt-br">
<head>
  <script src="https://kit.fontawesome.com/1fa02d05b6.js" crossorigin="anonymous"></script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mentalzen-Chat</title>
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    /* === RESET E BASE === */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Titillium Web", sans-serif;
    }

    :root {
      --dark: #0c0c0c;
      --white: #fff;
      --gray2: #cccccc;
    }

    body {
      background: linear-gradient(to bottom right, #89a7b1, #05a862);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      height: 100vh;
      margin: 0;
      justify-content: center;
      color: var(--white);
      align-items: center;
      flex-direction: column;
      display: flex;
    }

    /* === HEADER === */
    .container {
      max-width: 1300px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    header {
      background-color: #89a7b1;
      width: 100%;
      padding: 5px;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 10;
    }

    .logo, .sociais {
      width: 25%;
    }

    .logo img {
      width: 125px;
      cursor: pointer;
      border-radius: 8px;
    }

    .menu {
      width: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .menu nav a {
      color: #ffffff;
      text-transform: uppercase;
      text-decoration: none;
      font-size: 20px;
      position: relative;
      margin: 0 20px;
    }

    .menu nav a::after {
      content: " ";
      width: 0px;
      height: 4px;
      background-image: linear-gradient(45deg, #89a7b1, #05a862);
      position: absolute;
      top: 30px;
      left: 0;
      transition-duration: 0.5s;
    }

    .menu nav a:hover::after {
      width: 75%;
    }

    .sociais {
      width: 25%;
      display: flex;
      justify-content: flex-end;
    }

    .sociais button {
      width: 50px;
      height: 50px;
      background-image: linear-gradient(45deg, #89a7b1, #05a862);
      border: none;
      margin-right: 10px;
      cursor: pointer;
      border-radius: 8px;
      transition: transform 0.5s ease;
    }

    .sociais button i {
      font-size: 30px;
      color: #ffffff;
    }

    .sociais button:hover {
      transform: scale(1.2);
    }

    #chat {
      background: linear-gradient(45deg, #02f75c, #00f7ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: bold;
    }

    /* === CHAT === */
    .box-question {
    
    margin: 160px auto 40px auto;
    margin-bottom: 40px;
    color: var(--dark);
    background-color: var(--white);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 600px;
    max-height: 600px;
    border-radius: 10px;
    text-align: center;
    padding: 1rem;
    flex-grow: 1;
    box-shadow: 0px 0px 15px rgba(0,0,0,0.15);
}

    

    .header h1 {
      text-transform: uppercase;
      background: linear-gradient(45deg, #0FC2C0, #590101, #008F8C, #0CABA8);
      background-size: 400% 100%;
      animation: degrade 10s linear infinite alternate;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    @keyframes degrade {
      0% { background-position-x: 0%; }
      100% { background-position: 400%; }
    }

    #historic {
      overflow-y: auto;
      max-height: 300px;
      background: #f8f8f8;
      padding: 10px;
      border-radius: 10px;
      text-align: left;
    }

    /* === MENSAGENS TIPO WHATSAPP === */
    .msg {
      max-width: 80%;
      padding: 10px 15px;
      margin: 8px;
      border-radius: 18px;
      font-size: 16px;
      word-wrap: break-word;
      display: inline-block;
      clear: both;
    }

    .usuario {
      background-color: #dcf8c6;
      float: right;
      text-align: left;
      color: #000;
    }

    .bot {
      background-color: #e5e5ea;
      float: left;
      text-align: left;
      color: #000;
    }

    .box-question .footer {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .box-question input {
      width: 80%;
      padding: 10px;
      border-radius: 5px;
      font-size: 18px;
      border: 1px solid var(--gray2);
    }

    .box-question button {
      padding: 10px 32px;
      font-size: 16px;
      background-color: #05a862;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      transition: transform 0.5s ease;
    }

    .box-question button:hover {
      background-color: #2c8b53;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <div class="logo"><img src="img/logo(mentalzen).png" alt="Logo"></div>
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
        <button><i class="fa-brands fa-whatsapp"></i></button>
      </div>
    </div>
  </header>

  <div class="box-question">
    <div class="header">
      <h1>Chat-Bot</h1>
    </div>
    <p id="status"></p>
    <div id="historic"></div>
    <div class="footer">
      <input type="text" placeholder="Como posso ajudar?" id="message-input">
      <button id="btn-submit">Enviar</button>
    </div>
  </div>

  <script>
    window.onload = function () {
      adicionarNaTela("Bot", "Olá! Eu sou seu assistente de saúde mental. Como posso te ajudar hoje?", "bot");
    };

    document.getElementById("btn-submit").addEventListener("click", enviarMensagem);
    document.getElementById("message-input").addEventListener("keypress", function (e) {
      if (e.key === 'Enter') enviarMensagem();
    });

    function enviarMensagem() {
      const input = document.getElementById("message-input");
      const msg = input.value.trim();
      if (!msg) return;

      adicionarNaTela("Você", msg, "usuario");

      const historic = document.getElementById("historic");
      const pensando = document.createElement("div");
      pensando.classList.add("msg", "bot");
      pensando.innerHTML = "<em>Digitando...</em>";
      historic.appendChild(pensando);
      historic.scrollTop = historic.scrollHeight;

      fetch("bot.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "msg=" + encodeURIComponent(msg)
      })
      .then(res => res.text())
      .then(resposta => {
        pensando.remove();
        adicionarNaTela("Bot", resposta, "bot");
      });

      input.value = "";
    }

    function adicionarNaTela(nome, texto, classe) {
      const historic = document.getElementById("historic");
      const div = document.createElement("div");
      div.classList.add("msg");
      div.classList.add(classe);
      div.innerHTML = `<strong>${nome}:</strong> ${texto}`;
      historic.appendChild(div);
      historic.scrollTop = historic.scrollHeight;
    }
  </script>
</body>
</html>
