<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - Aashirvad Tyres</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Rubik', sans-serif;
      margin: 0;
      background-color: #f4f4f4;
      color: #333;
    }

    h1 {
      text-align: center;
      font-size: 36px;
      margin-top: 40px;
      color: #1a1a1a;
      position: relative;
    }

    h1::after {
      content: '';
      display: block;
      width: 60px;
      height: 4px;
      background: #0073e6;
      margin: 10px auto 0;
      border-radius: 2px;
    }

    .contact-wrapper {
      max-width: 1100px;
      margin: 40px auto;
      padding: 20px;
    }

    .contact-details,
    .contact-form-section {
      background: #fff;
      padding: 30px;
      margin-bottom: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
      animation: fadeIn 1s ease-in;
    }

    .contact-details h2,
    .contact-form-section h2 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #0073e6;
    }

    .contact-boxes {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 2rem;
    }

    .contact-box {
      flex: 1;
      min-width: 280px;
      padding: 20px;
      border-left: 4px solid #0073e6;
      background-color: #f7f7f7;
      border-radius: 8px;
    }

    .contact-box h3 {
      margin-bottom: 10px;
      color: #0073e6;
    }

    .contact-box p {
      margin: 5px 0;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    form input, form textarea {
      padding: 12px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 16px;
      resize: none;
    }

    form button {
      background-color: #0073e6;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    form button:hover {
      background-color: #005bb5;
    }

    .map-container {
      margin-top: 30px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    iframe {
      width: 100%;
      height: 300px;
      border: 0;
    }

    @media (max-width: 768px) {
      .contact-boxes {
        flex-direction: column;
      }

      h1 {
        font-size: 28px;
      }
    }

    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

<h1>Contact Us</h1>

<div class="contact-wrapper">

  
  <div class="contact-details">
    <h2>Get in Touch</h2>
    <div class="contact-boxes">
      <div class="contact-box">
        <h3>Email</h3>
        <p>contact@gmail.com</p>
      </div>
      <div class="contact-box">
        <h3>Phone</h3>
        <p>+91 12345 67890</p>
        <p>+91 98765 43210</p>
      </div>
      <div class="contact-box">
        <h3>Address</h3>
        <p>Aashirvad Tyre Sales</p>
        <p>opp. Relincepump,</p>
        <p> Dhanera, Gujarat 385310</p>
      </div>
    </div>
  </div>

 
  <div class="contact-form-section">
    <h2>Send Us a Message</h2>
    <form method="POST" action="#">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <input type="text" name="subject" placeholder="Subject" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>


  <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3450.4580051805883!2d72.01033357514038!3d24.5176293781547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395cab52620619cb%3A0x85b3075cf1c452c3!2sAashirvad%20tyre%20sales!5e1!3m2!1sen!2sin!4v1750239286998!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

</div>

<?php include 'footer.php'; ?>
</body>
</html>
