<?php
require_once __DIR__ . '/../../includes/config.php';
require_once __DIR__ . '/auth.php';
exigir_cargo(['admin', 'colaborador']);

$titulo     = trim($_POST['titulo'] ?? '');
$conteudo   = trim($_POST['conteudo'] ?? '');
$usuario_id = $_SESSION['usuario_id'];

require __DIR__ . '/../conexao.php';

if (empty($titulo) || empty($conteudo)) {
    die('Preencha todos os dados.');
}

$stmt = $pdo->prepare("INSERT INTO diario_bordo (usuario_id, titulo, conteudo) VALUES (:usuario_id, :titulo, :conteudo)");
$stmt->execute([
    'usuario_id' => $usuario_id,
    'titulo'     => $titulo,
    'conteudo'   => $conteudo,
]);

header('Location: ../../dsp_diario.php?registro=sucesso');
exit;
?>