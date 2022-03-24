<?php

$employees = $queryBuilder->getAll('employees');

require_once __DIR__ . '/../../views/hr/index.php';