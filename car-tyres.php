<?php include('header.php'); ?>

<style>
  .tyre-hero {
    padding: 120px 20px;
    color: #fff;
    text-align: center;
    font-size: 36px;
    font-weight: bold;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
    background-size: cover;
    background-position: center;
    animation: fadeIn 1.5s ease-in-out;
  }

  .tyre-section {
    padding: 60px 20px;
    background-color: #f8f9fa;
    animation: fadeInUp 1.2s ease-in-out;
  }

  .tyre-section h2 {
    text-align: center;
    font-size: 32px;
    margin-bottom: 40px;
    color: #1a1a1a;
  }

  .tyre-card {
    max-width: 900px;
    margin: 40px auto;
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    display: flex;
    flex-wrap: wrap;
    animation: slideIn 1.4s ease;
  }

  .tyre-card img {
    width: 100%;
    max-width: 400px;
    object-fit: cover;
  }

  .tyre-card-content {
    flex: 1;
    padding: 30px;
  }

  .tyre-card-content h2 {
    font-size: 28px;
    margin-bottom: 15px;
  }

  .tyre-card-content p {
    font-size: 16px;
    color: #444;
    line-height: 1.6;
  }

  .products-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
    max-width: 1300px;
    margin: auto;
  }

  .product-item {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 260px;
    text-align: center;
    position: relative;
  }

  .product-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
  }

  .product-item img {
    width: 100%;
    height: auto;
    display: block;
  }

  .product-item p {
    padding: 1rem;
    font-size: 16px;
    font-weight: 500;
    color: #222;
  }

  .btn-group {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-bottom: 1rem;
  }

  .btn {
    padding: 8px 16px;
    border: none;
    border-radius: 6px;
    font-size: 14px;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  .btn-add {
    background-color: #007bff;
    color: #fff;
  }

  .btn-add:hover {
    background-color: #0062cc;
  }

  .btn-buy {
    background-color: #28a745;
    color: #fff;
  }

  .btn-buy:hover {
    background-color: #218838;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  table th,
  table td {
    padding: 12px;
    border: 1px solid #ccc;
    text-align: center;
  }

  table th {
    background-color: #333;
    color: #fff;
  }

  table tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  @media(max-width: 768px) {
    .tyre-card {
      flex-direction: column;
    }
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes slideIn {
    from {
      transform: translateX(-50px);
      opacity: 0;
    }

    to {
      transform: translateX(0);
      opacity: 1;
    }
  }

  @keyframes fadeInUp {
    from {
      transform: translateY(40px);
      opacity: 0;
    }

    to {
      transform: translateY(0);
      opacity: 1;
    }
  }
</style>

<div class="tyre-hero"
  style="background-image: url('https://images.pexels.com/photos/164634/pexels-photo-164634.jpeg');">
  Car Tyres
</div>

<div class="tyre-section">
  <div class="tyre-card">
    <img
      src="https://images.unsplash.com/photo-1709722393765-fe78276dbde7?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
      alt="Car Tyre">
    <div class="tyre-card-content">
      <h2>Premium Car Tyres</h2>
      <p>Wide range of high-performance car tyres built for comfort, performance and safety. Ideal for Indian roads and
        highways.</p>
    </div>
  </div>

  <div class="tyre-card">
    <img src="image/all brands.png" alt="Car Tyre Brands">
    <div class="tyre-card-content">
      <h2>Top Brands</h2>
      <p>MRF, CEAT, Michelin, Apollo, TVS Eurogrip, Yokohama, Bridgestone and many more for all car models and sizes.
      </p>
    </div>
  </div>
</div>

<section class="tyre-section">
  <h2>Explore Our Top Tyres</h2>
  <div class="products-container">
    <div class="product-item">
      <img
        src="https://dxm.contentcenter.michelin.com/api/wedia/dam/transform/b98rpyxf61b4qd8gwzn37xt9ow/4w-366_3528703891734_tire_michelin_primacy-4-st_225-slash-55-r17-101w-xl_a_main_1-30_nopad.webp"
        alt="Michelin Primacy 4ST">
      <p>Michelin Primacy 4ST – ₹6,500</p>
      <div class="btn-group">
        <button class="btn btn-add" onclick="handleCart('add', 0)">Add to Cart</button>
        <button class="btn btn-buy" onclick="handleCart('buy', 0)">Buy Now</button>
      </div>
    </div>

    <div class="product-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTae-HqNo5FTInuUpLSJgOsgkIMLM5lm3QzOQ&s"
        alt="Apollo Alnac 4G">
      <p>Apollo Alnac 4G – ₹5,800</p>
      <div class="btn-group">
        <button class="btn btn-add" onclick="handleCart('add', 1)">Add to Cart</button>
        <button class="btn btn-buy" onclick="handleCart('buy', 1)">Buy Now</button>
      </div>
    </div>

    <div class="product-item">
      <img src="https://www.mrftyres.com/images/tyres/patterns/ZLX-Sidewall.png" alt="MRF ZLX">
      <p>MRF ZLX – ₹4,200</p>
      <div class="btn-group">
        <button class="btn btn-add" onclick="handleCart('add', 2)">Add to Cart</button>
        <button class="btn btn-buy" onclick="handleCart('buy', 2)">Buy Now</button>
      </div>
    </div>

    <!-- Add more tyres similarly if needed... -->
  </div>
</section>

<script>
  const tyres = [
    { name: 'Michelin Primacy 4ST', price: 6500 },
    { name: 'Apollo Alnac 4G', price: 5800 },
    { name: 'MRF ZLX', price: 4200 }
    // Add more if added in UI
  ];

  function handleCart(action, index) {
    let cart = JSON.parse(localStorage.getItem('cart') || '[]');
    let item = tyres[index];
    let found = cart.find(i => i.name === item.name);

    if (found) {
    if (action === 'add') {
      found.qty++;
    } else {
      found.qty++;
      sessionStorage.setItem('cart', JSON.stringify(cart));
      setTimeout(() => window.location.href = 'checkout.php', 100); 
    }
  } else {
    cart.push({ name: item.name, price: item.price, qty: 1 });
    sessionStorage.setItem('cart', JSON.stringify(cart));
    if (action === 'buy') {
      setTimeout(() => window.location.href = 'checkout.php', 100);
      return;
    }
  }

  sessionStorage.setItem('cart', JSON.stringify(cart));
  alert(item.name + (action === 'add' ? ' added to cart' : ' - proceed to buy'));
}
</script>

<?php include('footer.php'); ?>