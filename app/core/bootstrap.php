<?php

use App\core\App;
use App\core\Database\Connection;
use App\core\Database\QueryBuilder;

App::bind('config', require_once __DIR__ . '/../../config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
