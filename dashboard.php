<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 1.2px;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .welcome {
            font-size: 22px;
            margin-bottom: 20px;
            color: #34495e;
        }

        .content {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        .logout-btn {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 25px;
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="header">
        My Awesome Dashboard
    </div>

    <div class="container">
        <p class="welcome">Welcome, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong>!</p>

        <div class="content">
            <p>This is your dashboard where you can manage your account and access exclusive content.</p>
            <ul>
                <li>View your profile details</li>
                <li>Update your password and email</li>
                <li>Check your recent activity</li>
                <li>Access special offers and discounts</li>
            </ul>
            <p>Enjoy your stay and let us know if you need any assistance.</p>
        </div>

        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
