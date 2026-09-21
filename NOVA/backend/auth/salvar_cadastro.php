<?php
    require '../conexao.php';
$nome  = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';
$cargo = $_POST['type'] ?? 'leitor';
if (!in_array($cargo, ['admin','colaborador','leitor'])) {
    $cargo = 'leitor'; // fallback
}

if (empty($nome) || empty($email) || empty($senha)) {
    die('Preencha todos os dados.');
}
if (strlen($senha) < 6) {
    die('A senha precisa ter pelo menos 6 caracteres.');
}

$stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
$stmt->execute(['email' => $email]);
if ($stmt->fetch()) {
    die('Esse email já está cadastrado.');
}

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, cargo) VALUES (:nome, :email, :senha, :cargo)");
$stmt->execute([
    'nome'  => $nome,
    'email' => $email,
    'senha' => $senha_hash,
    'cargo' => $cargo,
]);
header('Location: ../../login.php?cadastro=sucesso');
exit;
?>