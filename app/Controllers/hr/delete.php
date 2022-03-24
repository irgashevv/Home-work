<?php

$queryBuilder->delete('employees', $_GET['id']);

header('Location: /');
