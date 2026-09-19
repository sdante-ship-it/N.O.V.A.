<?php
require_once __DIR__ . '/includes/config.php';
require __DIR__ . '/backend/conexao.php';
include 'patterns/header.php';

$stmt = $pdo->query("
    SELECT d.titulo, d.conteudo, d.data_registro, u.nome AS autor
    FROM diario_bordo d
    JOIN usuarios u ON u.id = d.usuario_id
    ORDER BY d.data_registro DESC
");
$entradas = $stmt->fetchAll();
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <h1 class="mb-4">Diário de Bordo</h1>

      <?php if (empty($entradas)): ?>
        <p>Nenhum registro ainda.</p>
      <?php else: ?>
        <?php foreach ($entradas as $entrada): ?>
          <div class="card shadow-sm mb-4">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($entrada['titulo']) ?></h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">
                <?= htmlspecialchars($entrada['autor']) ?> —
                <?= date('d/m/Y', strtotime($entrada['data_registro'])) ?>
              </h6>
              <p class="card-text"><?= nl2br(htmlspecialchars($entrada['conteudo'])) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
              <a href="diario.php" class="button-link btn btn-primary text- wrap">REGISTRAR PROGRESSO</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'patterns/footer.php'; ?>