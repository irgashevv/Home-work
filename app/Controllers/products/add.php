<?php

use App\core\App;

require_once __DIR__ . '/../../views/products/create.view.php';

if (isset($_POST['submitted'])) {
    App::get('database')->insert('products', [
        'title'        => $_POST['title'],
        'quantity'     => $_POST['quantity'],
        'arrival_date' => $_POST['arrival_date'],
        'shelf_life'   => $_POST['shelf_life'],
        'supplier'     => $_POST['supplier'],
    ]);

    header('Location: /products');
}