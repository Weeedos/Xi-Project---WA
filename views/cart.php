<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
  $productId = $_POST['product_id'];

  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
  }

  $_SESSION['cart'][] = $productId;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_product_id'])) {
  $deleteProductId = $_POST['delete_product_id'];

  if (isset($_SESSION['cart']) && ($key = array_search($deleteProductId, $_SESSION['cart'])) !== false) {
    unset($_SESSION['cart'][$key]);
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkout'])) {
  $_SESSION['cart'] = array();
  $checkoutMessage = "Thanks for shopping with us!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Shopping Cart</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/home">E-Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-item nav-link <?= $_SESSION["site"] === "/views/index.php" ? "active" : "" ?>"
              href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link <?= $_SESSION["site"] === "/views/products.php" ? "active" : "" ?>"
              href="/products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link <?= $_SESSION["site"] === "/views/cart.php" ? "active" : "" ?>"
              href="/cart">Cart</a>
          </li>
          <?php if (isset($_SESSION["authenticated"])) { ?>
            <li class="nav-item">
              <a class="nav-item nav-link" href="/logout">Logout</a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-item nav-link <?= $_SESSION["site"] === "/views/login.php" ? "active" : "" ?>"
                href="/login">Login</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </nav>

  </header>

  <main class="container mt-4">

    <?php if (isset($checkoutMessage)): ?>
      <div class="alert alert-success">
        <?php echo $checkoutMessage; ?>
      </div>
    <?php endif; ?>

    <h1>Shopping Cart</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Product</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total</th>

        </tr>
      </thead>
      <tbody>
        <?php
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
          $products = array(
            1 => array(
              'name' => 'Product 1',
              'price' => 100,
            ),
            2 => array(
              'name' => 'Product 2',
              'price' => 200,
            ),
            3 => array(
              'name' => 'Product 3',
              'price' => 300,
            )
          );

          foreach ($_SESSION['cart'] as $productId) {
            if (isset($products[$productId])) {
              $product = $products[$productId];
              ?>
              <tr>
                <td>
                  <?php echo $product['name']; ?>
                </td>
                <td>
                  <?php echo $product['price']; ?>Kc
                </td>
                <td>
                  <input type="number" class="form-control" value="1">
                </td>
                <td>
                  <?php echo $product['price']; ?>Kc
                </td>
                <td>
                  <form method="post" action="">
                    <input type="hidden" name="delete_product_id" value="<?php echo $productId; ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
              <?php
            }
          }
        } else {
          ?>
          <tr>
            <td colspan="5">No products in the cart</td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
    <div class="text-right">
      <strong>Total: </strong>
      <?php
      $total = 0;
      if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $productId) {
          if (isset($products[$productId])) {
            $total += $products[$productId]['price'];
          }
        }
      }
      echo $total . 'Kc';
      ?>
    </div>
    <form method="post" action="">
      <div class="text-center">
        <button type="submit" name="checkout" value="checkout" class="btn btn-primary">Checkout</button>
      </div>
    </form>
  </main>

  <footer class="mt-4 text-center">
    <p>&copy; 2023 E-Shop. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>