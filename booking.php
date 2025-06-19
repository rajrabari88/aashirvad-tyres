<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book a Service - Aashirvad Tyres</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Rubik', sans-serif;
      background-color: #f2f6fa;
      color: #333;
    }

    .booking-section {
      max-width: 600px;
      margin: 60px auto;
      padding: 40px 30px;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 25px rgba(0, 0, 0, 0.06);
    }

    .booking-section h2 {
      text-align: center;
      font-size: 32px;
      color: #1a1a1a;
      margin-bottom: 30px;
      position: relative;
    }

    .booking-section h2::after {
      content: "";
      display: block;
      width: 50px;
      height: 3px;
      background: #0073e6;
      margin: 10px auto 0;
      border-radius: 2px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    input, textarea, select {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
    }

    textarea {
      resize: vertical;
    }

    input[type="submit"] {
      background-color: #0073e6;
      color: white;
      font-weight: bold;
      font-size: 16px;
      border: none;
      padding: 12px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #005bb5;
    }

    @media (max-width: 600px) {
      .booking-section {
        padding: 30px 20px;
      }

      .booking-section h2 {
        font-size: 26px;
      }
    }
  </style>
</head>
<body>

<?php
$serviceName = isset($_GET['service']) ? htmlspecialchars($_GET['service']) : '';
?>

<div class="booking-section">
  <h2>Book a Service</h2>
  <form action="submit-booking.php" method="post">
    
    <label for="service">Service</label>
    <input type="text" id="service" name="service" value="<?= $serviceName ?>" readonly>

    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" required>

    <label for="phone">Phone Number</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" maxlength="10" required>

    <label for="date">Preferred Date</label>
    <input type="date" id="date" name="date" required>

    <label for="time">Preferred Time</label>
    <input type="time" id="time" name="time" required>

    <label for="notes">Additional Notes (Optional)</label>
    <textarea id="notes" name="notes" rows="4" placeholder="Anything you'd like to share?"></textarea>

    <input type="submit" value="Submit Booking">
  </form>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
