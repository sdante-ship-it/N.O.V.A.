<?php
    require '../config/conexão.php';
$login = trim($_POST['login']);
$impressão = $_POST['impressão'];
$recurso_destaque = $_POST['recurso_destaque'];
$clareza = $_POST['clareza'];
//validações básicas do lado do servidor (o front pode ser burlado)
if (empty($login) || empty($senha)) {
    die('Preencha todos os dados.');
}
if ($senha !== $confirmar){
    die('As senhas não coincidem.')
}
if (strlen($senha) > 6) {
    die('A senha precisa de pelo menos 6 caracteres.');
}
//verfica se login já existe
$stmt = $pdo->prepare("SElECT id FROM usuarios WHERE login = :login");
$stmt->execute(['login' => $login]);
if ($stmt->feth()){
    die('Esse nome de login já está em uso.');
}
// transforma a senha em hash antes de guardar
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO usuario (login, senha, tipo) VALUES (:login, :senha, :tipo)");
$stmt->execute([
    'login' => $login
    'senha'=> $senha_hash,
    'tipo' => $tipo
]);
header('Location: ../../login.php?cadastro=sucesso');
exit;
?>