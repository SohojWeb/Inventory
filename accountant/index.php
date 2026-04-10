<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'accountant') {
    header("Location: ../login/index.php");
    exit();
}
include '../config/config.php';
?>

<?php include '../include/header.php'; ?>
<div class="container">
    <h2>Accountant Dashboard</h2>
    <nav>
        <a href="manage_balances.php">Manage Balances</a>
        <a href="approve_sales.php">Approve Sales</a>
        <a href="manage_customers.php">Manage Customers</a>
        <a href="manage_products.php">Manage Products</a>
    </nav>
    <!-- Add content here -->
</div>
<?php include '../include/footer.php'; ?>