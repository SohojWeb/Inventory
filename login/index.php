<?php
session_start();
include '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password, role, status FROM users WHERE username = ? AND deleted = 0");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password']) && $user['status'] == 'active') {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            // Log activity
            $conn->query("INSERT INTO activity_log (user_id, action) VALUES ({$user['id']}, 'Logged in')");
            header("Location: ../{$user['role']}/index.php");
            exit();
        } else {
            $error = "Invalid credentials or account blocked.";
        }
    } else {
        $error = "User not found.";
    }
}
?>

<?php include '../include/header.php'; ?>
<div class="container">
    <h2>Login</h2>
    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>
<?php include '../include/footer.php'; ?>