<div class="col-sm-8 blog-main">
    <div>


        <h4><?=$product_info['title']?></a</h4>


      <!--  <img width="120" height="120" src="<?=base_url()?>img/articles/<?=$product_info['img'];?>"> -->
        <?=$product_info['text']?>

    </div>
    <h3>Коментарії</h3>
    <p>
        <?php foreach ($comments as $row):?>
    <p><?=$row['comment']?></p>
    <p><?=$row['date']?></p>
    <p><?=$row['author']?></p>
    <p><?=$row['time']?></p>
    <?php endforeach; ?>
    </p>
    <div id="comment-form">
        <form method="post" action="<?=base_url();?>index.php/product/view/<?=$product_info['id'];?>" class="comment-form">
            <label>Ваше ім'я:</label><br />
            <p><?=form_error('author');?></p>
            <input type="text" name="author" value="<?=set_value('author');?>" /><br />
            <label>Текст:</label><br />
            <p><?=form_error('comment');?></p>
            <textarea class="ckeditor" name="comment" value="<?=set_value('comment');?>"></textarea><br />
            <input type="hidden" name="id_product" value="<?=$product_info['id'];?>" />
            <div class="g-recaptcha" data-sitekey="6Lfk2A4UAAAAAM5P5RkD_aypwxkLtNZJIUtkT22k"></div>
            <input type="submit" name="send" value="Відправити" />
        </form>
    </div>
</div>


<!-- /.blog-main -->