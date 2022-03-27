<?php

use App\core\App;

App::get('database')->delete('employees', $_GET['id']);

header('Location: /');
