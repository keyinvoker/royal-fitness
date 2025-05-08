<?php

$publicPath = __DIR__ . '/public';

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request = rtrim($request, '/');

// Statics
$requestedFile = $publicPath . $request;
if (file_exists($requestedFile) && is_file($requestedFile)) {
    return false; // Let PHP's built-in server handle it
}

// Routing
switch ($request) {
    case '':
    case '/home':
        require "$publicPath/index.php";
        break;

    case '/about':
        require "$publicPath/about.php";
        break;

    case '/contact':
        require "$publicPath/contact.php";
        break;

    case '/services':
        require "$publicPath/services.php";
        break;

    case '/services/bmi-calculator':
        require "$publicPath/bmi-calculator.php";
        break;

    case '/services/exercises':
        require "$publicPath/exercises.php";
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
