<?php

$product = $queryBuilder->getById('products', $_GET['id']);

require_once __DIR__ . '/../../views/products/edit.php';
