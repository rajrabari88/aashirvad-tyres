<?php
session_start();
include 'header.php';
?>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', sans-serif;
        background: #ecf0f1;
    }

    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-box {
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        animation: fadeIn 0.6s ease;
    }

    .login-box h2 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 30px;
    }

    .login-box label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .login-box input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 15px;
    }

    .login-box input[type="submit"] {
        width: 100%;
        background: #2c3e50;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
    }

    .login-box input[type="submit"]:hover {
        background: #34495e;
    }

    .login-box .extra-links {
        text-align: center;
        margin-top: 15px;
    }

    .login-box .extra-links a {
        text-decoration: none;
        color: #007BFF;
        font-size: 14px;
    }

    .login-box .extra-links a:hover {
        text-decoration: underline;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
<?php
if (isset($_SESSION['message'])) {
    echo '<p style="color:green; text-align:center;">' . $_SESSION['message'] . '</p>';
    unset($_SESSION['message']);
}
if (isset($_SESSION['error'])) {
    echo '<p style="color:red; text-align:center;">' . $_SESSION['error'] . '</p>';
    unset($_SESSION['error']);
}
?>


<div class="login-container">
    <form class="login-box" action="send-reset-link.php" method="post">
        <h2>Forgot Password</h2>

        <?php
        if (isset($_GET['message'])) {
            echo '<p style="color:green; text-align:center;">' . htmlspecialchars($_GET['message']) . '</p>';
        }
        if (isset($_GET['error'])) {
            echo '<p style="color:red; text-align:center;">' . htmlspecialchars($_GET['error']) . '</p>';
        }
        ?>

        <label for="email">Enter your registered email</label>
        <input type="email" name="email" required>

        <input type="submit" value="Send Reset Link">

        <div class="extra-links">
            <p><a href="login.php">Back to Login</a></p>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>
