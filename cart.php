session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $product_id = $_POST['product_id'];
  $_SESSION['cart'][] = $product_id;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Your Cart</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <h2>Your Cart</h2>
  <ul>
    <?php
    if (!empty($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $id) {
        echo "<li>Product ID: $id</li>";
      }
    } else {
      echo "<li>Your cart is empty.</li>";
    }
    ?>
  </ul>
  <form action="backend/order_handler.php" method="POST">
    <button type="submit">Place Order</button>
  </form>
</body>
</html>