<?php
require_once 'db.php';

class ChatBot extends Database {

    public function responder($pergunta_usuario) {
        $conn = $this->getConnection();
        $pergunta_usuario = strtolower(trim($pergunta_usuario));

        // Separa palavras do usuário e remove pontuação
        $palavras_usuario = array_map('trim', explode(' ', preg_replace('/[^a-z0-9 ]/', '', $pergunta_usuario)));

        $sql = "SELECT * FROM faq";
        $result = $conn->query($sql);

        $melhor_resposta = null;
        $melhor_pontuacao = 0;

        while ($row = $result->fetch_assoc()) {
            $keywords = array_map('trim', explode(',', strtolower($row['keywords'])));
            $pontuacao = 0;

            // Prioriza palavras-chave com peso maior
            foreach ($keywords as $keyword) {
                if (in_array($keyword, $palavras_usuario)) {
                    $pontuacao += 1;
                }
            }

            // Similaridade entre a pergunta do usuário e a do FAQ
            similar_text(strtolower($row['pergunta']), $pergunta_usuario, $similaridade);
            $pontuacao += round($similaridade / 100 * 1); // 1 ponto por percentual

            if ($pontuacao > $melhor_pontuacao) {
                $melhor_pontuacao = $pontuacao;
                $melhor_resposta = $row['resposta'];
            }
        }

        // Se não encontrou resposta com pontuação >= 1, usa a resposta padrão
        if ($melhor_resposta === null || $melhor_pontuacao < 1) {
            return "Desculpe, não entendi. Mas se você estiver se sentindo mal, posso te ajudar a encontrar apoio.";
        } else {
            return $melhor_resposta;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $bot = new ChatBot();
    $mensagem = $_POST['msg'] ?? '';
    echo $bot->responder($mensagem);
    exit;
}
?>