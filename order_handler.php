<?php
session_start();
if (!empty($_SESSION['cart'])) {
  // Simulate order processing
  echo "✅ Order placed for products: " . implode(", ", $_SESSION['cart']);
  $_SESSION['cart'] = [];
} else {
  echo "❌ No items in cart.";
}
?>