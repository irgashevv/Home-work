<?php

use App\core\App;

$employee = App::get('database')->getById('employees', $_GET['id']);

require_once __DIR__ . '/../../views/hr/edit.view.php';
