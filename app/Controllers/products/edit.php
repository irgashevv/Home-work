<?php

use App\core\App;

$product = App::get('database')->getById('products', $_GET['id']);

require_once __DIR__ . '/../../views/products/edit.view.php';
