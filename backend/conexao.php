<?php
//conexão com o banco 
$host = '127.0.0.1';
$porta ='3306';
$banco = 'nova_robotic_arm';
$usuario_db = 'root';
$senha_db = ''; // vazia por padrão do xampp

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$porta;dbname=$banco;charset=utf8mb4",
        $usuario_db,
        $senha_db,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
}   catch (PDOException $e) {
        die('Erro na conexão: ' . $e->getMessage());
}
?>