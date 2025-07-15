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

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-3 col-lg-2">
            <?php include_once __DIR__ . '/../includes/sidebar.php'; ?>
        </div>
        <div class="col-md-9 col-lg-10">
            <?php include_once __DIR__ . '/../app/views/dashboard.view.php'; ?>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>