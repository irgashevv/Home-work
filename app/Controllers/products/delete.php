<?php

use App\core\App;

App::get('database')->delete('products', $_GET['id']);

header('Location: /');
