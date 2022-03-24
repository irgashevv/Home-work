<?php

$products = $queryBuilder->getAll('products');

require_once __DIR__ . '/../../views/products/index.php';