<?php

require 'includes/functions.php';
require 'includes/connection.php';

$request = $_SERVER['REQUEST_URI'];

$viewDir = "/views/";
$includeDir = '/includes/';

switch ($request) {
    case "/sia":
    case "/sia/":
        require __DIR__ . $viewDir . 'home.php';
        break;

    case "/sia/login":
        require __DIR__ . $viewDir . 'login.php';
        break;

    case "/sia/sign_up":
        require __DIR__ . $viewDir . 'sign-up.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}
