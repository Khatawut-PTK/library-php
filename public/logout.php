<?php
// public/logout.php
session_start();
session_destroy();
header('Location: /library-system-php/public/login.php');
exit;
?>