<?php include('header.php'); ?>

<style>
.cart-section {
  padding: 60px 20px;
  background-color: #f4f4f4;
  min-height: 80vh;
}
.cart-container {
  max-width: 1000px;
  margin: auto;
  background: #fff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}
.cart-container h2 {
  text-align: center;
  margin-bottom: 30px;
  font-size: 28px;
}
.cart-table {
  width: 100%;
  border-collapse: collapse;
}
.cart-table th, .cart-table td {
  padding: 12px;
  border: 1px solid #ccc;
  text-align: center;
}
.cart-table th {
  background-color: #343a40;
  color: white;
}
.cart-table input[type="number"] {
  width: 60px;
  padding: 5px;
  text-align: center;
}
.total-amount {
  text-align: right;
  font-size: 20px;
  margin-top: 20px;
}
.btn-checkout {
  background: #28a745;
  color: white;
  border: none;
  padding: 12px 25px;
  font-size: 16px;
  border-radius: 6px;
  float: right;
  cursor: pointer;
}
.btn-checkout:hover {
  background: #218838;
}
.btn-remove {
  background: #dc3545;
  color: white;
  border: none;
  padding: 5px 12px;
  border-radius: 4px;
  cursor: pointer;
}
.btn-remove:hover {
  background: #c82333;
}
.empty-message {
  text-align: center;
  padding: 40px;
  font-size: 20px;
  color: #888;
}
</style>

<div class="cart-section">
  <div class="cart-container">
    <h2>Your Cart</h2>
    
    <div id="cart-content">
      <!-- Cart content will load here -->
    </div>
  </div>
</div>

<script>
function loadCart() {
  let cart = JSON.parse(sessionStorage.getItem('cart') || '[]');
  let container = document.getElementById('cart-content');

  if (cart.length === 0) {
    container.innerHTML = '<div class="empty-message">Your cart is empty</div>';
    return;
  }

  let html = `
    <table class="cart-table">
      <thead>
        <tr><th>#</th><th>Product</th><th>Price</th><th>Qty</th><th>Subtotal</th><th>Action</th></tr>
      </thead>
      <tbody>
  `;

  let total = 0;
  cart.forEach((item, i) => {
    let subtotal = item.price * item.qty;
    total += subtotal;
    html += `
      <tr>
        <td>${i + 1}</td>
        <td>${item.name}</td>
        <td>₹${item.price}</td>
        <td>
          <input type="number" value="${item.qty}" min="1" onchange="updateQty(${i}, this.value)">
        </td>
        <td>₹${subtotal}</td>
        <td><button class="btn-remove" onclick="removeItem(${i})">Remove</button></td>
      </tr>
    `;
  });

  html += `
      </tbody>
    </table>
    <div class="total-amount">Total: ₹${total}</div>
    <button class="btn-checkout" onclick="checkoutNow()">Proceed to Checkout</button>
  `;

  container.innerHTML = html;
}

function updateQty(index, qty) {
  let cart = JSON.parse(sessionStorage.getItem('cart') || '[]');
  cart[index].qty = parseInt(qty);
  sessionStorage.setItem('cart', JSON.stringify(cart));
  loadCart();
}

function removeItem(index) {
  let cart = JSON.parse(sessionStorage.getItem('cart') || '[]');
  cart.splice(index, 1);
  sessionStorage.setItem('cart', JSON.stringify(cart));
  loadCart();
}

function checkoutNow() {
  alert('Proceeding to checkout...');
  // you can redirect to actual payment/checkout page here
  // window.location.href = 'payment.php';
}

window.onload = loadCart;
</script>

<?php include('footer.php'); ?>
