<div class="col-sm-8 col-sm-offset-4 col-md-8 col-md-offset-2 main">

    <h2 class="sub-header">Add Category</h2>
    <div class="table-responsive">
    <form method="post" action="<?base_url()?>">
        <div class="form-group">
            <label>Відображення</label>
            <textarea class="form-control" rows="1" required name="title"></textarea>
        </div>
        <div class="form-group">
            <label>Категорія</label>
            <textarea class="form-control" rows="1" required name="title_en"></textarea>
        </div>

        <input class="btn btn-default" name="add" type="submit" value="Зберегти">
    </form>

</div>
</div>
