use mentalzen_forum;

CREATE TABLE faq (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pergunta VARCHAR(255) NOT NULL,
    resposta TEXT NOT NULL
);
INSERT INTO faq (pergunta, resposta) VALUES
('Qual seu nome?', 'Meu nome é Botinho!'),
('Como posso ajudar?', 'Você pode me perguntar sobre nossos produtos.'),
('Horário de atendimento?', 'Atendemos das 9h às 18h.');