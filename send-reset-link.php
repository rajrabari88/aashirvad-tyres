<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $token = bin2hex(random_bytes(16));
        $stmt = $conn->prepare("UPDATE users SET reset_token = ? WHERE email = ?");
        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();

        $_SESSION['message'] = "Reset link (demo): <a href='reset-password.php?token=$token'>Click here</a>";
        header("Location: forgot-password.php");
        exit();
    } else {
        $_SESSION['error'] = "Email not found.";
        header("Location: forgot-password.php");
        exit();
    }
}
?>
