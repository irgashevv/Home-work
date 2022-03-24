<?php require_once __DIR__ . '/../templates/header.php'; ?>
<div class="">
    <h1 class="display-1">Продукты</h1>
    <a href="products/create" class="btn btn-info mb-3">Добавить Продукт</a>
</div>
<table class="table border border-dark text-center">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Название</th>
        <th scope="col">Количество</th>
        <th scope="col">Дата прихода</th>
        <th scope="col">Срок хранения</th>
        <th scope="col">Поставщик</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product) : ?>
        <tr>
            <th><?= $product['id'] ?></th>
            <th><?= $product['title'] ?></th>
            <th><?= $product['quantity'] ?></th>
            <th><?= $product['arrival_date'] ?></th>
            <th><?= $product['shelf_life'] . ' дней' ?></th>
            <th><?= $product['supplier'] ?></th>
            <th>
                <a href="products/edit?id=<?= $product['id'] ?>" class="btn btn-info">Редактировать</a>
                <a href="products/delete?id=<?= $product['id'] ?>" class="btn btn-danger">Удалить</a>
            </th>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>

