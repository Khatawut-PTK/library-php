<?php
// public/login.handler.php
session_start();

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/auth.controller.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    loginHandler(); 
} else {
    header("Location: login.php");
    exit;
}
 
?>

