<?php
// pubilc/seed.user.php
require_once __DIR__ . '/../config/database.php';

// ข้อมูลที่ต้องการเพิ่ม
$username = "admin";
$passwordPlain = "1234";

// เข้ารหัสรหัสผ่าน
$hashedPassword = password_hash($passwordPlain, PASSWORD_DEFAULT);

// เตรียม statement
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashedPassword);

// รันคำสั่ง
if ($stmt->execute()) {
    echo "เพิ่มผู้ใช้ admin เรียบร้อยแล้ว";
} else {
    echo "เกิดข้อผิดพลาด: " . $conn->error;
}
