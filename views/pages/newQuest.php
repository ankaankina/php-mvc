<div class="row">
    <form id="submit-form" class="col-md-6">
        <div class="form-group">
            <label for="author">Автор: </label>
            <input type="text" class="form-control" id="author" name="author" />
            <label for="email">E-mail: </label>
            <input type="text" class="form-control" id="email" name="email" />
            <label for="img">Загрузите изображение: </label>
            <input type="file" class="form-control" id="img" name="img" />
            <label for="content">Задача: </label>
            <textarea class="form-control" id="content" name="content" ></textarea>

            <input class="btn btn-default" id="preview-input" type="submit" value="Preview"/>
            <input class="btn btn-default btn-info" id="submit-input" type="submit" />
        </div>
    </form>
</div>

<div class="row">
    <div class="col-md-6 the-post">
        <b><h4 id="the-author" class="the-author"></h4>
        <p id="the-email" class="the-email small"></p></b>
        <p id="the-text" class="the-text"></p>
    </div>
</div>