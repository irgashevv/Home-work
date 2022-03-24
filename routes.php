<?php

$router->get('', '../app/Controllers/hr.php');
$router->get('weather-forecasts', 'app/Controllers/weather-forecasts.php');
$router->get('products', 'app/Controllers/products.php');

//dd($router->routes);