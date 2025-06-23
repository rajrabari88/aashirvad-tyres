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
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #ecf0f1;
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      width: 250px;
      background: #2c3e50;
      color: #ecf0f1;
      padding-top: 30px;
      flex-shrink: 0;
      position: fixed;
      height: 100%;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar a {
      display: block;
      padding: 15px 30px;
      color: #ecf0f1;
      text-decoration: none;
      transition: background 0.3s ease;
    }

    .sidebar a:hover {
      background: #34495e;
    }

    .main-content {
      margin-left: 250px;
      padding: 30px;
      flex-grow: 1;
    }

    .topbar {
      background: #fff;
      padding: 15px 30px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .welcome {
      font-size: 22px;
      margin-bottom: 20px;
      color: #2c3e50;
    }

    .card {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      margin-bottom: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .logout-btn {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #e74c3c;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .logout-btn:hover {
      background-color: #c0392b;
    }

    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
        position: relative;
        height: auto;
      }

      .main-content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h2>My Panel</h2>
    <a href="#">Dashboard</a>
    <a href="#">Profile</a>
    <a href="#">Settings</a>
    <a href="#">Activity</a>
    <a href="#">Offers</a>
    <a href="logout.php">Logout</a>
  </div>

  <div class="main-content">
    <div class="topbar">Welcome to the Dashboard</div>

    <p class="welcome">Hello, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong> 👋</p>

    <div class="card">
      <h3>Your Features</h3>
      <ul>
        <li>View and edit your profile</li>
        <li>Manage security settings</li>
        <li>Check recent logins and activity</li>
        <li>Explore latest deals just for you</li>
      </ul>
    </div>

    <a href="logout.php" class="logout-btn">Logout</a>
  </div>
</body>
</html>
