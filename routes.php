<?php
// ------------------ HR Routes -------------------------
$router->get('', 'HrController@index');
$router->get('hr/create', 'HrController@create');
$router->get('hr/delete', 'HrController@destroy');
$router->get('hr/edit', 'HrController@edit');
$router->post('hr/create', 'HrController@store');
$router->post('hr/update', 'HrController@update');
// ------------------ Products Routes -------------------------
$router->get('products', '../app/Controllers/products/index.php');
$router->get('products/create', '../app/Controllers/products/add.php');
$router->get('products/delete', '../app/Controllers/products/delete.php');
$router->get('products/edit', '../app/Controllers/products/edit.php');
$router->post('products/create', '../app/Controllers/products/add.php');
$router->post('products/update', '../app/Controllers/products/update.php');
// ------------------ Weather Forecasts Routes -------------------------
$router->get('weather-forecasts', '../app/Controllers/weather-forecasts/index.php');