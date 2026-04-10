<?php
// Redirect to login if no session
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login/index.php");
    exit();
} else {
    header("Location: {$_SESSION['role']}/index.php");
    exit();
}
?>