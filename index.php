<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Aashirvad Tyres</title>

  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600;700&display=swap" rel="stylesheet">
  <?php include 'header.php'; ?>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Rubik', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      scroll-behavior: smooth;
    }

    .background {
      background: url('image/AdobeStock_572030313_Preview.jpeg') no-repeat center center/cover;
      height: 90vh;
      position: relative;
    }

    .background::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.55);
      z-index: 1;
    }

    .hero {
      height: 100%;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 20px;
      position: relative;
      z-index: 2;
    }

    .hero h1 {
      font-size: 52px;
      margin-bottom: 15px;
      font-weight: 700;
      text-shadow: 1px 1px 4px #000;
    }

    .hero p {
      font-size: 20px;
      max-width: 700px;
      line-height: 1.6;
      text-shadow: 1px 1px 2px #000;
    }

    section {
      padding: 4rem 2rem;
      text-align: center;
      background-color: #fff;
    }

    h2.section-title {
      font-size: 36px;
      margin-bottom: 2.5rem;
      color: #1a1a1a;
      position: relative;
    }

    .section-title::after {
      content: "";
      display: block;
      width: 60px;
      height: 4px;
      background: #0073e6;
      margin: 10px auto 0;
      border-radius: 2px;
    }

    .products-container,
    .new-arrivals-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
      max-width: 1300px;
      margin: auto;
    }

    .product-item,
    .new-arrivals-item {
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      width: 260px;
    }

    .product-item:hover,
    .new-arrivals-item:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
    }

    .product-item img,
    .new-arrivals-item img {
      width: 100%;
      height: auto;
      display: block;
    }

    .product-item p,
    .new-arrivals-item p {
      padding: 1rem;
      font-size: 16px;
      font-weight: 500;
      color: #222;
      text-align: center;
    }

    footer {
      background-color: #111;
      color: #ccc;
      text-align: center;
      padding: 1.5rem 0;
      font-size: 14px;
      margin-top: 2rem;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 34px;
      }

      .hero p {
        font-size: 16px;
      }

      .products-container,
      .new-arrivals-container {
        flex-direction: column;
        align-items: center;
      }

      .product-item,
      .new-arrivals-item {
        width: 90%;
      }
    }

  
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s ease-out;
    }

    .visible {
      opacity: 1 !important;
      transform: none !important;
    }

    .zoom-in {
      opacity: 0;
      transform: scale(0.95);
      transition: all 0.8s ease-out;
    }

    .new-arrivals-section h2.section-title::after {
      background: #00c6ff;
    }
  </style>
</head>

<body>

  <div class="background">
    <div class="hero fade-in">
      <h1>Welcome to Aashirvad Tyres</h1>
      <p>Delivering unmatched grip, safety, and durability for every ride — trust Aashirvad for your journey.</p>
    </div>
  </div>

  <section class="fade-in">
    <h2 class="section-title">Our Products</h2>
    <div class="products-container">
      <div class="product-item zoom-in">
        <img src="image/tyre1.jpg" alt="Tyre 1">
        <p>High Performance Tyre</p>
      </div>
      <div class="product-item zoom-in">
        <img src="image/tyre2.jpg" alt="Tyre 2">
        <p>All-Weather Grip</p>
      </div>
      <div class="product-item zoom-in">
        <img src="image/tyre3.jpg" alt="Tyre 3">
        <p>Fuel Efficient Tyre</p>
      </div>
    </div>
  </section>

  <section class="new-arrivals-section fade-in">
    <h2 class="section-title">New Arrivals</h2>
    <div class="new-arrivals-container">
      <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-95757561-1024x1024.jpg" alt=""><p>Urban Cruiser Tyre</p></div>
      <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-2159848739-1024x1024.jpg" alt=""><p>Extreme Terrain Tyre</p></div>
      <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-154188432-1024x1024.jpg" alt=""><p>Silent Ride Technology</p></div>
      <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-154188432-1024x1024.jpg" alt=""><p>Tubeless Long Life Tyre</p></div>
      <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-543840808-1024x1024.jpg" alt=""><p>Sport Series Tyre</p></div>
      <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-95757561-1024x1024.jpg" alt=""><p>Premium Touring Tyre</p></div>
      <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-1182467468-1024x1024.jpg" alt=""><p>Mud & Snow Tyre</p></div>
      <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-1603428561-1024x1024.jpg" alt=""><p>Off-Road Beast Tyre</p></div>
      <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-2159848589-1024x1024.jpg" alt=""><p>Street Comfort Tyre</p></div>
      <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-2159848739-1024x1024.jpg" alt=""><p>EcoRun Efficient Tyre</p></div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

 
  <script>
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    }, {
      threshold: 0.1
    });

    document.querySelectorAll(".fade-in, .zoom-in").forEach(el => {
      observer.observe(el);
    });
  </script>

</body>

</html>
