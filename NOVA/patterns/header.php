<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../includes/config.php';

$pagina_atual = basename($_SERVER['PHP_SELF']);
$logado       = !empty($_SESSION['usuario_id']);
$cargo        = $_SESSION['usuario_cargo'] ?? null;
$eh_equipe    = in_array($cargo, ['admin', 'colaborador']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
            <title>N.O.V.A.</title>
    <style>
         .button-link {
            color: #4f96a0;
            background-color: #090707;
            margin: 0 9px;
            margin-top: 25px;
            border-radius: 4px;
            width: 150px;
        }            
        .button-link:hover {
            color: #ffffff;
            background-color: #034a97;
        }
        .nav {
            background-color: #020101;
            padding: 7px;
            border-radius: 1px;
        }
        .nav-link {
            color: #4f96a0;
            background-color: #333333;
            margin: 0 9px;
            margin-top: 25px;
            border-radius: 4px;
            width: 150px;
            white-space: nowrap;
        }
        .nav-link:hover {
            color: #ffffff;
            background-color: #034a97;
        }
        .nav-link.active {
            color: #4f96a0;
            background-color: #034a97;
        }
        body {
            background-color: #333333;
        }
        h1, h4 {
            color: white;
            font-family: Georgia, serif;
        }
        .texto-corpo {
            color: #e3e3e6;
            font-family: Georgia, serif;
            line-height: 1.8;
            text-align: justify;
        }
        .img-flutuante {
            float: left;
            margin-right: 20px;
            margin-bottom: 15px;
            max-width: 300px;
        }
    </style>
</head>
<body>
    <div class="nav d-flex align-items-center">
        <div class="logo">
            <img src="<?= BASE_URL ?>patterns/logo.png" alt="Logo do Site" height="100">
        </div>
            <ul class="nav ms-auto">
                <?php if ($eh_equipe): ?>

                    <li class="nav-item">
                        <a class="nav-link <?= $pagina_atual === 'dsp_staff.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>dsp_staff.php">
                            <i class="bi bi-grid-1x2"></i>
                            <span>PAINEL</span>
                        </a>
                    </li>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= $pagina_atual === 'diario.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>diario.php">
                            <i class="bi bi-journal-plus">
                            </i><span>AD.REGISTRO</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $pagina_atual === 'dsp_diario.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>dsp_diario.php">
                            <i class="bi bi-file-medical"></i>
                            <span>REGISTROS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $pagina_atual === 'index.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>index.php">
                            <i class="bi bi-house-door-fill"></i>
                            <span>HOME</span>
                        </a>
                    <?php if ($cargo === 'admin'): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $pagina_atual === 'ad_info.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>ad_info.php">
                                <i class="bi bi-plus-square"></i>
                                <span>INFO HOME</span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <span class="nav-link disabled" style="opacity:0.4; cursor:not-allowed; color: white;">
                                <i class="bi bi-plus-square"></i>   
                                <span>INFO HOME</span></span>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>backend/auth/logout.php">
                            <i class="bi bi-door-open-fill"></i>
                            <span>SAIR</span>
                        </a>
                    </li>

                <?php else: ?>

                    <li class="nav-item">
                        <a class="nav-link <?= $pagina_atual === 'index.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>index.php">
                            <i class="bi bi-house-door-fill"></i>
                            <span>HOME</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $pagina_atual === 'feedback_quest.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>feedback_quest.php">
                        <i class="bi bi-file-post"></i>
                       <span> FEEDBACK</span>
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $pagina_atual === 'cadastro.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>cadastro.php">
                            <i class="bi bi-file-person"></i>
                            <span>CADASTRO</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $pagina_atual === 'dsp_diario.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>dsp_diario.php">
                            <i class="bi bi-file-medical"></i>
                            <span>REGISTROS</span>
                        </a>
                    </li>

                    <?php if ($logado): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL ?>backend/auth/logout.php">
                                <i class="bi bi-door-open-fill"></i>
                                <span>SAIR</span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $pagina_atual === 'login.php' ? 'active' : '' ?>" href="<?= BASE_URL ?>login.php">
                                <i class="bi bi-person-check"></i>
                                <span>LOGIN</span>
                            </a>
                        </li>
                    <?php endif; ?>

                <?php endif; ?>
            </ul>
    </div>