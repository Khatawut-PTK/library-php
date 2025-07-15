<!-- app/views/dashboard.view.php -->

<div class="card shadow-sm">
    <div class="card-body">
        <h4 class="card-title mb-3">แดชบอร์ด</h4>
        <p class="card-text">
            ยินดีต้อนรับ, <?= htmlspecialchars($_SESSION['user']['fullname'] ?? $_SESSION['user']['username']) ?>
        </p>
        <hr>
        <p>เลือกเมนูจากแถบด้านซ้ายเพื่อจัดการระบบห้องสมุด</p>
    </div>
</div>
