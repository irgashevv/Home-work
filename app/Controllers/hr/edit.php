<?php

$employee = $queryBuilder->getById('employees', $_GET['id']);

require_once __DIR__ . '/../../views/hr/edit.php';
