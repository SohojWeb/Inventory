<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login/index.php");
    exit();
}
include '../config/config.php';
?>

<?php include '../include/header.php'; ?>
<div class="container">
    <h2>Admin Dashboard</h2>
    <nav>
        <a href="manage_users.php">Manage Users</a>
        <a href="company_details.php">Company Details</a>
    </nav>
    <!-- Add content here -->
</div>
<?php include '../include/footer.php'; ?>