
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
</style><?php include('header.php'); ?>

<div class="tyre-hero" style="background-image: url('https://images.pexels.com/photos/13746764/pexels-photo-13746764.jpeg');">
  Other Tyres
</div>

<div class="tyre-section">
  <div class="tyre-card">
    <img src="https://images.pexels.com/photos/5008306/pexels-photo-5008306.jpeg" alt="Other Tyre">
    <div class="tyre-card-content">
      <h2>Special Purpose Tyres</h2>
      <p>We also supply tyres for loaders, rickshaws, carts, industrial machines and electric vehicles.</p>
    </div>
  </div>

  <div class="tyre-card">
    <img src="image/all brands.png" alt="Other Brands">
    <div class="tyre-card-content">
      <h2>Top Specialty Brands</h2>
      <p>Ralco, Birla, CEAT, ATG – durable, economical and purpose-built tyres available for your custom needs.</p>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
