<?php

namespace App\Routes;
use App\Helper\Helper;
use Database\Database;
use Database\Migrations\Migrations;

$routes = [
    "/" => __DIR__ . "/../public/view/home.view.php"
];

$uri = $_SERVER["REQUEST_URI"];
if(array_key_exists($uri, $routes )){
        require $routes[$uri];
}





