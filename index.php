<?php
session_start();
$request = $_SERVER['REQUEST_URI'];

/*var_dump($request);*/
switch ($request) {

    case '/':
    case '/home':
        $redirect = '/views/index.php';
        break;
    case '/cart':
        $redirect = '/views/cart.php';
        break;
    case '/products':
        $redirect = '/views/products.php';
        break;
    case '/login':
        $redirect = '/views/login.php';
        break;
    case '/logout':
        $redirect = '/views/logout.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        exit();
}


$_SESSION['site'] = $redirect;
require_once __DIR__ . $redirect ?? __DIR__ . '/index.php';