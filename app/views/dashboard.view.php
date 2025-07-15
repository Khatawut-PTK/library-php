<!-- app/views/dashboard.view.php -->

<div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
            <?php include_once __DIR__ . '/../../includes/sidebar.php'; ?>
        </div>
        <div class="col-md-9">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title">แดชบอร์ด</h4>
                    <p class="card-text">ยินดีต้อนรับ, <?= htmlspecialchars($_SESSION['user']['fullname'] ?? $_SESSION['user']['username']) ?> 👋</p>
                    <hr>
                    <p>ใช้เมนูด้านข้างเพื่อเริ่มต้นใช้งานระบบจัดการห้องสมุด</p>
                </div>
            </div>
        </div>
    </div>
</div>
