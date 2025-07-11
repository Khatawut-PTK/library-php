<!-- app/views/login.view.php -->
<div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4 rounded" style="width: 100%; max-width: 400px;">
            <div class="text-center mb-4">
                <!-- สามารถเปลี่ยน path รูปโลโก้ได้ -->
                <!-- <img src="../assets/images/library-icon.png" alt="Library Logo" width="80" class="mb-2"> -->
                <h4 class="fw-bold">ระบบจัดการห้องสมุด</h4>
                <!-- <small class="text-muted">โรงเรียนของเรา</small> -->
            </div>
            <form action="login.handler.php" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="ชื่อผู้ใช้" required>
                    <label for="username">ชื่อผู้ใช้</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน" required>
                    <label for="password">รหัสผ่าน</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                </div>
            </form>
            <div class="text-center mt-3">
                <small class="text-muted">© <?php echo date('Y'); ?> ห้องสมุดโรงเรียน</small>
            </div>
        </div>
    </div>
</div>