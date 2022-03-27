<?php require_once __DIR__ . '/../templates/header.php'; ?>
    <div class="">
        <h1 class="display-1">Добавить нового сотрудника</h1>
    </div>
    <form method="post" action="">
        <div class="form-group mb-3">
            <label>Введите имя</label>
            <input type="text" class="form-control" placeholder="Иброхим" name="name">
        </div>
        <div class="form-group mb-3">
            <label>Введите фамилие</label>
            <input type="text" class="form-control" placeholder="Иргашев" name="surname">
        </div>
        <div class="form-group mb-3">
            <label>Введите отчество</label>
            <input type="text" class="form-control" placeholder="Искандарович" name="patronymic">
        </div>
        <div class="form-group mb-3">
            <label>Дата рождения</label>
            <input type="date" class="form-control" name="date_of_birth">
        </div>
        <div class="form-group mb-3">
            <label>Позиция (должность)</label>
            <input type="text" class="form-control" placeholder="Барномасоз" name="position">
        </div>
        <div class="form-group mb-3">
            <label>Любимая книга</label>
            <input type="text" class="form-control" placeholder="PHP Documentation" name="favorite_book">
        </div>

        <input type="submit" name="submitted" class="btn btn-primary"/>
    </form>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>