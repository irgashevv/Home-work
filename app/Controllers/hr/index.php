<?php

use App\core\App;

$employees = App::get('database')->getAll('employees');

require_once __DIR__ . '/../../views/hr/index.view.php';