<?php include 'header.php'; ?>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', sans-serif;
        background: #ecf0f1;
    }

    .register-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .register-box {
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        animation: fadeIn 0.6s ease;
    }

    .register-box h2 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 30px;
    }

    .register-box label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .register-box input[type="text"],
    .register-box input[type="email"],
    .register-box input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 15px;
    }

    .register-box input[type="submit"] {
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

    .register-box input[type="submit"]:hover {
        background: #34495e;
    }

    .register-box .extra-links {
        text-align: center;
        margin-top: 15px;
    }

    .register-box .extra-links a {
        text-decoration: none;
        color: #007BFF;
        font-size: 14px;
    }

    .register-box .extra-links a:hover {
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

<div class="register-container">
    <form class="register-box" action="register_process.php" method="post">
        <h2>Register</h2>

        <?php
        if (isset($_GET['error'])) {
            echo '<p style="color:red; text-align:center; margin-bottom:15px;">' . htmlspecialchars($_GET['error']) . '</p>';
        }
        if (isset($_GET['success'])) {
            echo '<p style="color:green; text-align:center; margin-bottom:15px;">' . htmlspecialchars($_GET['success']) . '</p>';
        }
        ?>

        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Sign Up">

        <div class="extra-links">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>
