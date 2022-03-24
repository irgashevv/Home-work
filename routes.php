<?php

$router->get('', '../app/Controllers/hr/hr.php');
$router->get('hr/create', '../app/Controllers/hr/add-employee.php');
$router->get('hr/delete', '../app/Controllers/hr/delete.php');
$router->post('hr/create', '../app/Controllers/hr/add-employee.php');
$router->get('weather-forecasts', '../app/Controllers/weather-forecasts.php');
$router->get('products', '../app/Controllers/products.php');

//dd($router->routes);