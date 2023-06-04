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
          <li class="nav-item">
            <a class="nav-item nav-link <?= $_SESSION["site"] === "/views/login.php" ? "active" : "" ?>"
              href="/login">Login</a>
          </li>
        </ul>
      </div>
    </nav>

  </header>

  <main class="container mt-4">
    <form method="post" action="/cart">
      <h1>Product Catalog</h1>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="Product 1">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <button type="submit" name="product_id" value="1" class="btn btn-primary">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="Product 2">
            <div class="card-body">
              <h5 class="card-title">Product 2</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <button type="submit" name="product_id" value="2" class="btn btn-primary">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="Product 3">
            <div class="card-body">
              <h5 class="card-title">Product 3</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <button type="submit" name="product_id" value="3" class="btn btn-primary">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </main>

  <footer class="mt-4 text-center">
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