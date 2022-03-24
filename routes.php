<?php
// ------------------ HR Routes -------------------------
$router->get('', '../app/Controllers/hr/index.php');
$router->get('hr/create', '../app/Controllers/hr/add.php');
$router->get('hr/delete', '../app/Controllers/hr/delete.php');
$router->get('hr/edit', '../app/Controllers/hr/edit.php');
$router->post('hr/create', '../app/Controllers/hr/add.php');
$router->post('hr/update', '../app/Controllers/hr/update.php');
// ------------------ Products Routes -------------------------
$router->get('products', '../app/Controllers/products/index.php');
$router->get('products/create', '../app/Controllers/products/add.php');
$router->get('products/delete', '../app/Controllers/products/delete.php');
$router->get('products/edit', '../app/Controllers/products/edit.php');
$router->post('products/create', '../app/Controllers/products/add.php');
$router->post('products/update', '../app/Controllers/products/update.php');

// ------------------ Weather Forecasts Routes -------------------------
$router->get('weather-forecasts', '../app/Controllers/weather-forecasts/index.php');