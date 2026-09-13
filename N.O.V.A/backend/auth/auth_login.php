<?php
session_start();
require '../conexao.php';

$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

if (empty($email) || empty($senha)) {
    die('Preencha todos os dados.');
}

$stmt = $pdo->prepare("SELECT id, nome, email, senha, cargo FROM usuarios WHERE email = :email");
$stmt->execute(['email' => $email]);
$usuario = $stmt->fetch();

if (!$usuario || !password_verify($senha, $usuario['senha'])) {
    die('Email ou senha incorretos.');
}

$_SESSION['usuario_id']    = $usuario['id'];
$_SESSION['usuario_nome']  = $usuario['nome'];
$_SESSION['usuario_cargo'] = $usuario['cargo'];

header('Location: ../../index.php?login=sucesso');
exit;