use mentalzen_forum;

CREATE TABLE `faq` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(255) NOT NULL,
  `resposta` text NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO faq (pergunta, resposta, keywords) VALUES
-- Autoestima e Valores --
('Estou feio', 'Beleza é subjetiva. Tente focar em suas qualidades e buscar apoio de quem te valoriza.', 'feio,autoestima,beleza'),
('Não consigo me valorizar', 'Você tem valor. Isso pode ser um sinal de baixa autoestima. Fale com um psicólogo do IFC.', 'autoestima,valor,stress'),
('Sinto que sou inútil', 'Você não é inútil. Isso pode ser um sinal de baixa autoestima. Fale com um psicólogo do IFC.', 'inútil,autoestima,stress'),
('Não consigo aceitar minhas limitações', 'Aceitação é parte do autocuidado. O IFC oferece apoio para lidar com isso.', 'limitações,aceitação,autoestima'),
('Sinto que sou fardo', 'Você não é um fardo. Isso pode ser um sinal de depressão. Fale com o IFC.', 'fardo,depressão,stress'),

-- Ansiedade e Pânico --
('Tenho crises de pânico', 'Crises de pânico são assustadoras. Tente técnicas de respiração e busque apoio no IFC.', 'pânico,crise,ansiedade'),
('Minha mente não para de correr', 'Pratique mindfulness: foque no momento presente e observe seus pensamentos sem julgamento.', 'mente acelerada,mindfulness,ansiedade'),
('Fico com medo de apresentar trabalhos', 'Ansiedade social é comum. Peça apoio ao Serviço de Psicologia do IFC.', 'medo,ansiedade,trabalho'),
('Ansiedade antes das provas', 'Respire fundo e revise com calma. O IFC oferece apoio emocional.', 'ansiedade,prova,stress'),

-- Sono e Descanso --
('Não consigo dormir', 'Evite telas antes de dormir e crie uma rotina relaxante. Fale com um psicólogo do IFC.', 'insônia,sono,stress'),
('Acordo cansado mesmo dormindo', 'Isso pode indicar sono não restaurador. Fale com o IFC.', 'cansaço,sono,stress'),
('Tenho pesadelos constantes', 'Pesadelos podem estar ligados a estresse. Fale com um psicólogo do IFC.', 'pesadelos,stress,trauma'),
('Minha mente não desliga à noite', 'Tente escrever seus pensamentos antes de dormir. Fale com o IFC.', 'insônia,mente ativa,sono'),

-- Tristeza / Depressão --
('Estou me sentindo triste', 'Sinto muito que você esteja se sentindo assim. Fale com um psicólogo do IFC.', 'triste,depressão,tristeza'),
('Perdi a vontade de viver', 'Esses sentimentos podem indicar depressão. Fale com alguém de confiança ou o IFC.', 'vontade de viver,depressão,tristeza'),
('Nada mais me anima', 'Se você não está encontrando prazer nas coisas, pode estar passando por um episódio depressivo. Fale com o IFC.', 'sem prazer,depressão,tristeza'),
('Choro todos os dias', 'Você não está sozinho. Chorar frequentemente pode ser um sinal de dor emocional. Fale com o IFC.', 'choro,luto,depressão'),

-- Crises Urgentes --
('Quero morrer', 'Por favor, ligue para o CVV (188) imediatamente. Você merece apoio e cuidado agora.', 'suicídio,ajuda urgente,preciso falar'),
('Tenho pensamentos de morte', 'Esses sentimentos são sérios. Ligue para o CVV (188) ou fale com o IFC.', 'suicídio,ajuda urgente,preciso falar'),
('Não consigo mais respirar', 'Isso pode ser um sinal de crise. Tente se sentar, feche os olhos e respire lentamente. Fale com o IFC.', 'respiração,crise,ansiedade'),
('Sinto que vou morrer', 'Se você está em crise, entre em contato com o CVV (188) ou o IFC imediatamente.', 'suicídio,ajuda urgente,preciso falar'),

-- Estresse Acadêmico --
('Estou sobrecarregado com o volume de aulas', 'Divida as tarefas em partes menores. Fale com o Núcleo de Apoio ao Estudante (NAE) do IFC.', 'sobrecarga,estresse,IFC'),
('As provas me deixam ansioso', 'Pratique respiração profunda e revise com calma. Fale com o IFC.', 'ansiedade,prova,IFC'),
('Não consigo lidar com as avaliações', 'Use técnicas de organização e fale com o IFC.', 'avaliação,estresse,IFC'),
('O cronograma do curso me esmagou', 'Reavalie suas prioridades e busque equilíbrio. Fale com o NAE do IFC.', 'cronograma,stress,IFC'),

-- Pressão e Comparação --
('Sinto que não consigo alcançar as metas', 'Metas são pessoais. Foque em progressos pequenos e fale com o IFC.', 'metas,pressão,IFC'),
('Meus colegas parecem melhores que eu', 'Cada pessoa tem seu ritmo. Reflita sobre suas qualidades e fale com o IFC.', 'comparação,insegurança,IFC'),
('Não consigo mais me motivar a estudar', 'Fadiga mental é comum. Pausas e apoio do IFC podem ajudar.', 'motivação,cansaço,IFC'),
('Sinto que fracasso em tudo', 'Fracassos são parte do aprendizado. Fale com um psicólogo do IFC.', 'fracasso,autoestima,IFC'),

-- Isolamento e Solidão --
('Me sinto sozinho(a) no campus', 'Participe de grupos de estudo ou atividades do IFC para se sentir conectado(a).', 'isolamento,campus,IFC'),
('Não tenho com quem conversar', 'Você não está sozinho. O CVV (188) e o IFC oferecem apoio 24/7.', 'solidão,apoio,IFC'),
('Minha família não entende minha situação', 'Permita-se sentir e busque apoio do IFC.', 'família,solidão,IFC'),
('Tenho conflitos com colegas de turma', 'Comunicação clara é essencial. Fale com o NAE do IFC.', 'conflito,relacionamento,IFC'),

-- Autoaceitação e Identidade --
('Sinto que sou inútil', 'Você tem valor. Isso pode ser um sinal de baixa autoestima. Fale com o IFC.', 'inútil,autoestima,IFC'),
('Me odeio por não estar indo bem', 'Autocrítica excessiva pode ser um sinal de depressão. Fale com o IFC.', 'autocrítica,depressão,IFC'),
('Não consigo me aceitar', 'Aceitação é parte do autocuidado. O IFC oferece apoio para lidar com isso.', 'autoaceitação,stress,IFC'),
('Sinto que sou diferente dos outros', 'Cada aluno é único. Aceite suas diferenças e fale com o IFC.', 'diferenças,stress,IFC'),

-- Luto e Perda --
('Perdi alguém importante e não consigo focar', 'Perda é dolorosa. Permita-se sentir e fale com o IFC.', 'luto,stress,IFC'),
('Meu amigo(a) se afastou de mim', 'Permita-se sentir e busque novas conexões no IFC.', 'saudade,stress,IFC'),
('Sinto que sou ignorado(a)', 'Você é visível. Isso pode ser um sinal de baixa autoestima. Fale com o IFC.', 'ignorância,stress,IFC'),
('Não consigo mais levantar para estudar', 'Isso pode ser um sinal de burnout. Fale com o IFC e descanse.', 'exaustão,stress,IFC'),

-- Burnout e Exaustão --
('Estou exausto(a) com o ritmo do curso', 'Descanso é parte do cuidado. Fale com o NAE do IFC.', 'burnout,stress,IFC'),
('Sinto que não tenho energia pra nada', 'Fadiga constante pode indicar estresse. Fale com o IFC.', 'cansaço,stress,IFC'),
('Não consigo mais seguir', 'Lembre-se de que você já está no caminho certo. Fale com o IFC.', 'desistência,stress,IFC'),
('Sinto que sou fardo', 'Você não é um fardo. Isso pode ser um sinal de depressão. Fale com o IFC.', 'fardo,stress,IFC'),

-- Autoagressão e Autocrítica --
('Já me machuquei por causa do estresse', 'Isso é um sinal de dor emocional. Ligue para o CVV (188) ou o IFC.', 'autoagressão,stress,IFC'),
('Não consigo perdoar-me por erros', 'Perdão é um processo. O IFC oferece terapia para lidar com isso.', 'autocrítica,stress,IFC'),
('Sinto que sou invisível no curso', 'Você é visível. Isso pode ser um sinal de baixa autoestima. Fale com o IFC.', 'invisibilidade,stress,IFC'),
('Sinto que sou inferior', 'Você não é inferior. Isso pode ser um sinal de baixa autoestima. Fale com o IFC.', 'inferioridade,stress,IFC'),

-- Pressão Social e Expectativas --
('Todo mundo parece feliz e eu não', 'É comum comparar-se com os outros. Lembre-se: todos têm dias difíceis. Fale com o IFC.', 'comparação,stress,IFC'),
('Minha família espera demais de mim', 'Isso pode causar estresse. Fale com um psicólogo do IFC e defina limites.', 'expectativas,família,stress'),
('Não consigo ser como os outros', 'Cada pessoa é única. Aceite suas diferenças e fale com o IFC.', 'diferenças,stress,IFC'),
('Sinto que sou ignorado(a) pelos professores', 'Faça contato direto com os professores e peça apoio no IFC.', 'ignorância,stress,IFC'),

-- Luto e Mudanças --
('Perdi um amigo(a) e não consigo seguir', 'Perder alguém é doloroso. Permita-se sentir e fale com o IFC.', 'luto,stress,IFC'),
('Sinto que estou perdendo tempo no curso', 'Reflicta sobre suas metas e fale com orientadores acadêmicos do IFC.', 'perda de tempo,stress,IFC'),
('Não consigo me concentrar nas aulas', 'Isso pode indicar estresse. Tente técnicas de foco e fale com o IFC.', 'concentração,stress,IFC'),
('Sinto que sou inútil no grupo de estudo', 'Você tem valor. Isso pode ser um sinal de baixa autoestima. Fale com o IFC.', 'inútil,stress,IFC'),

-- Isolamento e Solidão --
('Me sinto sozinho(a) no campus', 'Participe de eventos do IFC e busque apoio emocional.', 'solidão,stress,IFC'),
('Não tenho ninguém pra desabafar', 'Você não está sozinho. O CVV (188) e o IFC oferecem apoio 24/7.', 'solidão,stress,IFC'),
('Meus colegas me ignoram', 'Isso pode causar dor emocional. Fale com o Serviço de Psicologia do IFC.', 'ignorância,stress,IFC'),
('Sinto que sou invisível no grupo', 'Você é visível. Isso pode ser um sinal de baixa autoestima. Fale com o IFC.', 'invisibilidade,stress,IFC'),

-- Pressão por Desempenho --
('Sinto que vou reprovar todas as disciplinas', 'Foco em progressos pequenos e fale com o IFC.', 'reprovação,stress,IFC'),
('Não consigo mais estudar', 'Fadiga acadêmica é real. Peça apoio do NAE e descanse.', 'exaustão,stress,IFC'),
('Sinto que sou o único(a) que não consegue', 'Você não está sozinho. O IFC oferece apoio para alunos em dificuldades.', 'comparação,stress,IFC'),
('Minhas notas estão ruins e não sei o que fazer', 'Reflicta sobre suas metas e fale com orientadores acadêmicos do IFC.', 'notas,stress,IFC'),

-- Crise e Suporte --
('Quero desistir de tudo', 'Lembre-se de que você já está no caminho certo. Fale com o IFC.', 'desistência,stress,IFC'),
('Sinto que vou morrer', 'Se você está em crise, ligue para o CVV (188) ou o IFC imediatamente.', 'suicídio,stress,IFC'),
('Não consigo mais respirar', 'Isso pode ser um sinal de crise. Tente se sentar, feche os olhos e respire lentamente.', 'respiração,crise,ansiedade'),
('Tenho pensamentos de morte', 'Esses sentimentos são sérios. Ligue para o CVV (188) ou o IFC.', 'suicídio,stress,IFC'),

-- Autoaceitação e Valores --
('Não consigo aceitar meus erros', 'Erros são parte do aprendizado. Fale com um psicólogo do IFC.', 'erros,stress,IFC'),
('Sinto que sou inútil', 'Você tem valor. Isso pode ser um sinal de baixa autoestima. Fale com o IFC.', 'inútil,stress,IFC'),
('Não consigo me motivar', 'Fadiga mental é comum. Peça apoio do IFC e descanse.', 'motivação,stress,IFC'),
('Sinto que sou um fardo', 'Você não é um fardo. Isso pode ser um sinal de depressão. Fale com o IFC.', 'fardo,stress,IFC'),

-- Crise de Identidade e Futuro --
('Não sei qual carreira seguir', 'Reflicta sobre suas paixões e fale com orientadores profissionais do IFC.', 'carreira,stress,IFC'),
('Sinto que não tenho futuro', 'Seu futuro é seu. Fale com um orientador do IFC e defina metas realistas.', 'futuro,stress,IFC'),
('Sinto que sou diferente dos outros', 'Cada aluno é único. Aceite suas diferenças e fale com o IFC.', 'diferenças,stress,IFC'),
('Não consigo me definir', 'Autoconhecimento é um processo. O IFC oferece apoio para lidar com isso.', 'identidade,stress,IFC'),

-- Apoio e Recursos --
('Preciso de ajuda imediata', 'Ligue para o CVV (188) ou procure o Serviço de Psicologia do IFC.', 'ajuda urgente,stress,IFC'),
('Onde encontrar apoio emocional no IFC?', 'O IFC tem Serviço de Psicologia e Núcleo de Apoio ao Estudante (NAE).', 'apoio,IFC,stress'),
('Como lidar com críticas dos professores?', 'Críticas construtivas são normais. Fale com um psicólogo do IFC.', 'crítica,stress,IFC'),
('Não consigo mais aguentar a pressão', 'Peça apoio do IFC e permita-se descansar. Você merece cuidado.', 'pressão,stress,IFC');