<form action="insert.php" method="post">
    <div class="form-group col-md-6">
        <label for="author">Автор: </label>
        <input type="text" class="form-control" id="author" name="author" />
        <label for="email">E-mail: </label>
        <input type="text" class="form-control" id="email" name="email" />
        <label for="img">Загрузите изображение: </label>
        <input type="file" class="form-control" id="img" name="img" />
        <label>Задача: </label>
        <textarea class="form-control" id="content" name="content" ></textarea>

        <input class="btn btn-default" id="submit-input" type="submit" />
    </div>
</form>