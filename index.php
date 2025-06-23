<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Aashirvad Tyres</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Rubik', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      scroll-behavior: smooth;
    }
    #loader-wrapper {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: #ffffff;
      z-index: 9999;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: opacity 1s ease;
    }
    #loader {
      width: 50px; height: 50px;
      border: 6px solid #a3041c;
      border-top-color: transparent;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }
    @keyframes spin {
      to { transform: rotate(360deg); }
    }
    .slider {
      position: relative;
      height: 90vh;
      overflow: hidden;
    }
    .slides {
      display: flex;
      width: 102%;
      height: 100%;
      animation: slideAnimation 15s infinite;
    }
    .slide {
      flex: 1 0 100%;
      background-size: cover;
      background-position: center;
      position: relative;
    }
    .slide-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
      text-shadow: 1px 1px 6px #000;
      animation: fadeInText 1.5s ease-out forwards;
      opacity: 0;
    }
    .slide-content h1 {
      font-size: 52px;
      margin-bottom: 15px;
      font-weight: 700;
    }
    .slide-content p {
      font-size: 20px;
      max-width: 700px;
      margin: auto;
    }
    @keyframes fadeInText {
      to {
        opacity: 1;
        transform: translate(-50%, -50%);
      }
    }
    @keyframes slideAnimation {
      0%, 25%   { transform: translateX(0); }
      33%, 58%  { transform: translateX(-100%); }
      66%, 91%  { transform: translateX(-200%); }
      100%      { transform: translateX(0); }
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
    .products-container, .new-arrivals-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
      max-width: 1300px;
      margin: auto;
    }
    .product-item, .new-arrivals-item {
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      width: 260px;
    }
    .product-item:hover, .new-arrivals-item:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
    }
    .product-item img, .new-arrivals-item img {
      width: 100%;
      height: auto;
      display: block;
    }
    #backToTop {
  position: fixed;
  bottom: 40px;
  right: 30px;
  padding: 12px 15px;
  background: #0073e6;
  color: #fff;
  border: none;
  border-radius: 50%;
  font-size: 20px;
  cursor: pointer;
  display: none;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  z-index: 1001;
}

    .product-item p, .new-arrivals-item p {
      padding: 1rem;
      font-size: 16px;
      font-weight: 500;
      color: #222;
      text-align: center;
    }
    .new-arrivals-section h2.section-title::after {
      background: #00c6ff;
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
      .slide-content h1 { font-size: 30px; }
      .slide-content p { font-size: 16px; }
      .products-container, .new-arrivals-container {
        flex-direction: column;
        align-items: center;
      }
      .product-item, .new-arrivals-item {
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
  </style>
</head>
<body>
  <button id="backToTop" aria-label="Back to top">&#8679;</button>

<div id="loader-wrapper">
  <div id="loader"></div>
</div>

<div class="slider">
  <div class="slides">
    <div class="slide" style="background-image: url('image/AdobeStock_572030313_Preview.jpeg');">
      <div class="slide-content">
        <h1>Welcome to Aashirvad Tyres</h1>
        <p>Delivering unmatched grip, safety, and durability for every ride.</p>
      </div>
    </div>
    <div class="slide" style="background-image: url('image/tyre1.jpg');">
      <div class="slide-content">
        <h1>All Terrain Performance</h1>
        <p>Go further, ride smoother — engineered for all roads.</p>
      </div>
    </div>
    <div class="slide" style="background-image: url('image/tyre3.jpg');">
      <div class="slide-content">
        <h1>Experience the Future</h1>
        <p>Next-gen tyres for next-level performance.</p>
      </div>
    </div>
  </div>
</div>

<section class="fade-in">
  <h2 class="section-title">Our Products</h2>
  <div class="products-container">
    <div class="product-item zoom-in"><img src="image/tyre1.jpg"><p>High Performance Tyre</p></div>
    <div class="product-item zoom-in"><img src="image/tyre2.jpg"><p>All-Weather Grip</p></div>
    <div class="product-item zoom-in"><img src="image/tyre3.jpg"><p>Fuel Efficient Tyre</p></div>
    <div class="product-item zoom-in"><img src="image/tyre-section-bg.jpg.jpeg"><p>Eco Friendly Tyre</p></div>
  
  </div>
</section>

<section class="new-arrivals-section fade-in">
  <h2 class="section-title">New Arrivals</h2>
  <div class="new-arrivals-container">
    <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-95757561-1024x1024.jpg"><p>Urban Cruiser Tyre</p></div>
    <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-2159848739-1024x1024.jpg"><p>Extreme Terrain Tyre</p></div>
    <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-154188432-1024x1024.jpg"><p>Silent Ride Technology</p></div>
    <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-543840808-1024x1024.jpg"><p>Sport Series Tyre</p></div>
    <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-1182467468-1024x1024.jpg"><p>Mud & Snow Tyre</p></div>
    <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-95757561-1024x1024.jpg"><p> Cruiser Tyre</p></div>
    <div class="new-arrivals-item zoom-in"><img src="image/istockphoto-2159848739-1024x1024.jpg"><p>Efficient Tyre</p></div>
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
  }, { threshold: 0.1 });
  document.querySelectorAll(".fade-in, .zoom-in").forEach(el => {
    observer.observe(el);
  });
  window.addEventListener("load", function () {
    document.getElementById("loader-wrapper").style.opacity = '0';
    setTimeout(() => {
      document.getElementById("loader-wrapper").style.display = 'none';
    }, 500);
  });
  const backToTopBtn = document.getElementById('backToTop');
window.onscroll = function() {
  if (document.documentElement.scrollTop > 300) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
};
backToTopBtn.onclick = function() {
  window.scrollTo({top: 0, behavior: 'smooth'});
};

</script>


</body>
</html>
