<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Aashirvad Tyre Sales</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      animation: fadeInBody 1.5s ease;
    }

    @keyframes fadeInBody {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .top-slogan {
      background: linear-gradient(to right, #000000, #040505);
      color: white;
      text-align: center;
      padding: 8px 15px;
      font-size: 14px;
      font-weight: 600;
      letter-spacing: 0.5px;
      animation: fadeInTop 1.2s ease;
    }

    @keyframes fadeInTop {
      from { transform: translateY(-20px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    @media (max-width: 768px) {
  header,
  .nav-bar {
    flex-direction: column;
    text-align: center;
    gap: 15px;
  }

  .logo img {
    height: 60px;
    margin: 10px 0;
  }

  .location {
    justify-content: center;
    font-size: 14px;
  }

  .header-icons {
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 12px;
    margin-top: 10px;
  }

  .nav-bar {
    flex-wrap: wrap;
    gap: 20px;
    padding: 12px 0;
  }

  .nav-bar a {
    font-size: 14px;
    padding: 8px;
  }

  .dropdown-content {
    left: 50%;
    transform: translateX(-50%);
    min-width: 160px;
    text-align: left;
  }

  .search-box {
    position: static;
    transform: none;
    width: 100%;
    margin: 10px 0;
    display: block !important;
    text-align: center;
  }

  .search-box input {
    width: 90%;
    font-size: 14px;
  }
}


    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0px 30px;
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      flex-wrap: wrap;
      animation: slideInHeader 1.2s ease;
    }

    @keyframes slideInHeader {
      from { transform: translateY(-30px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 70px;
      transition: transform 0.4s ease;
    }

    .logo img:hover {
      transform: scale(1.05);
    }

    .location {
      font-size: 16px;
      color: #0073e6;
      display: flex;
      align-items: center;
      gap: 6px;
      font-weight: 600;
    }

    .location a {
      color: #0073e6;
      text-decoration: none;
    }

    .header-icons {
      display: flex;
      align-items: center;
      gap: 25px;
      position: relative;
      animation: fadeInIcons 1.4s ease;
    }

    @keyframes fadeInIcons {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .header-icons a,
    .header-icons button {
      text-decoration: none;
      color: #333;
      font-size: 15px;
      background: none;
      border: none;
      display: flex;
      align-items: center;
      gap: 6px;
      cursor: pointer;
      transition: color 0.3s;
    }

    .header-icons a:hover,
    .header-icons button:hover {
      color: #0073e6;
    }

    .header-icons img {
      width: 18px;
      height: 18px;
    }

    .search-box {
      position: absolute;
      top: 30px;
      right: 60px;
      display: none;
      background: #fff;
      padding: 6px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      z-index: 1000;
      animation: fadeSearch 0.3s ease;
    }

    @keyframes fadeSearch {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }

    .search-box input {
      padding: 5px 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 200px;
    }

    .nav-bar {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 40px;
      padding: 14px 0;
      background-color: white;
      border-top: 1px solid #eee;
      border-bottom: 1px solid #eee;
      animation: fadeInNav 1.3s ease;
    }

    @keyframes fadeInNav {
      from { opacity: 0; transform: translateY(-15px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .nav-bar a {
      text-decoration: none;
      color: #000;
      font-weight: 500;
      font-size: 15px;
      position: relative;
      padding: 6px 10px;
      transition: all 0.3s ease;
    }

    .nav-bar a:hover {
      color: #0073e6;
    }

    .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      top: 36px;
      left: 0;
      background-color: #fff;
      min-width: 200px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
      z-index: 1000;
      border-radius: 4px;
      overflow: hidden;
      animation: slideDown 0.3s ease;
    }

    @keyframes slideDown {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .dropdown-content a {
      display: block;
      padding: 10px 16px;
      color: #000;
      text-decoration: none;
    }

    .dropdown-content a:hover {
      background-color: #f0f0f0;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    @media (max-width: 768px) {
      header, .nav-bar {
        flex-direction: column;
        text-align: center;
        gap: 15px;
      }

      .header-icons {
        justify-content: center;
        margin-top: 10px;
        flex-direction: column;
      }

      .nav-bar {
        gap: 25px;
        padding: 10px 0;
      }

      .dropdown-content {
        left: 50%;
        transform: translateX(-50%);
      }

      .search-box {
        right: 0;
        left: 50%;
        transform: translateX(-50%);
      }
    }
  </style>
</head>

<body>

  <div class="top-slogan">
    More Grip. More Safety. More Aashirvad.
  </div>

  <header>
    <div class="logo">
      <img src="image/ChatGPT_Image_Jun_3__2025__04_37_03_PM-removebg-preview (2).png" alt="Aashirvad Tyres Logo">
    </div>
    <div class="location">
      📍 <a href="https://www.google.com/maps/place/Dhanera,+Gujarat" target="_blank"><strong>DHANERA (GUJARAT)</strong> ▼</a>
    </div>
    <div class="header-icons">
      <button onclick="toggleSearch()">
        <img src="https://img.icons8.com/ios-filled/20/search.png" alt="Search" />Search
      </button>
       <a href="checkout.php" class="cart-button">
      <img src="https://img.icons8.com/ios-filled/20/shopping-cart.png" alt="Cart" /> Cart
    </a>
      <a href="login.php"><img src="https://img.icons8.com/ios-filled/20/user.png" />Sign In</a>
      <form action="search.php" method="GET" class="search-box" id="searchBox">
        <input type="text" name="query" id="search" onclick="searchArray()" placeholder="Search...">
      </form>
    </div>
  </header>

  <nav class="nav-bar">
    <a href="index.php">HOME</a>
    <a href="about.php">ABOUT</a>
    <a href="contact.php">CONTACT</a>
    <a href="services.php">SERVICES</a>
    <div class="dropdown">
      <a>TYRES ▼</a>
      <div class="dropdown-content">
        <a href="bike-tyres.php">Bike Tyres</a>
        <a href="car-tyres.php">Car Tyres</a>
        <a href="truck-tyres.php">Truck Tyres</a>
        <a href="tractor-tyres.php">Tractor Tyres</a>
        <a href="other-tyres.php">Other Tyres</a>
      </div>
    </div>
  </nav>

  <script>
    function toggleSearch() {
      const box = document.getElementById("searchBox");
      box.style.display = box.style.display === "block" ? "none" : "block";
    }

    const arry = ['mrf', 'ceat', 'apollo', 'tractor', 'bike'];

    function searchArray() {
      const input = document.getElementById("search").value.toLowerCase();
      const match = arry.find(item => item.toLowerCase().includes(input));
      if (match) {
        alert("Match found: " + match);
      } else {
        alert("No match found");
      }
    }
  </script>
</body>
</html>
