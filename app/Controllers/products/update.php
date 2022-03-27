<?php

use App\core\App;

if (isset($_POST['submitted'])) {
    App::get('database')->update('products', $_POST['id'], [
        'title'        => $_POST['title'],
        'quantity'     => $_POST['quantity'],
        'arrival_date' => $_POST['arrival_date'],
        'shelf_life'   => $_POST['shelf_life'],
        'supplier'     => $_POST['supplier'],
    ]);

    header('Location: /products');
}