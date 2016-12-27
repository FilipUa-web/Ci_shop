<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <h2 class="sub-header">Products</h2>
    <div class="table-responsive">
        <?php $i=0; ?>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>№</th>
                <th>Назва</th>

            </tr>
            </thead>
            <?php foreach ($products as $row):?>
            <?php $i++; ?>
            <tbody>
            <tr>
                <td><?=$i?>.</td>
                <td><a href="<?=base_url()?>index.php/admin/product/select/<?=$row['id']?>"><?=$row['title']?></a></td>
                <td><a href="<?=base_url()?>index.php/admin/products/delete/<?=$row['id']?>">Видалити</a></td>
            </tr>

            </tbody>
            <?php endforeach; ?>
        </table>

    </div>
</div>
</div>
</div>