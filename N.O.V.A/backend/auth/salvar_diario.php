<?php
session_start();
require '../conexao.php';

// Bloqueia quem não está logado — isso já é a proteção de sessão que vocês tinham planejado pra depois
if (empty($_SESSION['usuario_id'])) {
    header('Location: ../../login.php');
    exit;
}

$titulo    = trim($_POST['titulo'] ?? '');
$conteudo  = trim($_POST['conteudo'] ?? '');
$usuario_id = $_SESSION['usuario_id'];

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