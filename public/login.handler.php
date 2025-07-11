<?php
//public/login.handler.php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /library-system-php/public/login.php');
    exit;
}

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/auth.controller.php';

loginHandler(); 
?>

