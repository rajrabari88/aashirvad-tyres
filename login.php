<?php include 'header.php'; ?>

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

    .login-box input[type="email"],
    .login-box input[type="password"] {
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

<div class="login-container">
    <form class="login-box" action="login_process.php" method="post">
        <h2>Login</h2>

        <?php
        if (isset($_GET['error'])) {
            echo '<p style="color:red; text-align:center; margin-bottom:15px;">' . htmlspecialchars($_GET['error']) . '</p>';
        }
        ?>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <input type="checkbox" onclick="togglePassword()"> Show Password

        <input type="submit" value="Login">

        <div class="extra-links">
            <p><a href="registration.php">Don't have an account? Sign Up</a></p>
            <p><a href="forgot-password.php">Forgot Password?</a></p>
        </div>
    </form>
</div>

<script>
function togglePassword() {
    const passInput = document.getElementById("password");
    passInput.type = passInput.type === "password" ? "text" : "password";
}
</script>

<?php include 'footer.php'; ?>
