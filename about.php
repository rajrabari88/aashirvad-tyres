
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'header.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Aashirvad Tyres - Trusted tyre solutions with quality brands, expert support, and over a decade of experience.">
  <meta name="keywords" content="Aashirvad Tyres, tyre shop, tyres, wheels, auto services">
  <title>About Us - Aashirvad Tyres</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      color: #fff;
      background-color: #000;
    }

    .section-bg {
      background-size: 110%;
      background-position: center;
      color: white;
      padding: 80px 20px;
      position: relative;
      text-align: center;
      transition: background-size 3s ease;
    }

    .section-bg:hover {
      background-size: 115%;
    }

    .section-bg::after {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .section-bg h1, .section-bg h2, .section-bg p {
      position: relative;
      z-index: 2;
    }

    .section-bg h1 {
      font-size: 48px;
      margin-bottom: 20px;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
    }

    .section-bg p {
      font-size: 18px;
      max-width: 900px;
      margin: auto;
      line-height: 1.8;
    }

    .white-section {
      text-align: center;
      background: #fff;
      color: #000;
      padding: 60px 20px;
      max-width: 1500px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
    }

    .about-highlights {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      margin-top: 40px;
      gap: 2rem;
    }

    .highlight-box {
      background-color: #f8f8f8;
      border-left: 4px solid #0073e6;
      padding: 20px;
      border-radius: 8px;
      flex: 1;
      min-width: 250px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
    }

    .highlight-box:hover {
      transform: translateY(-8px);
    }

    .highlight-box h3 {
      margin-bottom: 10px;
      color: #0073e6;
    }

    .team-container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      gap: 30px;
      margin-top: 30px;
    }

    .team-member {
      background: #fdfdfd;
      padding: 15px;
      border-radius: 8px;
      width: 200px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.06);
      transition: transform 0.3s ease;
    }

    .team-member:hover {
      transform: translateY(-8px);
    }

    .team-member img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .team-member h4 {
      margin: 0;
      font-size: 18px;
      color: #0073e6;
    }

    .team-member p {
      font-size: 14px;
      color: #666;
    }

    .fade-in, .zoom-in {
      opacity: 0;
      transition: all 0.6s ease-out;
    }

    .fade-in {
      transform: translateY(20px);
    }

    .zoom-in {
      transform: scale(0.95);
    }

    .visible {
      opacity: 1 !important;
      transform: none !important;
    }
    @media (max-width: 768px) {
  .section-bg {
    padding: 50px 15px;
    background-size: cover;
    background-position: center;
  }

  .section-bg h1 {
    font-size: 28px;
    line-height: 1.3;
  }

  .section-bg h2 {
    font-size: 22px;
    margin-top: 20px;
  }

  .section-bg p {
    font-size: 16px;
    line-height: 1.6;
    padding: 0 10px;
  }

  .white-section {
    padding: 40px 15px;
    border-radius: 8px;
  }

  .about-highlights {
    flex-direction: column;
    gap: 20px;
  }

  .highlight-box {
    padding: 15px;
    margin: 10px 0;
    min-width: auto;
  }

  .team-container {
    flex-direction: column;
    align-items: center;
    gap: 20px;
  }

  .team-member {
    width: 90%;
    padding: 15px;
  }

  .team-member img {
    width: 90px;
    height: 90px;
  }

  .team-member h4 {
    font-size: 16px;
  }

  .team-member p {
    font-size: 13px;
  }
}

   
  




  </style>
</head>

<body>

  <div class="section-bg fade-in" style="background-image: url('image/Benefits_BuysUsedTires.jpg');">
    <h1>About Aashirvad Tyres</h1>
    <p>
      At <strong>Aashirvad Tyres</strong>, we are committed to delivering top-notch tyre solutions that ensure safety,
      durability, and unmatched performance on every road.
    </p>
    <p>
      Whether you're a daily commuter, fleet operator, or a commercial driver, we understand your needs and provide a
      wide range of tyre brands and models suited for all conditions.
    </p>
  </div>

  <div class="section-bg fade-in" style="background-image: url('image/Apollo-Tyres.jpg');">
    <h2>Our Mission</h2>
    <p>
      To provide the safest and most reliable tyre solutions to every vehicle owner while maintaining quality,
      affordability, and a commitment to sustainability.
    </p>
  </div>

  <div class="white-section">
    <h2 class="fade-in">Why Choose Us?</h2>
    <div class="about-highlights">
      <div class="highlight-box zoom-in">
        <h3>✔ Trusted Experience</h3>
        <p>Serving happy customers for over a decade with reliability and care.</p>
      </div>
      <div class="highlight-box zoom-in">
        <h3>✔ Quality Brands</h3>
        <p>We stock only genuine tyres from top brands for unbeatable performance.</p>
      </div>
      <div class="highlight-box zoom-in">
        <h3>✔ Expert Support</h3>
        <p>Our trained professionals ensure the right fit for your vehicle and safety.</p>
      </div>
    </div>

    <h2 class="fade-in" style="margin-top: 50px;">Meet the Team</h2>
    <div class="team-container">
      <div class="team-member zoom-in">
        <img src="image/1000_F_633279559_VdxhBuRNtw0AlxYxUoIfFxv9kpds2KDH.jpg" alt="Parbatbhai Rabari - Founder">
        <h4>Parbatbhai Rabari</h4>
        <p>Founder & CEO</p>
      </div>
      <div class="team-member zoom-in">
        <img src="image/young-indian-businessman-suit-tie-standing-office-ai-generated_843560-800.avif" alt="Rajkumar Rabari - Sales Manager">
        <h4>Rajkumar Rabari</h4>
        <p>Sales Manager</p>
      </div>
      <div class="team-member zoom-in">
        <img src="image/portrait-handsome-young-businessman-standing-office-created-with-generative-ai_762026-15879.avif" alt="Krishkumar Rabari - Lead Technician">
        <h4>Krishkumar Rabari</h4>
        <p>Lead Technician</p>
      </div>
    </div>
  </div>

  <script>
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in, .zoom-in').forEach(el => {
      observer.observe(el);
    });
  </script>

  <?php include 'footer.php'; ?>
</body>
</html>
