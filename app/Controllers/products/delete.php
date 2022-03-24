<?php

$queryBuilder->delete('products', $_GET['id']);

header('Location: /');
