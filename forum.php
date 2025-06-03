<?php
require_once 'config.php';

// Criar novo tópico
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["novo_topico"])) {
    $titulo = htmlspecialchars(trim($_POST["titulo"]));
    $mensagem = htmlspecialchars(trim($_POST["mensagem"]));
    if (!empty($titulo) && !empty($mensagem)) {
        $stmt = $pdo->prepare("INSERT INTO topicos (titulo, mensagem) VALUES (?, ?)");
        $stmt->execute([$titulo, $mensagem]);
    }
    header("Location: forum.php");
    exit;
}

// Adicionar comentário
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["comentar"])) {
    $idTopico = intval($_POST["id_topico"]);
    $comentario = htmlspecialchars(trim($_POST["comentario"]));
    if (!empty($comentario)) {
        $stmt = $pdo->prepare("INSERT INTO comentarios (id_topico, comentario) VALUES (?, ?)");
        $stmt->execute([$idTopico, $comentario]);
    }
    header("Location: forum.php?topico=$idTopico");
    exit;
}

// Excluir tópico
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["excluir_topico"])) {
    $idExcluir = intval($_POST["id_topico_excluir"]);
    $stmt = $pdo->prepare("DELETE FROM topicos WHERE id = ?");
    $stmt->execute([$idExcluir]);
    header("Location: forum.php");
    exit;
}

// Excluir comentário
if (isset($_GET["excluir_comentario"])) {
    $idComentario = intval($_GET["excluir_comentario"]);
    $idTopico = intval($_GET["topico"] ?? 0);
    $stmt = $pdo->prepare("DELETE FROM comentarios WHERE id = ?");
    $stmt->execute([$idComentario]);
    header("Location: forum.php?topico=$idTopico");
    exit;
}

// Carregar tópicos
$stmt = $pdo->query("SELECT * FROM topicos ORDER BY data DESC");
$topicos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Tópico selecionado
$topicoSelecionado = $_GET["topico"] ?? null;
$comentarios = [];

if ($topicoSelecionado) {
    $stmt = $pdo->prepare("SELECT * FROM comentarios WHERE id_topico = ? ORDER BY data ASC");
    $stmt->execute([$topicoSelecionado]);
    $comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Fórum MentalZen</title>
    <script src="https://kit.fontawesome.com/1fa02d05b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/forum.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo"><img src="img/logo(mentalzen).png" alt="MentalZen"></div>
            <div class="menu">
                <nav>
                    <a href="chat.php" id="chat">Chat</a>
                    <a href="profissionais.php">Profissionais</a>
                    <a href="forum.php" id="for">Fórum</a>
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

    <div class="forum">
        <h1>Fórum MentalZen</h1>

        <!-- Formulário de novo tópico -->
        <form method="POST" class="formulario">
            <input type="text" name="titulo" id="tie" placeholder="Título do tópico" required>
            <textarea name="mensagem" placeholder="Escreva sua mensagem..." required></textarea>
            <button id="postar" type="submit" name="novo_topico">Postar</button>
        </form>

        <!-- Lista de tópicos -->
        <div class="topicos">
            <h2 id="topi">Tópicos Recentes</h2>
            <?php foreach ($topicos as $topico): ?>
                <div class="topico">
                    <h3><a href="forum.php?topico=<?= $topico["id"] ?>"><?= htmlspecialchars($topico["titulo"]) ?></a></h3>
                    <p><?= nl2br(htmlspecialchars($topico["mensagem"])) ?></p>
                    <span class="data"><?= $topico["data"] ?></span>

                    <!-- Botão excluir tópico -->
                    <form method="POST" onsubmit="return confirm('Tem certeza que quer excluir este tópico?');" style="display:inline;">
                        <input type="hidden" name="id_topico_excluir" value="<?= $topico["id"] ?>">
                        <button type="submit" name="excluir_topico" class="botao-excluir">Excluir</button>
                    </form>

                    <!-- Comentários -->
                    <?php if ($topicoSelecionado == $topico["id"]): ?>
                        <div class="comentarios">
                            <h4>Comentários</h4>
                            <?php foreach ($comentarios as $c): ?>
                                <div class="comentario">
                                    <p><?= nl2br(htmlspecialchars($c["comentario"])) ?></p>
                                    <span class="data"><?= $c["data"] ?></span>
                                    <!-- Botão excluir comentário -->
                                    <form method="GET" onsubmit="return confirm('Excluir este comentário?');" style="display:inline;">
                                        <input type="hidden" name="excluir_comentario" value="<?= $c["id"] ?>">
                                        <input type="hidden" name="topico" value="<?= $topico["id"] ?>">
                                        <button type="submit" class="botao-excluir">Excluir</button>
                                    </form>
                                </div>
                            <?php endforeach; ?>

                            <!-- Formulário de novo comentário -->
                            <form method="POST">
                                <input type="hidden" name="id_topico" value="<?= $topico["id"] ?>">
                                <textarea name="comentario" placeholder="Escreva um comentário..." required></textarea>
                                <button type="submit" name="comentar">Comentar</button>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
