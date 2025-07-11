<?php
//app/controllers/auth.controller.php
require_once __DIR__ . '/../models/user.model.php';

function showLoginForm() {
    include_once __DIR__ . '/../../includes/header.php';
    include_once __DIR__ . '/../views/login.view.php';
}

function loginHandler() {
    global $conn;
    
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    $user = User::findByUsername($conn, $username);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header('Location: /library-system-php/public/dashboard.php');
        exit;
    } else {
        $_SESSION['login_error'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        header('Location: /library-system-php/public/login.php');
        exit;
    }
}
?>
