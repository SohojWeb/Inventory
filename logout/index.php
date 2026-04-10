<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login/index.php");
    exit();
}
// Log activity
include '../config/config.php';
$conn->query("INSERT INTO activity_log (user_id, action) VALUES ({$_SESSION['user_id']}, 'Logged out')");
session_destroy();
header("Location: ../login/index.php");
?>