<?php

use App\core\App;

$products = App::get('database')->getAll('products');

require_once __DIR__ . '/../../views/products/index.view.php';