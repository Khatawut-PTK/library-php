<?php
//public/login.php
session_start();

// ถ้าล็อกอินแล้วให้ไป dashboard เลย
if (isset($_SESSION['user'])) {
    header('Location: /library-system-php/public/dashboard.php');
    exit;
}

require_once __DIR__ . '/../app/controllers/auth.controller.php';
showLoginForm();
?>

