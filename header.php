<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Aashirvad Tyre Sales</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
    }

    .top-slogan {
      background: linear-gradient(to right, #0073e6, #00c6ff);
      color: #fff;
      text-align: center;
      padding: 8px 15px;
      font-size: 14px;
      font-weight: 500;
      animation: fadeSlideDown 1s ease;
    }

    header {
      display: grid;
      grid-template-columns: auto 1fr auto;
      align-items: center;
      padding: 15px 30px;
      background-color: #ffffff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.08);
      gap: 20px;
      animation: fadeIn 1.2s ease;
    }

    .logo img {
      height: 80px;
      width: auto;
      object-fit: contain;
      animation: slideLeft 0.8s ease;
    }

    .nav-center {
      display: flex;
      justify-content: center;
      gap: 25px;
      animation: fadeInUp 1s ease;
    }

    .nav-center a {
      text-decoration: none;
      color: #0073e6;
      font-weight: 600;
      position: relative;
      transition: 0.3s ease;
    }

    .nav-center a::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0%;
      height: 2px;
      background: #00c6ff;
      transition: 0.3s ease;
    }

    .nav-center a:hover {
      color: #005bb5;
      transform: scale(1.05);
    }

    .nav-center a:hover::after {
      width: 100%;
    }

    .login-btn a {
      background: linear-gradient(to right, #0073e6, #00c6ff);
      color: white;
      padding: 8px 16px;
      border-radius: 20px;
      text-decoration: none;
      font-weight: bold;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      animation: slideRight 0.8s ease;
    }

    .login-btn a:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(0, 115, 230, 0.3);
    }

    @media (max-width: 768px) {
      header {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .nav-center {
        flex-direction: column;
        gap: 15px;
        margin: 10px 0;
      }

      .login-btn {
        margin-top: 10px;
      }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes slideLeft {
      from { transform: translateX(-30px); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }

    @keyframes slideRight {
      from { transform: translateX(30px); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }

    @keyframes fadeInUp {
      from { transform: translateY(20px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes fadeSlideDown {
      from { transform: translateY(-20px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
  </style>
</head>
<body>

<div class="top-slogan">
  More Grip. More Safety. More Aashirvad.
</div>

<header>
  <div class="logo">
    <img src="image/ChatGPT_Image_Jun_3__2025__04_37_03_PM-removebg-preview.png" alt="Aashirvad Tyres Logo">
  </div>

  <nav class="nav-center">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="services.php">Services</a>
  </nav>

  <div class="login-btn">
    <a href="login.php">Login</a>
  </div>
</header>

</body>
</html>
