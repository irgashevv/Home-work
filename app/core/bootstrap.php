<?php

use App\core\Database\Connection;
use App\core\Database\QueryBuilder;
use App\core\Request;
use App\core\Router;

$config = require_once __DIR__ . '/../../config.php';

return new QueryBuilder(
    Connection::make($config['database'])
);