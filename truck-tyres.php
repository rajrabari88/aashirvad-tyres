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
.product-actions {
  margin-top: 0.5rem;
}
.add-btn, .buy-btn {
  padding: 6px 12px;
  border: none;
  border-radius: 5px;
  margin: 3px;
  font-size: 14px;
  cursor: pointer;
}
.add-btn {
  background-color: #007bff;
  color: #fff;
}
.buy-btn {
  background-color: #28a745;
  color: #fff;
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

<div class="tyre-hero" style="background-image: url('https://images.pexels.com/photos/2348359/pexels-photo-2348359.jpeg');">
  Truck Tyres
</div>

<div class="tyre-section">
  <div class="tyre-card">
    <img src="https://images.pexels.com/photos/3806252/pexels-photo-3806252.jpeg" alt="Truck Tyre">
    <div class="tyre-card-content">
      <h2>Heavy Duty Truck Tyres</h2>
      <p>Built for long hauls, high load capacity, and rugged conditions. Designed for top safety, maximum mileage, and balanced performance on highways and terrains.</p>
    </div>
  </div>

  <div class="tyre-card">
    <img src="image/all brands.png" alt="Truck Brands">
    <div class="tyre-card-content">
      <h2>Trusted Brands</h2>
      <p>JK Tyre, Apollo, MRF, BKT and more. Fleet tyre solutions available—bulk orders supported with exclusive pricing.</p>
    </div>
  </div>
</div>

<section class="tyre-section">
  <h2>Tyre Categories</h2>
  <div class="products-container">
    <div class="product-item"><img src="https://s3-ap-southeast-2.amazonaws.com/mytyresite-images/news/semi-trailer-truck-kogarah.jpg"><p>Highway Tyres</p></div>
    <div class="product-item"><img src="https://content.tyrepower.com.au/articles/covers/all-terrain-tyres.jpg"><p>All‑Terrain Tyres</p></div>
    <div class="product-item"><img src="https://nokiantyres.studio.crasman.cloud/pub/web/heavy-tyres/img/content_images/Machine%20pages/All%20terrain%20%26%20Military/NokianTyres-all-terrain-truck-tires.jpg?c=system_x1080"><p>Mud‑Terrain Tyres</p></div>
    <div class="product-item"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHNhCrNSgIxHvNHSJm6VKQJzBVR_rSOciQrQ&s"><p>Trailer Tyres</p></div>
  </div>
</section>

<section class="tyre-section">
  <h2>Popular Tyre Comparison</h2>
  <div style="overflow-x:auto;">
    <table>
      <tr><th>Model</th><th>Brand</th><th>Type</th><th>Price</th></tr>
      <tr><td>JK DriveGuard</td><td>JK Tyre</td><td>Highway</td><td>₹5,500</td></tr>
      <tr><td>Apollo EnduRace R</td><td>Apollo</td><td>All‑Terrain</td><td>₹6,300</td></tr>
      <tr><td>MRF Banda Trac</td><td>MRF</td><td>Mud‑Terrain</td><td>₹7,200</td></tr>
    </table>
  </div>
</section>

<section class="tyre-section">
  <h2>Explore Our Top Tyres</h2>
  <div class="products-container">
    <div class="product-item">
      <img src="https://jktyre-media-1.s3.ap-south-1.amazonaws.com/Construction_Material_copy_d7e318128a.png">
      <p>JK Tyre DriveGuard<br><strong>₹6200</strong></p>
      <div class="product-actions">
        <button class="add-btn" onclick='addToCart("JK Tyre DriveGuard", 6200, "https://jktyre-media-1.s3.ap-south-1.amazonaws.com/Construction_Material_copy_d7e318128a.png")'>Add to Cart</button>
        <button class="buy-btn" onclick='buyNow("JK Tyre DriveGuard", 6200, "https://jktyre-media-1.s3.ap-south-1.amazonaws.com/Construction_Material_copy_d7e318128a.png")'>Buy Now</button>
      </div>
    </div>

    <div class="product-item">
      <img src="https://www.apollotyres.com/content/dam/orbit/syncforce/products/1820/T0013279.png">
      <p>Apollo EnduRace R<br><strong>₹5900</strong></p>
      <div class="product-actions">
        <button class="add-btn" onclick='addToCart("Apollo EnduRace R", 5900, "https://www.apollotyres.com/content/dam/orbit/syncforce/products/1820/T0013279.png")'>Add to Cart</button>
        <button class="buy-btn" onclick='buyNow("Apollo EnduRace R", 5900, "https://www.apollotyres.com/content/dam/orbit/syncforce/products/1820/T0013279.png")'>Buy Now</button>
      </div>
    </div>

    <div class="product-item">
      <img src="https://www.mrftyres.com/images/tyres/patterns/OTR-musclerok-roadtrac.png">
      <p>MRF Banda Trac<br><strong>₹5500</strong></p>
      <div class="product-actions">
        <button class="add-btn" onclick='addToCart("MRF Banda Trac", 5500, "https://www.mrftyres.com/images/tyres/patterns/OTR-musclerok-roadtrac.png")'>Add to Cart</button>
        <button class="buy-btn" onclick='buyNow("MRF Banda Trac", 5500, "https://www.mrftyres.com/images/tyres/patterns/OTR-musclerok-roadtrac.png")'>Buy Now</button>
      </div>
    </div>

    <div class="product-item">
      <img src="https://images.jdmagicbox.com/quickquotes/images_main/bkt-w207-tyre-378350533-om3lu.jpg">
      <p>BKT Urban Trail<br><strong>₹6100</strong></p>
      <div class="product-actions">
        <button class="add-btn" onclick='addToCart("BKT Urban Trail", 6100, "https://images.jdmagicbox.com/quickquotes/images_main/bkt-w207-tyre-378350533-om3lu.jpg")'>Add to Cart</button>
        <button class="buy-btn" onclick='buyNow("BKT Urban Trail", 6100, "https://images.jdmagicbox.com/quickquotes/images_main/bkt-w207-tyre-378350533-om3lu.jpg")'>Buy Now</button>
      </div>
    </div>
  </div>
</section>


<section class="tyre-section" style="background:#e9ecef;">
  <h2>What Our Fleet Owners Say</h2>
  <div class="products-container">
    <div class="product-item"><p>"JK Tyre DriveGuard gave us 20% more life on long routes."<br><strong>– Gupta Transport, Mumbai</strong></p></div>
    <div class="product-item"><p>"Apollo EnduRace handled rough terrain like a champ."<br><strong>– Singh Logistics, Delhi</strong></p></div>
    <div class="product-item"><p>"Reliable and cost-effective MRF truck tyres."<br><strong>– Sharma Haulage, Bangalore</strong></p></div>
  </div>
</section>

<?php include('footer.php'); ?>
<script>
function addToCart(name, price, image) {
  let cart = JSON.parse(sessionStorage.getItem('cart') || '[]');
  const index = cart.findIndex(p => p.name === name);
  if (index >= 0) {
    cart[index].qty += 1;
  } else {
    cart.push({ name, price, image, qty: 1 });
  }
  sessionStorage.setItem('cart', JSON.stringify(cart));
  alert(name + ' added to cart');
}

function buyNow(name, price, image) {
  addToCart(name, price, image);
  window.location.href = 'checkout.php';
}
</script>
