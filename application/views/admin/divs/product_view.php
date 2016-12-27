<div class="col-sm-8 col-sm-offset-4 col-md-8 col-md-offset-2 main">

    <h2 class="sub-header">Product</h2>
    <div class="table-responsive">

    <form method="post" action="<?base_url()?><?=$product['id']?>" enctype="multipart/form-data">
        <div class="form-group">
            <label>Назва</label>
                <?php
                if(!empty(form_error('title')))
                    echo "<div class='alert alert-danger'>Помилка !".form_error('title')."</div>";
                ?>
            <textarea class="form-control" rows="1" name="title"><?=$product['title']?></textarea>
        </div>
        <div class="form-group">
            <label>Зміст</label>
                <?php
                if(!empty(form_error('text')))
                    echo "<div class='alert alert-danger'>Помилка !".form_error('text')."</div>";
                ?>
            <textarea class="form-control" rows="4" name="text"><?=$product['text']?></textarea>

        </div>
        <div class="form-group">
            <label>Цитата</label>
            <textarea  class="form-control" rows="2" name="description"><?=$product['description']?></textarea>
        </div>


        <div class="form-group">
            <label>Ключовi слова</label>
            <textarea class="form-control" rows="1" name="keywords"><?=$product['keywords']?></textarea>
        </div>

            <?php
            if(!empty($product['mini_img']))
                echo "<img  width='120' height='120' src=".base_url().'img/articles/'.$product['mini_img']."> ";
            else echo "<label>Картинка відсутня</label>"
            ?>

            <br>
            <br>
            <input class="form-control"  type="file" name="userfile"  >
        <br>
        <input class="btn btn-default" name="del" type="submit" value="Видалити картинку">
        <br>
        <input name="date" type="text" hidden value="<?=date("Y-m-d")?>"><br>
        <input class="btn btn-default" name="custom" type="submit" value="Зберегти">
    </form><br>
        <script type="text/javascript">
            CKEDITOR.replace('text');
        </script>


</div>
</div>

</div>
</div>