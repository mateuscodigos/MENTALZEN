<?php
require_once 'config.php';

$modo_edicao = false;
$entrada_editada = null;

// Salvar ou editar entrada
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $texto = htmlspecialchars(trim($_POST['entrada']));
    if (!empty($texto)) {
        if (isset($_POST['editar_id'])) {
            $stmt = $pdo->prepare("UPDATE diario SET texto = ?, data = NOW() WHERE id = ?");
            $stmt->execute([$texto, $_POST['editar_id']]);
        } else {
            $stmt = $pdo->prepare("INSERT INTO diario (texto) VALUES (?)");
            $stmt->execute([$texto]);
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

// Excluir entrada
if (isset($_GET['excluir'])) {
    $stmt = $pdo->prepare("DELETE FROM diario WHERE id = ?");
    $stmt->execute([$_GET['excluir']]);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Carregar entrada pra editar
if (isset($_GET['editar'])) {
    $stmt = $pdo->prepare("SELECT * FROM diario WHERE id = ?");
    $stmt->execute([$_GET['editar']]);
    $entrada_editada = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($entrada_editada) {
        $modo_edicao = true;
    }
}

// Buscar todas as entradas
$stmt = $pdo->query("SELECT * FROM diario ORDER BY data DESC");
$entradas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Diário MentalZen</title>
    <link rel="stylesheet" href="css/diario.css">
    
    <script src="https://kit.fontawesome.com/1fa02d05b6.js  " crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="container">
        <div class="logo"><img src="img/logo(mentalzen).png" alt="Logo"></div>
        <div class="menu">
            <nav>
                <a href="chat-bot.php">Chat</a>
                <a href="profissionais.php">Profissionais</a>
                <a href="forum.php">Fórum</a>
                <a href="diario.php" id="chat">Diário</a>
            </nav>
        </div>
        <div class="sociais">
           <button><i class="fa-brands fa-instagram icon"></i></button>
           <button><i class="fa-brands fa-youtube icon"></i></button>
           <button><i class="fa-brands fa-whatsapp icon"></i></button>
        </div>
    </div>
</header>

<main>
    <div class="diary-container">
        <h2 id="novo"><?= $modo_edicao ? 'Editar Rascunho' : 'Novo Rascunho' ?></h2>
        <form method="POST">
            <textarea name="entrada" placeholder="Escreva aqui..."><?= $modo_edicao ? htmlspecialchars($entrada_editada['texto']) : '' ?></textarea>
            <?php if ($modo_edicao): ?>
                <input type="hidden" name="editar_id" value="<?= htmlspecialchars($entrada_editada['id']) ?>">
            <?php endif; ?>
            <button type="submit" id="au"><?= $modo_edicao ? 'Salvar Alterações' : 'Salvar Rascunho' ?></button>
        </form>

        <h3 style="margin-top:30px;">Rascunhos Salvos</h3>
        <div id="entries-list">
            <?php if (empty($entradas)): ?>
                <p>Como você está se sentindo hoje?</p>
            <?php else: ?>
                <?php foreach ($entradas as $e): ?>
                    <div class="entry">
                        <div class="entry-time">⏰ <?= htmlspecialchars(date('d/m/Y H:i:s', strtotime($e['data']))) ?></div>
                        <p><?= nl2br(htmlspecialchars($e['texto'])) ?></p>
                        <div class="actions">
                            <a href="?editar=<?= $e['id'] ?>">
                                <i class="fa-solid fa-pen-to-square"></i> Editar
                            </a>
                            <a href="?excluir=<?= $e['id'] ?>" onclick="return confirm('Deseja realmente excluir este rascunho?')">
                                <i class="fa-solid fa-trash"></i> Excluir
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</main>
</body>
</html>