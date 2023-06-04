<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>E-Shop</title>
    <style>
        #heading,
        #subheading,
        #content {
            display: none;
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

    <div class="container mt-4">
        <form>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="/register" class="btn btn-link">Register</a>
        </form>
    </div>

    <footer class="mt-4 text-center">
        <p>&copy; 2023 E-Shop. All rights reserved.</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
