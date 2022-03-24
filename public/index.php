<?php

use App\core\Request;
use App\core\Router;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';

$queryBuilder = require_once '../app/core/bootstrap.php';

require_once Router::load('../routes.php')
    ->direct(Request::url(), Request::method());