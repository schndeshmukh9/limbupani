<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Catalog - Kuberganga</title>
  <link rel="stylesheet" href="catalog.css">
  <script>
    function handleClick() {
      alert("Button was clicked!");
    }

    document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".buy-btn");

  buttons.forEach(button => {
    button.addEventListener("click", function () {
      const productId = this.getAttribute("data-product-id");

      // Fetch catalog info via AJAX
      fetch(`catalog.php?product_id=${productId}`)
        .then(response => response.text())
        .then(data => {
          document.getElementById("catalog").innerHTML = data;
          document.getElementById("catalog").style.display = "block";
        })
        .catch(error => console.error("Error loading catalog:", error));
    });
  });
});


document.getElementById("clickBtn").addEventListener("click", function () {
  fetch("buycart.php", {
    method: "POST"
  })
  .then(response => response.text())
  .then(data => {
    document.getElementById("response").innerText = data;
  })
  .catch(error => {
    console.error("Error:", error);
  });
});
  </script>

</head>
<body>
  <h1>Product Catalog</h1>
  <div class="catalog-grid">
    <div class="product-card">
      <img src="assets/images/palak1.jpg" alt="Palak">
      <h3>palak</h3>
      <p class="price">₹40</p>
      <button  onclick="handleClick()" class="buy-btn" data-product-id="101">Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/methi.jpg" alt="methi">
      <h3>methi</h3>
      <p class="price">₹50</p>
      <button id="clickBtn">Add to Cart</button>
      <p id="response"></p>

    </div>
    <div class="product-card">
      <img src="assets/images/shepu.jpg" alt="Product 2">
      <h3>shepu</h3>
      <p class="price">₹15</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/bhendi.jpg" alt="Product 4">
      <h3>bhendi</h3>
      <p class="price">₹25</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/Cauliflower.jpg" alt="Product 2">
      <h3>Cauliflower</h3>
      <p class="price">₹22</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/batata.jpg" alt="Product 2">
      <h3>Batata</h3>
      <p class="price">₹80 / 1 kg</p>
      <button>Add to Cart</button>
    </div>
     <div class="product-card">
      <img src="assets/images/lasun.jpg" alt="Product 2">
      <h3>lasun</h3>
      <p class="price">₹80 / 1 kg</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/onion.jpg" alt="Product 2">
      <h3>Onion</h3>
      <p class="price">₹80 / 1 kg</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/vange.jpg" alt="Product 2">
      <h3>Vange</h3>
      <p class="price">₹80 / 1 kg</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/dodake.jpg" alt="Product 2">
      <h3>Dodake</h3>
      <p class="price">₹100 / 1 kg</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/gilake.jpg" alt="Product 2">
      <h3>Gilake</h3>
      <p class="price">₹80 / 1 kg</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/product2.jpg" alt="Product 2">
      <h3>Bluetooth Speaker</h3>
      <p class="price">₹1,499</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/product2.jpg" alt="Product 2">
      <h3>Bluetooth Speaker</h3>
      <p class="price">₹1,499</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/product2.jpg" alt="Product 2">
      <h3>Bluetooth Speaker</h3>
      <p class="price">₹1,499</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/product2.jpg" alt="Product 2">
      <h3>Bluetooth Speaker</h3>
      <p class="price">₹1,499</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/product1.jpg" alt="Product 1">
      <h3>Smart Watch</h3>
      <p class="price">₹2,999</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/product2.jpg" alt="Product 2">
      <h3>Bluetooth Speaker</h3>
      <p class="price">₹1,499</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/product2.jpg" alt="Product 2">
      <h3>Bluetooth Speaker</h3>
      <p class="price">₹1,499</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/product2.jpg" alt="Product 2">
      <h3>Bluetooth Speaker</h3>
      <p class="price">₹1,499</p>
      <button>Add to Cart</button>
    </div>
    <div class="product-card">
      <img src="assets/images/product2.jpg" alt="Product 2">
      <h3>Bluetooth Speaker</h3>
      <p class="price">₹1,499</p>
      <button>Add to Cart</button>
    </div>
   
    <!-- Add more product cards as needed -->
  </div>
</body>
</html>