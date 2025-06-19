<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    try {
        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->execute([$email, $password]);
        header("Location: login.php?error=Registered successfully, please login");
    } catch (PDOException $e) {
        header("Location: registration.php?error=Email already exists");
    }
}
?>
