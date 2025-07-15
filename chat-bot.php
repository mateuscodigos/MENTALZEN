<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Chatbot Simples</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f0f0f0; }
        #chatbox { width: 100%; max-width: 500px; height: 300px; border: 1px solid #ccc; overflow-y: scroll; padding: 10px; background: white; }
        .msg { margin-bottom: 10px; }
        .usuario { text-align: right; color: blue; }
        .bot { text-align: left; color: green; }
        input[type="text"] { width: 80%; padding: 10px; }
        button { padding: 10px; }
    </style>
</head>
<body>

<h2>💬 Chatbot Simples</h2>

<div id="chatbox"></div>

<input type="text" id="msg" placeholder="Digite sua pergunta...">
<button onclick="enviarMensagem()">Enviar</button>

<script>
// Mensagem inicial ao carregar a página
window.onload = function() {
    adicionarNaTela('Bot', 'Olá! Eu sou seu assistente de saúde mental. Como posso te ajudar hoje?', 'bot');
};

// Função para enviar mensagem
function enviarMensagem() {
    const msg = document.getElementById('msg').value;
    if (!msg.trim()) return;

    adicionarNaTela('Você', msg, 'usuario');

    // Mostra "Digitando..."
    const chatbox = document.getElementById('chatbox');
    const pensando = document.createElement('div');
    pensando.className = 'msg bot';
    pensando.innerHTML = `<em>Digitando...</em>`;
    chatbox.appendChild(pensando);
    chatbox.scrollTop = chatbox.scrollHeight;

    // Envia pergunta para o bot.php
    fetch('bot.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'msg=' + encodeURIComponent(msg)
    })
    .then(res => res.text())
    .then(resposta => {
        pensando.remove();
        adicionarNaTela('Bot', resposta, 'bot');
    });

    document.getElementById('msg').value = '';
}

// Função para adicionar mensagens na tela
function adicionarNaTela(nome, texto, classe) {
    const chatbox = document.getElementById('chatbox');
    const div = document.createElement('div');
    div.className = 'msg ' + classe;
    div.innerHTML = `<strong>${nome}:</strong> ${texto}`;
    chatbox.appendChild(div);
    chatbox.scrollTop = chatbox.scrollHeight;
}

</script>

</body>
</html>