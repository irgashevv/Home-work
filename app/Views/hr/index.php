<?php require_once __DIR__ . '/../templates/header.php'; ?>
<div class="">
    <h1 class="display-1">Сотрудники</h1>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Имя</th>
        <th scope="col">Фамилия</th>
        <th scope="col">Отчество</th>
        <th scope="col">Год рождения</th>
        <th scope="col">Позиция</th>
        <th scope="col">Любимая книга</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($employees as $employee) : ?>
    <tr>
        <th><?= $employee['id'] ?></th>
        <th><?= $employee['name'] ?></th>
        <th><?= $employee['surname'] ?></th>
        <th><?= $employee['patronymic'] ?></th>
        <th><?= $employee['date_of_birth'] ?></th>
        <th><?= $employee['position'] ?></th>
        <th><?= $employee['fovarite_book'] ?></th>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>

