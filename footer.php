<style>
   
footer {
  background-color: #111;
  color: #ccc;
  padding: 50px 20px 30px;
  font-family: 'Georgia', serif;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  max-width: 1200px;
  margin: auto;
  gap: 30px;
}

.footer-section {
  flex: 1 1 250px;
  min-width: 200px;
}

.footer-section h3,
.footer-section h4 {
  color: #fff;
  margin-bottom: 20px;
  font-weight: bold;
  font-size: 18px;
  position: relative;
}

.footer-section h3::after,
.footer-section h4::after {
  content: '';
  display: block;
  width: 40px;
  height: 2px;
  background-color: #0073e6;
  margin-top: 8px;
}

.footer-section p,
.footer-section li {
  margin: 10px 0;
  line-height: 1.6;
  color: #aaa;
  font-size: 15px;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li a {
  color: #aaa;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-section ul li a:hover {
  color: #0073e6;
  text-decoration: underline;
}

.social-icons {
  display: flex;
  gap: 12px;
  margin-top: 15px;
}

.social-link svg {
  fill: #bbb;
  transition: transform 0.3s ease, fill 0.3s ease;
}

.social-link:hover svg {
  transform: scale(1.2);
  fill: #0073e6;
}

.footer-bottom {
  text-align: center;
  padding-top: 30px;
  border-top: 1px solid #333;
  margin-top: 40px;
  font-size: 14px;
  color: #777;
}

@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    align-items: flex-start;
  }

  .footer-section {
    margin-bottom: 30px;
  }
}
</style>


<footer>
  <div class="footer-container">

    <div class="footer-section about">
      <h3>Aashirvad Tyres</h3>
      <p>Delivering unmatched grip, safety, and durability for every ride. We are committed to quality and customer satisfaction.</p>
    </div>

    <div class="footer-section links">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>

    <div class="footer-section contact">
      <h4>Contact Us</h4>
      <p><strong>Phone:</strong> +91-XXXXXXXXXX</p>
      <p><strong>Email:</strong> info@aashirvadtyres.com</p>
      <p><strong>Address:</strong> 123, Industrial Area, Your City, India</p>
    </div>

    <div class="footer-section social">
      <h4>Follow Us</h4>
      <div class="social-icons">
        
        <a href="https://www.facebook.com" target="_blank" class="social-link" aria-label="Facebook">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
        </a>
       
        <a href="https://www.instagram.com" target="_blank" class="social-link" aria-label="Instagram">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        </a>
       
        <a href="https://www.twitter.com" target="_blank" class="social-link" aria-label="Twitter">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z"/></svg>
        </a>
        
        <a href="https://www.linkedin.com" target="_blank" class="social-link" aria-label="LinkedIn">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M0 0v24h24v-24h-24zm8 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.397-2.586 7-2.777 7 2.476v6.759z"/></svg>
        </a>
      </div>
    </div>

  </div>

  <div class="footer-bottom">
    &copy; <?php echo date("Y"); ?> Aashirvad Tyres. All rights reserved.
  </div>
</footer>
