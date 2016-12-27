<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <h2 class="sub-header">Section title</h2>
    <div class="table-responsive">
        <?php $i=0; ?>
        <form action="<?base_url()?>" method="post" >
            No
            <input name="allhidden" type="radio" value="no">
            Yes
            <input name="allhidden" type="radio" value="yes">


        <?php foreach ($comments as $row):?>
            <?php $i++; ?>
            <table class="table table-striped">
                <thead>

                <tr>
                    <th>№</th>
                    <th>Назва</th>
                    <th>Стаття</th>
                    <th>Дата</th>
                    <th>Час</th>
                    <th>Категорія</th>
                    <th>Hidden</th>
                    <th>Ip</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?=$i?>.</td>
                    <td><a href="<?=base_url()?>admin/comment/select/<?=$row['id']?>"><?=$row['author']?></a></td>
                    <td><?=$row['note_id']?></td>
                    <td><?=$row['date']?></td>
                    <td><?=$row['time']?></td>
                    <td><?=$row['category']?></td>
                    <td><?=$row['hidden']?></td>
                    <td><?=$row['ip']?></td>
                    <td><a href="<?=base_url()?>admin/comments/delete/<?=$row['id']?>">Видалити</a></td>
                </tr>

                </tbody>
            </table>
        <?php endforeach; ?>
            <input class="btn btn-default" name="send" type="submit" value="Зберегти">
        </form>
    </div>
</div>
</div>
</div>