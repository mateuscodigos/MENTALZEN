<?php
// ChatBot.php
require_once 'db.php';

class ChatBot extends Database {
    /**
     * Recebe a pergunta do usuário e retorna a melhor resposta do FAQ,
     * ou uma mensagem padrão de fallback.
     */
    public function responder(string $pergunta_usuario): string {
        $conn = $this->getConnection();

        // 1) Normalização: minúsculas, trim, manter acentos, remover pontuação extra
        $texto = mb_strtolower(trim($pergunta_usuario), 'UTF-8');
        $texto_limpo = preg_replace('/[^\p{L}\p{N} ]/u', ' ', $texto);

        // 2) Busca todas as FAQs
        $sql = "SELECT pergunta, resposta, keywords FROM faq";
        $result = $conn->query($sql);

        $melhor_resposta   = null;
        $melhor_pontuacao  = 0.0;

        // 3) Para cada entrada do FAQ, calcula pontuação
        while ($row = $result->fetch_assoc()) {
            $faq_pergunta  = mb_strtolower($row['pergunta'], 'UTF-8');
            $faq_keywords  = mb_strtolower($row['keywords'],  'UTF-8');
            $faq_resposta  = $row['resposta'];

            // Explode keywords em array
            $keywords = array_filter(array_map('trim', explode(',', $faq_keywords)));
            $pontuacao = 0.0;

            // 3a) Pontua por cada keyword presente como substring
            foreach ($keywords as $kw) {
                if ($kw !== '' && mb_stripos($texto_limpo, $kw, 0, 'UTF-8') !== false) {
                    $pontuacao += 1.0;
                }
            }

            // 3b) Pontua similaridade textual entre pergunta do FAQ e entrada do usuário
            $sim = 0.0;
            similar_text($faq_pergunta, $texto, $sim);
            $pontuacao += ($sim / 100.0);

            // 3c) Mantém resposta de maior pontuação
            if ($pontuacao > $melhor_pontuacao) {
                $melhor_pontuacao = $pontuacao;
                $melhor_resposta  = $faq_resposta;
            }
        }

        // 4) Se não encontrou match (pontuação <= 0), retorna fallback
        if ($melhor_resposta === null || $melhor_pontuacao <= 0.0) {
            return "Desculpe, não entendi. Mas se você estiver se sentindo mal, posso te ajudar a encontrar apoio.";
        }

        return $melhor_resposta;
    }
}

// ponto de entrada para requisições POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $bot      = new ChatBot();
    $mensagem = $_POST['msg'] ?? '';
    echo $bot->responder($mensagem);
    exit;
}
?>