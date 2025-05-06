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
    case '/':
    case '':
        require "$publicPath/index.html";
        break;

    case '/about':
        require "$publicPath/about.html";
        break;

    case '/contact':
        require "$publicPath/contact.html";
        break;

    case '/bmi-calculator':
        require "$publicPath/bmi-calculator.html";
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
