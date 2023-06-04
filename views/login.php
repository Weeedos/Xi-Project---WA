<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = 'localhost';
    $dbname = 'shop';
    $username_db = 'root';
    $password_db = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username_db, $password_db);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username AND password = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['authenticated'] = true;
            $successMessage = "You are logged in";
        } else {
            $errorMessage = "Invalid username or password";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

?>

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
        <?php if (isset($errorMessage)): ?>
            <div class="alert alert-danger">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($successMessage)): ?>
            <div class="alert alert-success">
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
            <button type="submit" class="btn btn-secondary" name="register" value="register">Register</button>
        </form>
    </div>

    <footer class="mt-4 text-center">
        <p>&copy; 2023 E-Shop. All rights reserved.</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>