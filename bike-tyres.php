<?php include('header.php'); ?>

<style>
.tyre-hero {
  padding: 120px 20px;
  color: #fff;
  text-align: center;
  font-size: 36px;
  font-weight: bold;
  text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
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
  box-shadow: 0 8px 24px rgba(0,0,0,0.15);
  display: flex;
  flex-wrap: wrap;
  animation: slideIn 1.4s ease;
}
<style>
.tyre-section {
  padding: 60px 20px;
  background-color: #f8f9fa;
}
.tyre-section h2 {
  text-align: center;
  font-size: 32px;
  margin-bottom: 40px;
  color: #1a1a1a;
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
@media(max-width: 768px) {
  .product-item {
    width: 45%;
  }
}
@media(max-width: 480px) {
  .product-item {
    width: 100%;
  }
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

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

table th, table td {
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
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes slideIn {
  from {transform: translateX(-50px); opacity: 0;}
  to {transform: translateX(0); opacity: 1;}
}

@keyframes fadeInUp {
  from {transform: translateY(40px); opacity: 0;}
  to {transform: translateY(0); opacity: 1;}
}
</style>

<div class="tyre-hero" style="background-image: url('https://media.istockphoto.com/id/170029404/photo/row-of-assorted-motorbike-wheels-on-brick-surface.jpg?s=2048x2048&w=is&k=20&c=AB8uYkM76JPEvaKOM_BS014wpMgIbQUcQNJvd81ndCU=');">
  Bike Tyres
</div>

<div class="tyre-section">
  <div class="tyre-card">
    <img src="https://media.istockphoto.com/id/977297206/photo/row-of-motorcycles-on-street.jpg?s=2048x2048&w=is&k=20&c=kyRGXFgHSMgZggWpUz7_B7MSCorBt3FbubKU8RLR7s8="  alt="Bike Tyre">
    <div class="tyre-card-content">
      <h2>Premium Bike Tyres</h2>
      <p>Wide range of high-performance 2-wheeler tyres built for mileage, speed and safety. Ideal for Indian roads and highways.</p>
    </div>
  </div>

  <div class="tyre-card">
    <img src="image/all brands.png" alt="Bike Brands">
    <div class="tyre-card-content">
      <h2>Top Brands</h2>
      <p>MRF, CEAT, Michelin, TVS Eurogrip, Apollo, and many more available for all models and sizes.</p>
    </div>
  </div>
</div>

<section class="tyre-section">
  <h2>Tyre Categories</h2>
  <div class="products-container">
    <div class="product-item"><img src="https://images.pexels.com/photos/240222/pexels-photo-240222.jpeg"><p>Scooter Tyres</p></div>
    <div class="product-item"><img src="https://images.pexels.com/photos/2626665/pexels-photo-2626665.jpeg"><p>Sport Bike Tyres</p></div>
    <div class="product-item"><img src="https://images.pexels.com/photos/5803397/pexels-photo-5803397.jpeg"><p>Off-Road Tyres</p></div>
    <div class="product-item"><img src="https://images.pexels.com/photos/2611684/pexels-photo-2611684.jpeg"><p>Cruiser Tyres</p></div>
  </div>
</section>

<section class="tyre-section">
  <h2>Popular Tyre Comparison</h2>
  <div style="overflow-x:auto;">
    <table>
      <tr><th>Model</th><th>Brand</th><th>Type</th><th>Price</th></tr>
      <tr><td>Zapper FY1</td><td>MRF</td><td>Sport</td><td>₹2,000</td></tr>
      <tr><td>Gripp XL</td><td>TVS</td><td>Off-road</td><td>₹1,800</td></tr>
      <tr><td>City Pro</td><td>Michelin</td><td>Urban</td><td>₹2,200</td></tr>
    </table>
  </div>
</section>

<section class="tyre-section">
  <h2>Explore Our Top Tyres</h2>
  <div class="products-container">
    
    <div class="product-item">
      <img src="https://dxm.contentcenter.michelin.com/api/.../primacy-4-st_225-55-r17.webp" alt="Michelin Primacy 4ST">
      <p>Michelin Primacy 4ST – ₹6,500</p>
      <div class="btn-group">
        <button class="btn btn-add" onclick="handleCart('add', 0)">Add to Cart</button>
        <button class="btn btn-buy" onclick="handleCart('buy', 0)">Buy Now</button>
      </div>
    </div>
    <div class="product-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTae..." alt="Apollo Alnac 4G">
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
    <div class="product-item">
      <img src="https://www.ceat.com/content/dam/ceat/product-images/4w/securadrive-suv/sku_60.png" alt="CEAT Zoom SUV">
      <p>CEAT Zoom SUV – ₹6,000</p>
      <div class="btn-group">
        <button class="btn btn-add" onclick="handleCart('add', 3)">Add to Cart</button>
        <button class="btn btn-buy" onclick="handleCart('buy', 3)">Buy Now</button>
      </div>
    </div>
    <div class="product-item">
      <img src="https://www.tyrehub.com/wp-content/uploads/2022/01/E400-1.webp" alt="Yokohama Earth-1">
      <p>Yokohama Earth-1 – ₹5,500</p>
      <div class="btn-group">
        <button class="btn btn-add" onclick="handleCart('add', 4)">Add to Cart</button>
        <button class="btn btn-buy" onclick="handleCart('buy', 4)">Buy Now</button>
      </div>
    </div>
    <div class="product-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVtZSGWwcxVOcDARd4DWudUFjYyulPutZQbw&s" alt="Bridgestone Dueler HT">
      <p>Bridgestone Dueler H/T – ₹6,200</p>
      <div class="btn-group">
        <button class="btn btn-add" onclick="handleCart('add', 5)">Add to Cart</button>
        <button class="btn btn-buy" onclick="handleCart('buy', 5)">Buy Now</button>
      </div>
    </div>
    <div class="product-item">
      <img src="https://static1.industrybuying.com/products/automotive-maintenance-and-accessories/tyres--wheels/tyres/AUT.TYR.35654190_1668197357319.webp" alt="Continental ComfortContact CC6">
      <p>Continental ComfortContact CC6 – ₹5,900</p>
      <div class="btn-group">
        <button class="btn btn-add" onclick="handleCart('add', 6)">Add to Cart</button>
        <button class="btn btn-buy" onclick="handleCart('buy', 6)">Buy Now</button>
      </div>
    </div>
    <div class="product-item">
      <img src="https://www.goodyear.co.in/wp-content/uploads/DURAPLUS2_SIDERIM.png" alt="Goodyear Assurance Duraplus">
      <p>Goodyear Assurance Duraplus – ₹6,100</p>
      <div class="btn-group">
        <button class="btn btn-add" onclick="handleCart('add', 7)">Add to Cart</button>
        <button class="btn btn-buy" onclick="handleCart('buy', 7)">Buy Now</button>
      </div>
    </div>
    <div class="product-item">
      <img src="https://m.media-amazon.com/images/I/61VWNYwdStL.jpg" alt="Hankook Kinergy ST">
      <p>Hankook Kinergy ST – ₹5,700</p>
      <div class="btn-group">
        <button class="btn btn-add" onclick="handleCart('add', 8)">Add to Cart</button>
        <button class="btn btn-buy" onclick="handleCart('buy', 8)">Buy Now</button>
      </div>
    </div>
    <div class="product-item">
      <img src="https://trimg.cardekho.com/model/200x200/FAKEN-ZIEX-ZE914.jpg" alt="Falken Ziex ZE914">
      <p>Falken Ziex ZE914 Ecorun – ₹6,300</p>
      <div class="btn-group">
        <button class="btn btn-add" onclick="handleCart('add', 9)">Add to Cart</button>
        <button class="btn btn-buy" onclick="handleCart('buy', 9)">Buy Now</button>
      </div>
    </div>
  </div>
</section>

<section class="tyre-section" style="background:#e9ecef;">
  <h2>What Our Customers Say</h2>
  <div class="products-container">
    <div class="product-item"><p>"Amazing grip on wet roads. Highly recommend MRF!"<br><strong>- Rajesh (Pune)</strong></p></div>
    <div class="product-item"><p>"Michelin has been a game changer for long rides."<br><strong>- Aman (Delhi)</strong></p></div>
    <div class="product-item"><p>"Affordable and durable tyres from TVS."<br><strong>- Priya (Bangalore)</strong></p></div>
  </div>
</section>
<script>
  
const tyres = [
  { name: 'Michelin Primacy 4ST', price: 6500 },
  { name: 'Apollo Alnac 4G', price: 5800 },
  { name: 'MRF ZLX', price: 4200 },
  { name: 'CEAT Zoom SUV', price: 6000 },
  { name: 'Yokohama Earth-1', price: 5500 },
  { name: 'Bridgestone Dueler H/T', price: 6200 },
  { name: 'Continental ComfortContact CC6', price: 5900 },
  { name: 'Goodyear Assurance Duraplus', price: 6100 },
  { name: 'Hankook Kinergy ST', price: 5700 },
  { name: 'Falken Ziex ZE914 Ecorun', price: 6300 }
];



function handleCart(action, index) {
  let cart = JSON.parse(sessionStorage.getItem('cart') || '[]');
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

