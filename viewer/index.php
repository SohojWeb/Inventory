<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'viewer') {
    header("Location: ../login/index.php");
    exit();
}
include '../config/config.php';
?>

<?php include '../include/header.php'; ?>
<div class="container">
    <h2>Viewer Dashboard</h2>
    <nav>
        <a href="reports.php">Reports</a>
    </nav>
    <!-- Add content here -->
</div>
<?php include '../include/footer.php'; ?>