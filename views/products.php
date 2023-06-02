<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Product Catalog</title>
  <style>
    .card {
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html">E-Shop</a>
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
          <li class="nav-item active">
            <a class="nav-item nav-link <?= $_SESSION["site"] === "/views/products.php" ? "active" : "" ?>"
              href="/products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link <?= $_SESSION["site"] === "/views/cart.php" ? "active" : "" ?>"
              href="/cart">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link <?= $_SESSION["site"] === "/views/login.php" ? "active" : "" ?>"
              href="/login">Login</a>
          </li>
        </ul>
      </div>
    </nav>

  </header>

  <main class="container mt-4">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <h1>Product Catalog</h1>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="product1.jpg" class="card-img-top" alt="Product 1">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <input type="submit1" class="btn btn-primary" value="Add to Cart"></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
              <h5 class="card-title">Product 2</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <input type="submit2" class="btn btn-primary" value="Add to Cart"></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="product3.jpg" class="card-img-top" alt="Product 3">
            <div class="card-body">
              <h5 class="card-title">Product 3</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <input type="submit3" class="btn btn-primary" value="Add to Cart"></a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </main>

  <footer class="mt-4 text-center fixed-bottom">
    <p>&copy; 2023 E-Shop. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.card').each(function (index) {
        var card = $(this);
        setTimeout(function () {
          card.css('opacity', '1');
        }, 500 * index);
      });
    });
  </script>
</body>

</html>

<?php

$cart = new Cart();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['submit1'])) {
    $cart->addProduct("Product 1", 1000, 1);
  }
  if (isset($_POST['submit2'])) {
    $cart->addProduct("Product 2", 2000, 1);
  }
  if (isset($_POST['submit3'])) {
    $cart->addProduct("Product 3", 3000, 1);
  }
  #echo $cart->getProducts();
}

?>