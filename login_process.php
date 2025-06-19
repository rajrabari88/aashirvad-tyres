<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Basic query with escaped input (still less secure than prepared statements)
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

    if ($result && mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            // Login successful
            header("Location: dashboard.php");
            exit();
        }
    }

    // Login failed
    header("Location: login.php?error=Invalid email or password");
    exit();
}
?>
