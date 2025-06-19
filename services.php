<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Our Services - Aashirvad Tyres</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Rubik', sans-serif;
      background-color: #f2f6fa;
      color: #333;
    }

    .services-section {
      max-width: 1200px;
      margin: 60px auto;
      padding: 50px 30px;
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 25px rgba(0, 0, 0, 0.06);
      animation: fadeInUp 0.8s ease;
    }

    .services-section h1 {
      text-align: center;
      color: #1a1a1a;
      font-size: 38px;
      margin-bottom: 50px;
      position: relative;
    }

    .services-section h1::after {
      content: "";
      display: block;
      width: 60px;
      height: 4px;
      background: #0073e6;
      margin: 12px auto 0;
      border-radius: 2px;
    }

    .service-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 50px;
    }

    .service-card {
      background-color: #f7fbff;
      padding: 30px 25px;
      border-radius: 12px;
      text-align: center;
      transition: all 0.3s ease;
      border-top: 4px solid #0073e6;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.05);
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .service-card:hover {
      background-color: #eaf4ff;
      transform: translateY(-6px);
      box-shadow: 0 12px 24px rgba(0, 115, 230, 0.15);
    }

    .service-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .service-card h3 {
      font-size: 20px;
      color: #0073e6;
      margin-bottom: 12px;
    }

    .service-card p {
      font-size: 15px;
      line-height: 1.6;
      color: #444;
      flex-grow: 1;
    }

    .book-btn {
      margin-top: 20px;
      background-color: #0073e6;
      color: #fff;
      border: none;
      padding: 10px 18px;
      font-size: 14px;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .book-btn:hover {
      background-color: #005bb5;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 600px) {
      .services-section {
        padding: 40px 20px;
      }

      .services-section h1 {
        font-size: 28px;
      }
    }
  </style>
</head>
<body>

<div class="services-section">
  <h1>Our Services</h1>
  <div class="service-grid">

    <div class="service-card">
      <img src="image/Apollo-Banners-15-04-25-12-14-37.jpg" alt="Tyre Sales">
      <h3>Tyre Sales</h3>
      <p>Wide variety of branded tyres suitable for all vehicle types and terrain — best price guarantee.</p>
      <a href="booking.php?service=Tyre Sales" class="book-btn">Book Now</a>
    </div>

    <div class="service-card">
      <img src="image/drive-online-sales-with-a-web-based-tyre-size-scanner-solution-1800x500.jpg" alt="Wheel Alignment">
      <h3>Wheel Alignment</h3>
      <p>Precision wheel alignment using state-of-the-art equipment for better mileage and tyre life.</p>
      <a href="booking.php?service=Wheel Alignment" class="book-btn">Book Now</a>
    </div>

    <div class="service-card">
      <img src="image/images (1).jpeg" alt="Tyre Repair">
      <h3>Tyre Repair</h3>
      <p>Quick puncture repairs and sidewall fixing to get you back on the road in no time.</p>
      <a href="booking.php?service=Tyre Repair" class="book-btn">Book Now</a>
    </div>

    <div class="service-card">
      <img src="image/images.jpeg" alt="Tyre Fitting">
      <h3>Tyre Fitting</h3>
      <p>On-spot tyre fitting and wheel balancing by trained professionals using modern tools.</p>
      <a href="booking.php?service=Tyre Fitting" class="book-btn">Book Now</a>
    </div>

    <div class="service-card">
      <img src="image/Apollo-Tyres.jpg" alt="Tyre Balancing">
      <h3>Tyre Balancing</h3>
      <p>Eliminate wheel wobble with computerized wheel balancing for a smooth and safe drive.</p>
      <a href="booking.php?service=Tyre Balancing" class="book-btn">Book Now</a>
    </div>

    <div class="service-card">
      <img src="image/car-battery-voltage-guide.webp" alt="Battery Services">
      <h3>Battery Services</h3>
      <p>Car and bike battery testing, jumpstart, and replacement with top battery brands available.</p>
      <a href="booking.php?service=Battery Services" class="book-btn">Book Now</a>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
