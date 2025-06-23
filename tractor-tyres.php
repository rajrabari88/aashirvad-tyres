<?php include('header.php'); ?>

<style>
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
.tractor-hero {
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

.tractor-section {
  padding: 60px 20px;
  background-color: #f8f9fa;
  animation: fadeInUp 1.2s ease-in-out;
}

.tractor-section h2 {
  text-align: center;
  font-size: 32px;
  margin-bottom: 40px;
  color: #1a1a1a;
}

.tractor-card {
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

.tractor-card img {
  width: 100%;
  max-width: 400px;
  object-fit: cover;
}

.tractor-card-content {
  flex: 1;
  padding: 30px;
}

.tractor-card-content h2 {
  font-size: 28px;
  margin-bottom: 15px;
}

.tractor-card-content p {
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
  .tractor-card {
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

<div class="tractor-hero" style="background-image: url('https://media.istockphoto.com/id/1011284064/photo/farmer-plowing-field.jpg?s=2048x2048&w=is&k=20&c=4oHwIMpujS0Sl5K4qmSJhQgMcTcfgm7ziTLJzr-0NOk='">
  Tractor Tyres
</div>

<div class="tractor-section">
  <div class="tractor-card">
    <img src="https://content.jdmagicbox.com/quickquotes/images_main/tractor-tyres-371910720-h88jt.jpg?impolicy=queryparam&im=Resize=(360,360),aspect=fit" alt="Tractor Tyre">
    <div class="tractor-card-content">
      <h2>Heavy-Duty Tractor Tyres</h2>
      <p>Built for rugged agricultural fields and tough terrains. Designed for durability, better traction and fuel efficiency.</p>
    </div>
  </div>

  <div class="tractor-card">
    <img src="image/all brands.png" alt="Tractor Brands">
    <div class="tractor-card-content">
      <h2>Leading Brands</h2>
      <p>MRF, CEAT, Apollo, BKT, JK Tyre, Ralco and many more available for all tractor models.</p>
    </div>
  </div>
</div>

<section class="tractor-section">
  <h2>Tractor Tyre Categories</h2>
  <div class="products-container">
    <div class="product-item"><img src="https://jktyre-media-1.s3.ap-south-1.amazonaws.com/TRACTOR_FRONT_copy_ec8b102e5f.png"><p>Front Tyres</p></div>
    <div class="product-item"><img src="https://www.apollotyres.com/content/dam/orbit/apollo-tyres-en-in/farm-tyres-offer/apollo-farmking-tractor-tyres.jpg"><p>Rear Tyres</p></div>
    <div class="product-item"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw7cZZF69cJOSiCAtLhQh1mXJz6xisHutP5A&s"><p>Implement Tyres</p></div>
    <div class="product-item"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmpoRp5R0qj01Ys8pw8Z4GYRZnbS_tT9mrnQ&s"><p>Multi-Purpose Tyres</p></div>
  </div>
</section>

<section class="tractor-section">
  <h2>Popular Tractor Tyres Comparison</h2>
  <div style="overflow-x:auto;">
    <table>
      <tr><th>Model</th><th>Brand</th><th>Size</th><th>Price</th></tr>
      <tr><td>Tractor Front Tyre</td><td>MRF</td><td>6.00-16</td><td>₹3,500</td></tr>
      <tr><td>Agristar</td><td>CEAT</td><td>13.6-28</td><td>₹9,200</td></tr>
      <tr><td>BKT TR-135</td><td>BKT</td><td>14.9-28</td><td>₹11,000</td></tr>
    </table>
  </div>
</section>

<section class="tractor-section">
  <h2>Top Tractor Tyres</h2>
  <div class="products-container">
    <div class="product-item">
      <img src="https://5.imimg.com/data5/SELLER/Default/2023/6/317221640/OS/KD/PD/138002558/mrf-14-9-28-shakti-life-plus-tyre.jpg">
      <p>MRF Shakti Life Plus<br><strong>₹3500</strong></p>
      <div class="product-actions">
        <button class="add-btn" onclick='addToCart("MRF Shakti Life Plus", 3500, "https://5.imimg.com/data5/SELLER/Default/2023/6/317221640/OS/KD/PD/138002558/mrf-14-9-28-shakti-life-plus-tyre.jpg")'>Add to Cart</button>
        <button class="buy-btn" onclick='buyNow("MRF Shakti Life Plus", 3500, "https://5.imimg.com/data5/SELLER/Default/2023/6/317221640/OS/KD/PD/138002558/mrf-14-9-28-shakti-life-plus-tyre.jpg")'>Buy Now</button>
      </div>
    </div>
    <!-- Repeat similar blocks for each tyre below -->
    <!-- CEAT Farmax R85 -->
    <div class="product-item">
      <img src="https://www.ceatspecialty.com/content/dam/ceatspeciality/product-images/farmax-r85/images/60.png">
      <p>CEAT Farmax R85<br><strong>₹4200</strong></p>
      <div class="product-actions">
        <button class="add-btn" onclick='addToCart("CEAT Farmax R85", 4200, "https://www.ceatspecialty.com/content/dam/ceatspeciality/product-images/farmax-r85/images/60.png")'>Add to Cart</button>
        <button class="buy-btn" onclick='buyNow("CEAT Farmax R85", 4200, "https://www.ceatspecialty.com/content/dam/ceatspeciality/product-images/farmax-r85/images/60.png")'>Buy Now</button>
      </div>
    </div>
    <!-- BKT TR-135 -->
    <div class="product-item">
      <img src="https://5.imimg.com/data5/SELLER/Default/2023/12/372797111/DK/RK/FY/20662661/bkt-tr-135-8-3-24-pr-8-tractor-tyre-500x500.jpg">
      <p>BKT TR-135<br><strong>₹5000</strong></p>
      <div class="product-actions">
        <button class="add-btn" onclick='addToCart("BKT TR-135", 5000, "https://5.imimg.com/data5/SELLER/Default/2023/12/372797111/DK/RK/FY/20662661/bkt-tr-135-8-3-24-pr-8-tractor-tyre-500x500.jpg")'>Add to Cart</button>
        <button class="buy-btn" onclick='buyNow("BKT TR-135", 5000, "https://5.imimg.com/data5/SELLER/Default/2023/12/372797111/DK/RK/FY/20662661/bkt-tr-135-8-3-24-pr-8-tractor-tyre-500x500.jpg")'>Buy Now</button>
      </div>
    </div>
    <!-- JK Tractor Rear Tyre -->
    <div class="product-item">
      <img src="https://jktyre-media-1.s3.ap-south-1.amazonaws.com/TRACTOR_REAR_copy_df58f5281d.png">
      <p>JK Tractor Rear Tyre<br><strong>₹4800</strong></p>
      <div class="product-actions">
        <button class="add-btn" onclick='addToCart("JK Tractor Rear Tyre", 4800, "https://jktyre-media-1.s3.ap-south-1.amazonaws.com/TRACTOR_REAR_copy_df58f5281d.png")'>Add to Cart</button>
        <button class="buy-btn" onclick='buyNow("JK Tractor Rear Tyre", 4800, "https://jktyre-media-1.s3.ap-south-1.amazonaws.com/TRACTOR_REAR_copy_df58f5281d.png")'>Buy Now</button>
      </div>
    </div>
    <!-- Ralco Tractor Tyre -->
    <div class="product-item">
      <img src="https://images.tractorgyan.com/uploads/82/gt-maxx-RL4013.webp">
      <p>Ralco Tractor Tyre<br><strong>₹3900</strong></p>
      <div class="product-actions">
        <button class="add-btn" onclick='addToCart("Ralco Tractor Tyre", 3900, "https://images.tractorgyan.com/uploads/82/gt-maxx-RL4013.webp")'>Add to Cart</button>
        <button class="buy-btn" onclick='buyNow("Ralco Tractor Tyre", 3900, "https://images.tractorgyan.com/uploads/82/gt-maxx-RL4013.webp")'>Buy Now</button>
      </div>
    </div>
  </div>
</section>
<section class="tractor-section" style="background:#e9ecef;">
  <h2>Customer Feedback</h2>
  <div class="products-container">
    <div class="product-item"><p>"Best traction in muddy fields. Highly recommend CEAT."<br><strong>- Balbir (Punjab)</strong></p></div>
    <div class="product-item"><p>"Strong and durable tyre from BKT."<br><strong>- Mahesh (Gujarat)</strong></p></div>
    <div class="product-item"><p>"Affordable and long-lasting. JK tyre is great."<br><strong>- Ravi (MP)</strong></p></div>
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
