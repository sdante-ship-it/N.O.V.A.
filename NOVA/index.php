<?php
require_once __DIR__ . '/includes/config.php';
require __DIR__ . '/backend/conexao.php';
include 'patterns/header.php';

$stmt = $pdo->query("SELECT descricao, imagem, data_registro FROM home_info ORDER BY data_registro DESC");
$infos = $stmt->fetchAll();
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10" style="background-color:#757575; border: 1px; border-radius: 15px;">
            <h1>JARVIS: O Braço Robótico Modular</h1>
            <?php if (empty($infos)): ?>
                <p class='texto-corpo'>Nenhuma atualização registrada ainda.</p>
            <?php else: ?>
                <?php foreach ($infos as $info): ?>

                    <?php if (!empty($info['imagem'])): ?>
                        <img src="<?= BASE_URL ?>uploads/home_info/<?= htmlspecialchars($info['imagem']) ?>"
                             alt="Atualização do projeto" class="img-fluid rounded img-flutuante">
                    <?php endif; ?>
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                    <p>
                        <?= nl2br(htmlspecialchars($info['descricao'])) ?>
                        <p>
                        <strong><?= date('d/m/Y', strtotime($info['data_registro'])) ?></strong>
                        </p>
                    </p>
                    </div>
                </div>
                    <div style="clear: both;"></div>

                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php include 'patterns/footer.php'; ?>