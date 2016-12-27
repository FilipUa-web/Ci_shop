<div class="col-sm-8 blog-main">
    <div>
        <?php foreach ($products as $row):?>
            <h3><a href="<?=base_url()?>index.php/product/view/<?=$row['id']?>"><?=$row['title']?></a></h3>
            <?=$row['text']?>
        <?php endforeach; ?>

    </div>
    <ul class="pager">
        <?=$this->pagination->create_links();?>
    </ul>
</div>