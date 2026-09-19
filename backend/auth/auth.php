<?php
// auth/auth.php

function exigir_login() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (empty($_SESSION['usuario_id'])) {
        header('Location: ' . BASE_URL . 'login.php');
        exit;
    }
}

function exigir_cargo(array $cargos_permitidos) {
    exigir_login();
    if (!in_array($_SESSION['usuario_cargo'], $cargos_permitidos)) {
        die('Você não tem permissão para acessar esta página.');
    }
}