<div class="col-sm-8 col-sm-offset-4 col-md-8 col-md-offset-2 main">
    <h2 class="sub-header">Add Product</h2>
    <div class="table-responsive">
    <form method="post" action="<?base_url()?>" enctype="multipart/form-data">
        <div class="form-group">
            <label>Назва</label>
            <?php
            if(!empty(form_error('title')))
                echo "<div class='alert alert-danger'>Помилка !".form_error('title')."</div>";
            ?>
            <textarea class="form-control" rows="1"  name="title"><?= set_value('title'); ?></textarea>
        </div>
        <div class="form-group">
            <label>Зміст</label>
                <?php
                if(!empty(form_error('text')))
                    echo "<div class='alert alert-danger'>Помилка !".form_error('text')."</div>";
                ?>
            <textarea class="form-control" rows="3" name="text"><?= set_value('text'); ?></textarea>
        </div>
        <div class="form-group">
            <label>Цитата</label>
            <textarea class="form-control" rows="2" name="description"><?= set_value('description'); ?></textarea>
        </div>

            <div class="form-group">
                <input class="form-control" type="file" name="userfile"  >
            </div>
        <div class="form-group">
            <label>Price</label>
            <textarea class="form-control" rows="1" name="price"><?= set_value('price'); ?></textarea>
        </div>
        <div class="form-group">
            <label>Ключовi слова</label>
            <textarea class="form-control" rows="1" name="keywords"><?= set_value('keywords'); ?></textarea>
        </div>
        <input name="date" type="text" hidden value="<?=date("Y-m-d")?>">
        <input class="btn btn-default" name="add" type="submit" value="Зберегти">
    </form>
        <script type="text/javascript">
            CKEDITOR.replace('text');
        </script>
</div>
</div>
