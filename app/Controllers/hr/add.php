<?php

require_once __DIR__ . '/../../views/hr/create.php';

if (isset($_POST['submitted'])) {
    $queryBuilder->insert('employees', [
        'name'          => $_POST['name'],
        'surname'       => $_POST['surname'],
        'patronymic'    => $_POST['patronymic'],
        'date_of_birth' => $_POST['date_of_birth'],
        'position'      => $_POST['position'],
        'favorite_book' => $_POST['favorite_book'],
    ]);

    header('Location: /');
}