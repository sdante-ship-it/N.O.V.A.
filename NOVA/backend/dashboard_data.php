<?php
// backend/dashboard_data.php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/auth/auth.php';
exigir_cargo(['admin', 'colaborador']);

require __DIR__ . '/conexao.php';

header('Content-Type: application/json; charset=utf-8');

// Sankey: relação entre impressão geral e recomendaria
$stmt = $pdo->query("SELECT impressao, recomendaria, COUNT(*) AS total FROM feedback GROUP BY impressao, recomendaria");
$sankey = $stmt->fetchAll();

// TreeMap: qual recurso mais chamou atenção
$stmt = $pdo->query("SELECT recurso_destaque, COUNT(*) AS total FROM feedback GROUP BY recurso_destaque");
$treemap = $stmt->fetchAll();

// Gauge: satisfação média (transforma impressão em pontuação de 0 a 100)
$pontuacao = ['excelente' => 100, 'bom' => 75, 'regular' => 50, 'ruim' => 25];
$stmt = $pdo->query("SELECT impressao FROM feedback");
$impressoes = $stmt->fetchAll(PDO::FETCH_COLUMN);
$total_pontos = 0;
foreach ($impressoes as $imp) {
    $total_pontos += $pontuacao[$imp] ?? 0;
}
$media_satisfacao = count($impressoes) > 0 ? round($total_pontos / count($impressoes)) : 0;

// Calendar: cadastros de usuários por dia
$stmt = $pdo->query("SELECT DATE(data_criacao) AS dia, COUNT(*) AS total FROM usuarios GROUP BY DATE(data_criacao)");
$calendario = $stmt->fetchAll();

// Table: lista completa de usuários
$stmt = $pdo->query("SELECT nome, email, cargo, ativo, data_criacao FROM usuarios ORDER BY data_criacao DESC");
$usuarios = $stmt->fetchAll();

echo json_encode([
    'sankey'     => $sankey,
    'treemap'    => $treemap,
    'gauge'      => $media_satisfacao,
    'calendario' => $calendario,
    'usuarios'   => $usuarios,
]);