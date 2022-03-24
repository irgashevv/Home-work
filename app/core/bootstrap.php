<?php

use App\core\Database\Connection;

$config = require_once __DIR__ . '/../../config.php';

return Connection::make($config['database']);