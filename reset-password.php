<?php
include 'db.php';

$token = $_GET['token'] ?? '';

if (!$token) {
    die("Invalid or missing token.");
}

$stmt = $conn->prepare("SELECT * FROM users WHERE reset_token = ?");
$stmt->bind_param("s", $token);
$stmt->execute();
$result = $stmt->get_result();

if (!$result || $result->num_rows !== 1) {
    die("Invalid token.");
}
?>

<?php include 'header.php'; ?>
<div class="login-container">
    <form class="login-box" action="update-password.php" method="post">
        <h2>Reset Password</h2>

        <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">

        <label for="password">New Password</label>
        <input type="password" name="password" required>

        <label for="confirm">Confirm Password</label>
        <input type="password" name="confirm_password" required>

        <input type="submit" value="Reset Password">
    </form>
</div>
<?php include 'footer.php'; ?>
