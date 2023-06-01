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
      <a class="navbar-brand" href="index.html">E-Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
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
        <!--
        <tr>
          <td>Product 1</td>
          <td>100Kc</td>
          <td>
            <input type="number" class="form-control" value="1">
          </td>
          <td>100Kc</td>
        </tr>
        
        <tr>
          <td colspan="3" class="text-right"><strong>Total:</strong></td>
          <td><strong></strong></td>
        </tr>
        -->
      </tbody>
    </table>
    <div class="text-center">
      <a href="#" class="btn btn-primary">Checkout</a>
    </div>
  </main>

  <footer class="mt-4 text-center fixed-bottom">
    <p>&copy; 2023 E-Shop. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>