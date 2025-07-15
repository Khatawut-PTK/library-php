<!-- includes/navbar.php -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="dashboard.php">ห้องสมุดโรงเรียน</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <?php if (isset($_SESSION['user'])): ?>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">
                            👤 <?= htmlspecialchars($_SESSION['user']['fullname'] ?? $_SESSION['user']['username']) ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php">ออกจากระบบ</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.php">เข้าสู่ระบบ</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
