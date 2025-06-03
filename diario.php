<link rel="stylesheet" href="css/diario.css">
<?php
class DiarioManager {
    private $arquivo = 'diario.json';

    public function obterEntradas() {
        if (!file_exists($this->arquivo)) return [];
        return json_decode(file_get_contents($this->arquivo), true) ?: [];
    }

    public function salvarEntrada($texto) {
        $entradas = $this->obterEntradas();
        $entradas[] = [
            'id' => uniqid(),
            'texto' => $texto,
            'data' => date('d/m/Y H:i:s')
        ];
        $this->salvarArquivo($entradas);
    }

    public function excluirEntrada($id) {
        $entradas = $this->obterEntradas();
        $entradas = array_filter($entradas, fn($e) => isset($e['id']) && $e['id'] !== $id);
        $this->salvarArquivo(array_values($entradas));
    }

    public function editarEntrada($id, $novoTexto) {
        $entradas = $this->obterEntradas();
        foreach ($entradas as &$e) {
            if (isset($e['id']) && $e['id'] === $id) {
                $e['texto'] = $novoTexto;
                $e['data'] = date('d/m/Y H:i:s') . " (editado)";
                break;
            }
        }
        $this->salvarArquivo($entradas);
    }

    private function salvarArquivo($dados) {
        file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
    }

    public function buscarPorId($id) {
        foreach ($this->obterEntradas() as $e) {
            if (isset($e['id']) && $e['id'] === $id) return $e;
        }
        return null;
    }
}

$diario = new DiarioManager();
$modo_edicao = false;
$entrada_editada = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['entrada']) && !empty(trim($_POST['entrada']))) {
        $texto = htmlspecialchars(trim($_POST['entrada']));
        if (isset($_POST['editar_id'])) {
            $diario->editarEntrada($_POST['editar_id'], $texto);
        } else {
            $diario->salvarEntrada($texto);
        }
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }
}

if (isset($_GET['excluir'])) {
    $diario->excluirEntrada($_GET['excluir']);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

if (isset($_GET['editar'])) {
    $entrada_editada = $diario->buscarPorId($_GET['editar']);
    if ($entrada_editada) $modo_edicao = true;
}

$entradas = $diario->obterEntradas();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Diário Mentalzen</title>
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="css/diario.css">
    <script src="https://kit.fontawesome.com/1fa02d05b6.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="container">
        <div class="logo"><img src="img/logo(mentalzen).png" alt="Logo"></div>
        <div class="menu">
            <nav>
                <a href="chat.php">Chat</a>
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
            <button type="submit"><?= $modo_edicao ? 'Salvar Alterações' : 'Salvar Rascunho' ?></button>
        </form>

        <h3 style="margin-top:30px;">Rascunhos Salvos</h3>
        <div id="entries-list">
            <?php if (empty($entradas)): ?>
                <p>Como você está se sentindo hoje?</p>
            <?php else: ?>
                <?php foreach (array_reverse($entradas) as $e): ?>
                    <?php if (!isset($e['id'], $e['texto'], $e['data'])) continue; ?>
                    <?php
                        $editarLink = htmlspecialchars($_SERVER['PHP_SELF']) . '?editar=' . urlencode($e['id']);
                        $excluirLink = htmlspecialchars($_SERVER['PHP_SELF']) . '?excluir=' . urlencode($e['id']);
                    ?>
                    <div class="entry">
                        <div class="entry-time">⏰ <?= htmlspecialchars($e['data']) ?></div>
                        <p><?= nl2br(htmlspecialchars($e['texto'])) ?></p>
                        <div class="actions">
                            <a href="<?php echo $editarLink; ?>">
                                <i class="fa-solid fa-pen-to-square"></i> Editar
                            </a>
                            <a href="<?php echo $excluirLink; ?>" onclick="return confirm('Deseja realmente excluir este rascunho ?')">
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