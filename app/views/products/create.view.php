<?php require_once __DIR__ . '/../templates/header.php'; ?>
    <div class="">
        <h1 class="display-1">Добавить Продукт</h1>
    </div>
    <form method="post" action="">
        <div class="form-group mb-3">
            <label>Название продукта</label>
            <input type="text" class="form-control" placeholder="Рыба" name="title">
        </div>
        <div class="form-group mb-3">
            <label>Количество в шт</label>
            <input type="text" class="form-control" placeholder="50" name="quantity">
        </div>
        <div class="form-group mb-3">
            <label>Дата прихода</label>
            <input type="date" class="form-control" name="arrival_date">
        </div>
        <div class="form-group mb-3">
            <label>Срок хранения</label>
            <input type="text" class="form-control" name="shelf_life">
        </div>
        <div class="form-group mb-3">
            <label>Поставщик</label>
            <input type="text" class="form-control" placeholder="Пираты" name="supplier">
        </div>

        <input type="submit" name="submitted" class="btn btn-primary"/>
    </form>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>