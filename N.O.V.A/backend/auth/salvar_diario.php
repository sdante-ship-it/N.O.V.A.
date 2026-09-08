<?php
    require '../config/conexão.php';
$name = trim($_POST['name']);
$descricao = $_POST['descricao'];
$data_registro = $_POST['data_registro'];
//validações básicas do lado do servidor (o front pode ser burlado)
if (empty($name) || empty($data_registro)) {
    die('Preencha todos os dados.');
}
//verfica se login já existe
$stmt = $pdo->prepare("SElECT id FROM usuarios WHERE name = :name");
$stmt->execute(['name' => $name]);
if ($stmt->feth()){
    die('Esse nome de login não existe.');
}
header('Location: ../../login.php?cadastro=sucesso');
exit;
?>