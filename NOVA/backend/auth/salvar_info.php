<?php
require_once __DIR__ . '/../../includes/config.php';
require_once __DIR__ . '/../../includes/auth.php';
exigir_cargo(['admin']);

require '../conexao.php';

$descricao     = trim($_POST['descricao'] ?? '');
$data_registro = $_POST['data_registro'] ?? '';
$usuario_id    = $_SESSION['usuario_id'];

if (empty($descricao) || empty($data_registro)) {
    die('Preencha todos os dados.');
}

$nome_imagem = null;

if (!empty($_FILES['imagem']['name'])) {
    $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    $extensao = strtolower(pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION));

    if (!in_array($extensao, $extensoes_permitidas)) {
        die('Formato de imagem não permitido.');
    }

    $nome_imagem = uniqid('home_') . '.' . $extensao;
    $destino = __DIR__ . '/../../uploads/home_info/' . $nome_imagem;

    if (!move_uploaded_file($_FILES['imagem']['tmp_name'], $destino)) {
        die('Erro ao salvar a imagem.');
    }
}

$stmt = $pdo->prepare("INSERT INTO home_info (usuario_id, descricao, imagem, data_registro) 
                        VALUES (:usuario_id, :descricao, :imagem, :data_registro)");
$stmt->execute([
    'usuario_id'    => $usuario_id,
    'descricao'     => $descricao,
    'imagem'        => $nome_imagem,
    'data_registro' => $data_registro,
]);

header('Location: ../../index.php?info=sucesso');
exit;
?>