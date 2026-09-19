<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/backend/auth/auth.php';
exigir_cargo(['admin', 'colaborador']);
include 'patterns/header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="mb-4">Painel — Bem-vindo(a), <?= htmlspecialchars($_SESSION['usuario_nome']) ?></h1>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="card shadow-sm h-100" style="opacity:0.5;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dashboard</h5>
                            <p class="card-text small">Em construção</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <a href="<?= BASE_URL ?>dsp_diario.php" class="text-decoration-none">
                        <div class="card shadow-sm h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title">Diário de Bordo</h5>
                                <p class="card-text small">Ver e adicionar registros</p>
                            </div>
                        </div>
                    </a>
                </div>

                <?php if ($_SESSION['usuario_cargo'] === 'admin'): ?>
                    <div class="col-md-4">
                        <a href="<?= BASE_URL ?>ad_info.php" class="text-decoration-none">
                            <div class="card shadow-sm h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title">+ Info Home</h5>
                                    <p class="card-text small">Publicar atualização</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php else: ?>
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100" style="opacity:0.5;">
                            <div class="card-body text-center">
                                <h5 class="card-title">+ Info Home</h5>
                                <p class="card-text small">Disponível apenas para administradores</p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<?php include 'patterns/footer.php'; ?>