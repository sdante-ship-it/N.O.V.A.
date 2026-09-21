<?php
    require '../conexao.php';
$impressao = $_POST['impressao']??'';
$recurso_destaque = $_POST['recurso_destaque']??'';
$clareza = $_POST['clareza']??'';
$recomendaria  = $_POST['recomendaria']??'';
$futuro           = $_POST['futuro']?? '';
$comentario       = trim($_POST['comentario']??'');

//valida se o formulário foi preenchido 
if (empty($impressao) || empty($recurso_destaque) || empty($clareza) || empty($recomendaria) || empty($futuro)) {
    die('Preencha todos os dados obrigatórios.');
}

// Adiciona os dados ao banco 
$stmt = $pdo->prepare("INSERT INTO feedback (impressao, recurso_destaque, clareza, futuro, recomendaria, comentario) VALUES (:impressao, :recurso_destaque, :clareza, :futuro, :recomendaria, :comentario)");
$stmt->execute([
    'impressao'        => $impressao,
    'recurso_destaque' => $recurso_destaque,
    'clareza'          => $clareza,
    'futuro'           => $futuro,
    'recomendaria'     => $recomendaria,
    'comentario'       => $comentario,
]);
header('Location: ../../login.php?feedback=sucesso');
exit;
?>