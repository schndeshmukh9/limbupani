<?php
$products = [
  ["id" => 1, "name" => "Herbal Shampoo", "price" => 299, "image" => "shampoo.jpg"],
  ["id" => 2, "name" => "Organic Face Cream", "price" => 499, "image" => "cream.jpg"],
  ["id" => 3, "name" => "Ayurvedic Oil", "price" => 399, "image" => "oil.jpg"]
];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Products - Kuberganga</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <h2>Our Products</h2>
  <div class="product-grid">
    <?php foreach ($products as $product): ?>
      <div class="product-card">
        <img src="assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
        <h3><?= $product['name'] ?></h3>
        <p>₹<?= $product['price'] ?></p>
        <form method="POST" action="cart.php">
          <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
          <button type="submit">Add to Cart</button>
        </form>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>