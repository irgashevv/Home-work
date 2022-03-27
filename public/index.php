<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use App\core\Request;
use App\core\Router;
require_once '../vendor/autoload.php';

require_once '../app/core/bootstrap.php';

Router::load('../routes.php')
    ->direct(Request::url(), Request::method());