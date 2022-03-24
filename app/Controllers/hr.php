<?php

$employees = $queryBuilder->getAll('employees');

require_once __DIR__ . '/../Views/hr/index.php';