<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <header>
        <h1>Inventory Management</h1>
        <nav>
            <?php if(isset($_SESSION['role'])): ?>
                <a href="../<?php echo $_SESSION['role']; ?>/index.php">Dashboard</a>
                <a href="../logout/index.php">Logout</a>
            <?php endif; ?>
        </nav>
    </header>