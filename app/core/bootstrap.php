<?php

use App\core\Database\Connection;
use App\core\Request;
use App\core\Router;

$config = require_once __DIR__ . '/../../config.php';

return Connection::make($config['database']);