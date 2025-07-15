<?php
// public/dashboard.php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /library-system-php/public/login.php');
    exit;
}

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
require_once __DIR__ . '/../includes/sidebar.php';
require_once __DIR__ . '/../app/views/dashboard.view.php';
?>



