<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'manager') {
    header("Location: ../login/index.php");
    exit();
}
include '../config/config.php';
?>

<?php include '../include/header.php'; ?>
<div class="container">
    <h2>Manager Dashboard</h2>
    <nav>
        <a href="manage_products.php">Manage Products</a>
        <a href="manage_sales.php">Manage Sales</a>
        <a href="manage_customers.php">Manage Customers</a>
    </nav>
    <!-- Add content here -->
</div>
<?php include '../include/footer.php'; ?>