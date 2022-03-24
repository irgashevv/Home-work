<?php require_once __DIR__ . '/../templates/header.php'; ?>
<div class="">
    <h1 class="display-1">Сотрудники</h1>
    <a href="hr/create" class="btn btn-info mb-3">Добавить сотрудника</a>
</div>
<table class="table border border-dark text-center">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Имя</th>
        <th scope="col">Фамилия</th>
        <th scope="col">Отчество</th>
        <th scope="col">Год рождения</th>
        <th scope="col">Позиция</th>
        <th scope="col">Любимая книга</th>
        <th scope="col">Действие</th>
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
            <th><?= $employee['favorite_book'] ?></th>
            <th>
                <a href="" class="btn btn-info">Редактировать</a>
                <a href="hr/delete?id=<?= $employee['id'] ?>" class="btn btn-danger">Удалить</a>
            </th>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>

