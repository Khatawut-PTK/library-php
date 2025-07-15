<?php
// public/login.php
session_start();

require_once __DIR__ . '/../app/controllers/auth.controller.php';

if (isset($_SESSION['user']) && isset($_SESSION['login_success'])) {
    unset($_SESSION['login_success']);
    require_once __DIR__ . '/../includes/header.php';
    echo "
    <script>
        Swal.fire({
            icon: 'success',
            title: 'เข้าสู่ระบบสำเร็จ',
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            window.location.href = 'dashboard.php';
        });
    </script>";
    exit;
}

if (isset($_SESSION['login_error'])) {
    $error = $_SESSION['login_error'];
    unset($_SESSION['login_error']);
    include_once __DIR__ . '/../includes/header.php';
    echo "
    <script>
        Swal.fire({
            icon: 'error',
            title: 'เข้าสู่ระบบล้มเหลว',
            showConfirmButton: false,
            timer: 1500
        });
    </script>";
}

showLoginForm();
?>

