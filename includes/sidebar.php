<!-- includes/sidebar.php -->
<div class="bg-white border rounded p-3 shadow-sm" style="min-height: 400px;">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) === 'dashboard.php' ? 'active text-primary fw-bold' : 'text-dark' ?>">
                <i class="bi bi-house-door me-2"></i> หน้าหลัก
            </a>
        </li>
        <li class="nav-item">
            <a href="books.php" class="nav-link text-dark">
                <i class="bi bi-book me-2"></i> หนังสือ
            </a>
        </li>
        <li class="nav-item">
            <a href="borrow.php" class="nav-link text-dark">
                <i class="bi bi-arrow-down-circle me-2"></i> ยืมหนังสือ
            </a>
        </li>
        <li class="nav-item">
            <a href="return.php" class="nav-link text-dark">
                <i class="bi bi-arrow-up-circle me-2"></i> คืนหนังสือ
            </a>
        </li>
        <li class="nav-item">
            <a href="users.php" class="nav-link text-dark">
                <i class="bi bi-people me-2"></i> ผู้ใช้
            </a>
        </li>
        <li class="nav-item">
            <a href="logout.php" class="nav-link text-danger">
                <i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ
            </a>
        </li>
    </ul>
</div>
