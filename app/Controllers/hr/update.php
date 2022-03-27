<?php

use App\core\App;

if (isset($_POST['submitted'])) {
    App::get('database')->update('employees', $_POST['id'], [
        'name'          => $_POST['name'],
        'surname'       => $_POST['surname'],
        'patronymic'    => $_POST['patronymic'],
        'date_of_birth' => $_POST['date_of_birth'],
        'position'      => $_POST['position'],
        'favorite_book' => $_POST['favorite_book'],
    ]);

    header('Location: /');
}