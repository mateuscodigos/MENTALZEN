CREATE TABLE `faq` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(255) NOT NULL,
  `resposta` text NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




INSERT INTO faq (pergunta, resposta, keywords) VALUES
-- Autoestima e Valores --
-- mentalzen_forum.sql
-- Script para MySQL Workbench: cria o banco, a tabela faq e insere todas as FAQ

DROP DATABASE IF EXISTS mentalzen_forum;
CREATE DATABASE mentalzen_forum
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;
USE mentalzen_forum;

-- Tabela FAQ
CREATE TABLE faq (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pergunta VARCHAR(255) NOT NULL,
  resposta TEXT NOT NULL,
  keywords TEXT NOT NULL
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;

-- Inserção de entradas existentes (com keywords ajustadas)
USE mentalzen_forum;

DROP TABLE IF EXISTS faq;
CREATE TABLE faq (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  pergunta VARCHAR(255) NOT NULL,
  resposta TEXT NOT NULL,
  keywords TEXT NOT NULL
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;

INSERT INTO faq (pergunta, resposta, keywords) VALUES
  ('Estou feio',
   'Beleza é subjetiva. Tente focar em suas qualidades e buscar apoio de quem te valoriza.',
   'feio,autoestima,beleza'),
  ('Não consigo me valorizar',
   'Você tem valor. Isso pode ser um sinal de baixa autoestima. Fale com um psicólogo do IFC.',
   'autoestima,valor,IFC'),
  ('Sinto que sou inútil',
   'Você não é inútil. Isso pode ser um sinal de baixa autoestima. Fale com um psicólogo do IFC.',
   'inútil,autoestima,IFC'),
  ('Não consigo aceitar minhas limitações',
   'Aceitação é parte do autocuidado. O IFC oferece apoio para lidar com isso.',
   'limitações,aceitação,autoestima'),
  ('Sinto que sou fardo',
   'Você não é um fardo. Isso pode ser um sinal de depressão. Fale com o IFC.',
   'fardo,depressão,IFC');



INSERT INTO faq (pergunta, resposta, keywords) VALUES





('Estou com muita ansiedade antes da prova', 'Entendo sua ansiedade. Respire fundo e faça pequenos intervalos nos estudos; se piorar, procure a psicóloga do IFC.', 'ansiedade,prova,IFC'),
('Sinto que ninguém me aceita na escola', 'Sentir-se excluído dói muito. Converse com alguém de confiança e, se precisar, fale com a psicóloga do IFC.', 'exclusão,bullying,IFC'),
('Tenho dificuldade de me olhar no espelho', 'Autoimagem pode melhorar com apoio. Pratique pensamentos positivos e, se persistir, procure a psicóloga do IFC.', 'autoestima,imagem corporal,IFC'),
('Me chamam de comédia e me sinto humilhado', 'O bullying é sério. Compartilhe isso com um adulto de confiança e procure a psicóloga do IFC.', 'bullying,humilhação,IFC'),
('Tenho medo de falar em público na escola', 'A voz treme, mas você cresce com prática. Tente apresentações curtas e, se a ansiedade atrapalhar, procure a psicóloga do IFC.', 'ansiedade,apresentação,IFC'),
('Me sinto muito pressionado pelos pais', 'Expectativas podem gerar estresse. Dialogue com eles e, se precisar, busque a psicóloga do IFC.', 'pressão familiar,expectativas,IFC'),
('Não consigo dormir pensando na escola', 'Pensamentos podem atrapalhar o sono. Estabeleça uma rotina relaxante e, se não melhorar, procure a psicóloga do IFC.', 'insônia,escola,IFC'),
('Meus colegas espalham boatos sobre mim', 'Fofocas machucam. Ignore e fale com alguém de apoio; se for grave, procure a psicóloga do IFC.', 'bullying,boatos,IFC'),
('Sinto-me muito triste ultimamente', 'Tristeza persistente merece atenção. Converse com um adulto e procure a psicóloga do IFC.', 'tristeza,depressão,IFC'),
('Tenho crises de choro sem motivo', 'Chorar faz parte, mas se atrapalhar, procure a psicóloga do IFC para entender melhor.', 'choro,emoções,IFC'),
('Sinto medo de sair de casa', 'Ansiedade extrema pode necessitar de ajuda. Fale com a psicóloga do IFC.', 'ansiedade,fobia,IFC'),
('Estou me sentindo inútil nos estudos', 'Você tem valor. Planeje metas pequenas e, se não melhorar, procure a psicóloga do IFC.', 'autoestima,estudo,IFC'),
('Não consigo me concentrar nas aulas online', 'Distrações são normais. Crie um horário fixo e, se persistir, fale com a psicóloga do IFC.', 'concentração,aulas online,IFC'),
('Sou muito crítico comigo mesmo', 'Autocrítica demais cansa. Pratique gentileza consigo e, se necessário, fale com a psicóloga do IFC.', 'autocrítica,autoestima,IFC'),
('Estou com raiva constante dos irmãos', 'Conflitos familiares são comuns. Dialogue e, se precisar, procure a psicóloga do IFC.', 'raiva,família,IFC'),
('Não consigo lidar com a separação dos meus pais', 'Perder estabilidade machuca. Procure apoio na psicóloga do IFC.', 'separação,pais,IFC'),
('Tenho medo de ser julgado por minha orientação sexual', 'Identidade é seu direito. Busque suporte e, se quiser, fale com a psicóloga do IFC.', 'sexualidade,identidade,IFC'),
('Sinto que sou diferente e não me encaixo', 'Cada pessoa é única. Valorize suas diferenças e, se sofrer, procure a psicóloga do IFC.', 'diferenças,autoaceitação,IFC'),
('Não tenho motivação para nada', 'Falta de ânimo pode sinalizar desânimo sério. Procure a psicóloga do IFC.', 'desmotivação,energia,IFC'),
('Sinto muita culpa quando erro', 'Errar faz parte do aprendizado. Converse com alguém e, se a culpa persistir, fale com a psicóloga do IFC.', 'culpa,autopercepção,IFC'),
('Tenho pensamentos de me machucar', 'Isso é grave. Procure a psicóloga do IFC imediatamente.', 'autoagressão,crise,IFC'),
('Me sinto sufocado pelas redes sociais', 'Comparações online fazem mal. Desconecte-se um pouco e procure a psicóloga do IFC se precisar.', 'redes sociais,ansiedade,IFC'),
('Sinto medo de não ter futuro', 'Incertezas assustam. Planeje passos pequenos e, se o medo persistir, fale com a psicóloga do IFC.', 'futuro,ansiedade,IFC'),
('Tenho dificuldade em fazer amigos', 'Construir amizades leva tempo. Participe de grupos e, se isolado, procure a psicóloga do IFC.', 'solidão,amizade,IFC'),
('Me sinto sobrecarregado com atividades extracurriculares', 'Equilíbrio é essencial. Reduza tarefas e, se continuar sobrecarregado, fale com a psicóloga do IFC.', 'sobrecarga,atividades,IFC'),
('Tenho medo dos exames finais', 'Exames geram tensão. Revise com calma e, se a ansiedade atrapalhar, procure a psicóloga do IFC.', 'ansiedade,exames,IFC'),
('Não consigo controlar minha irritação', 'Irritação frequente cansa. Pratique técnicas de relaxamento e fale com a psicóloga do IFC se precisar.', 'irritação,emoções,IFC'),
('Fico sozinho no recreio e choro', 'Recreio é difícil para muitos. Busque alguém de confiança e procure a psicóloga do IFC.', 'solidão,recreio,IFC'),
('Sinto enjoo e dor de barriga antes da prova', 'Sintomas físicos podem vir da ansiedade. Respire fundo e, se persistir, procure a psicóloga do IFC.', 'ansiedade,físico,IFC'),
('Não consigo me aceitar como sou', 'Autoaceitação é um processo. Pratique amor-próprio e, se difícil, consulte a psicóloga do IFC.', 'autoaceitação,identidade,IFC'),
('Sinto que tudo está sem sentido', 'Vazio emocional é grave. Procure a psicóloga do IFC.', 'vazio,crise,IFC'),
('Tenho pesadelos toda noite', 'Pesadelos frequentes merecem atenção. Procure a psicóloga do IFC.', 'pesadelos,sono,IFC')




















  ('Estou feio', 'Beleza é subjetiva. Tente focar em suas qualidades e buscar apoio de quem te valoriza.', 'feio,autoestima,beleza'),
  ('Não consigo me valorizar', 'Você tem valor. Isso pode ser um sinal de baixa autoestima. Fale com um psicólogo do IFC.', 'autoestima,valor,IFC'),
  ('Sinto que sou inútil', 'Você não é inútil. Isso pode ser um sinal de baixa autoestima. Fale com um psicólogo do IFC.', 'inútil,autoestima,IFC'),
  ('Não consigo aceitar minhas limitações', 'Aceitação é parte do autocuidado. O IFC oferece apoio para lidar com isso.', 'limitações,aceitação,autoestima'),
  ('Sinto que sou um fardo', 'Você não é um fardo. Isso pode ser um sinal de depressão. Fale com o IFC.', 'fardo,depressão,IFC'),
  
  ('Tenho crises de pânico', 'Crises de pânico são assustadoras. Tente técnicas de respiração e busque apoio no IFC.', 'pânico,crise,ansiedade'),
  ('Minha mente não para de correr', 'Pratique mindfulness: foque no momento presente e observe seus pensamentos sem julgamento.', 'mente acelerada,mindfulness,ansiedade'),
  ('Fico com medo de apresentar trabalhos', 'Ansiedade social é comum. Peça apoio ao Serviço de Psicologia do IFC.', 'medo,ansiedade,social'),
  ('Ansiedade antes das provas', 'Respire fundo e revise com calma. O IFC oferece apoio emocional.', 'ansiedade,prova,estresse'),
  
  ('Não consigo dormir', 'Evite telas antes de dormir e crie uma rotina relaxante. Fale com um psicólogo do IFC.', 'insônia,sono,estresse'),
  ('Acordo cansado mesmo dormindo', 'Isso pode indicar sono não restaurador. Fale com o IFC.', 'sono,exaustão,IFC'),
  ('Tenho pesadelos constantes', 'Pesadelos podem estar ligados a estresse. Fale com um psicólogo do IFC.', 'pesadelos,stress,trauma'),
  ('Minha mente não desliga à noite', 'Tente escrever seus pensamentos antes de dormir. Fale com o IFC.', 'insônia,mente ativa,sono'),
  
  ('Estou me sentindo triste', 'Sinto muito que você esteja se sentindo assim. Fale com um psicólogo do IFC.', 'triste,depressão,tristeza'),
  ('Perdi a vontade de viver', 'Esses sentimentos podem indicar depressão. Fale com alguém de confiança ou o IFC.', 'vontade de viver,depressão,tristeza'),
  ('Nada mais me anima', 'Se você não está encontrando prazer nas coisas, pode estar passando por um episódio depressivo. Fale com o IFC.', 'sem prazer,depressão,felicidade'),
  ('Choro todos os dias', 'Você não está sozinho. Chorar frequentemente pode ser um sinal de dor emocional. Fale com o IFC.', 'choro,luto,depressão'),
  
  ('Quero morrer', 'Por favor, ligue para o CVV (188) imediatamente. Você merece apoio e cuidado agora.', 'suicídio,ajuda urgente,preciso falar'),
  ('Tenho pensamentos de morte', 'Esses sentimentos são sérios. Ligue para o CVV (188) ou fale com o IFC.', 'suicídio,ajuda urgente,preciso falar'),
  ('Não consigo mais respirar', 'Isso pode ser um sinal de crise. Tente se sentar, feche os olhos e respire lentamente. Fale com o IFC.', 'respiração,crise,ansiedade'),
  ('Sinto que vou morrer', 'Se você está em crise, entre em contato com o CVV (188) ou o IFC imediatamente.', 'suicídio,ajuda urgente,preciso falar'),
  
  ('Estou sobrecarregado com o volume de aulas', 'Divida as tarefas em partes menores. Fale com o Núcleo de Apoio ao Estudante (NAE) do IFC.', 'sobrecarga,estresse,IFC'),
  ('As provas me deixam ansioso', 'Pratique respiração profunda e revise com calma. Fale com o IFC.', 'ansiedade,prova,IFC'),
  ('Não consigo lidar com as avaliações', 'Use técnicas de organização e fale com o IFC.', 'avaliação,estresse,IFC'),
  ('O cronograma do curso me esmagou', 'Reavalie suas prioridades e busque equilíbrio. Fale com o NAE do IFC.', 'cronograma,stress,IFC'),
  
  ('Sinto que não consigo alcançar as metas', 'Metas são pessoais. Foque em progressos pequenos e fale com o IFC.', 'metas,pressão,IFC'),
  ('Meus colegas parecem melhores que eu', 'Cada pessoa tem seu ritmo. Reflita sobre suas qualidades e fale com o psicólogo do  IFC.', 'comparação,insegurança,IFC'),
  ('Não consigo mais me motivar a estudar', 'Fadiga mental é comum. Pausas e apoio do IFC podem ajudar.', 'motivação,cansaço,IFC'),
  ('Sinto que fracasso em tudo', 'Fracassos são parte do aprendizado. Fale com um psicólogo do IFC.', 'fracasso,autoestima,IFC'),
  
  ('Me sinto sozinho(a) no campus', 'Participe de grupos de estudo ou atividades do IFC para se sentir conectado(a).', 'isolamento,campus,IFC'),
  ('Não tenho com quem conversar', 'Você não está sozinho. O CVV (188) e o IFC oferecem apoio 24/7.', 'solidão,apoio,IFC'),
  ('Minha família não entende minha situação', 'Permita-se sentir e busque apoio do IFC.', 'família,desentendimento,IFC'),
  ('Tenho conflitos com colegas de turma', 'Comunicação clara é essencial. Fale com o NAE do IFC.', 'conflito,comunicação,IFC'),
  
  ('Me odeio por não estar indo bem', 'Autocrítica excessiva pode ser um sinal de depressão. Fale com o IFC.', 'autocrítica,depressão,IFC'),
  ('Não consigo me aceitar', 'Aceitação é parte do autocuidado. O IFC oferece apoio para lidar com isso.', 'autoaceitação,autoestima,IFC'),
  ('Sinto que sou diferente dos outros', 'Cada aluno é único. Aceite suas diferenças e fale com o IFC.', 'diferenças,autoaceitação,IFC'),
  ('Não sei qual carreira seguir', 'Reflicta sobre suas paixões e fale com orientadores profissionais do IFC.', 'carreira,identidade,IFC'),
  
  ('Perdi alguém importante e não consigo focar', 'Perda é dolorosa. Permita-se sentir e fale com o IFC.', 'luto,perda,IFC'),
  ('Meu amigo(a) se afastou de mim', 'Permita-se sentir e busque novas conexões no IFC.', 'saudade,luto,IFC'),
  ('Sinto que sou ignorado(a)', 'Você é visível. Isso pode ser um sinal de baixa autoestima. Fale com o IFC.', 'invisibilidade,autoestima,IFC'),
  ('Não consigo mais levantar para estudar', 'Isso pode ser um sinal de burnout. Fale com o IFC e descanse.', 'exaustão,stress,IFC'),
  
  ('Estou exausto(a) com o ritmo do curso', 'Descanso é parte do cuidado. Fale com o NAE do IFC.', 'burnout,estresse,IFC'),
  ('Sinto que não tenho energia pra nada', 'Fadiga constante pode indicar estresse. Fale com o IFC.', 'cansaço,estresse,IFC'),
  ('Não consigo mais seguir', 'Lembre-se de que você já está no caminho certo. Fale com o IFC.', 'desistência,estresse,IFC'),
  ('Sinto que sou fardo', 'Você não é um fardo. Isso pode ser um sinal de depressão. Fale com o IFC.', 'fardo,stress,IFC'),
  
  ('Já me machuquei por causa do estresse', 'Isso é um sinal de dor emocional. Ligue para o CVV (188) ou o IFC.', 'autoagressão,crises,IFC'),
  ('Sinto que sou invisível no curso', 'Você é visível. Isso pode ser um sinal de baixa autoestima. Fale com o IFC.', 'invisibilidade,autoestima,IFC'),
  ('Sinto que sou inferior', 'Você não é inferior. Isso pode ser um sinal de baixa autoestima. Fale com o IFC.', 'inferioridade,autoestima,IFC'),
  
  ('Todo mundo parece feliz e eu não', 'É comum comparar-se com os outros. Lembre-se: todos têm dias difíceis. Fale com o IFC.', 'comparação,pressão social,IFC'),
  ('Minha família espera demais de mim', 'Isso pode gerar estresse. Fale com um psicólogo do IFC e defina limites.', 'expectativas,família,IFC');

  CREATE TABLE IF NOT EXISTS topicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    mensagem TEXT NOT NULL,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Comentários
CREATE TABLE IF NOT EXISTS comentarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_topico INT NOT NULL,
    comentario TEXT NOT NULL,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_topico) REFERENCES topicos(id) ON DELETE CASCADE
);

ALTER TABLE diario 
ADD COLUMN data DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
ALTER TABLE diario ADD COLUMN texto TEXT NOT NULL;