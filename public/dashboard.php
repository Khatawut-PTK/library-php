<?php
// public/dashboard.php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /library-system-php/public/login.php');
    exit;
}
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<div class="container mt-5">
    <h1>สวัสดี, <?= htmlspecialchars($_SESSION['user']['fullname'] ?? $_SESSION['user']['username']) ?></h1>
    <p>ยินดีต้อนรับสู่ระบบห้องสมุด</p>
    <a href="/library-system-php/public/logout.php" class="btn btn-danger">ออกจากระบบ</a>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
