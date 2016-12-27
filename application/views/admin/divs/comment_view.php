<div class="col-sm-8 col-sm-offset-4 col-md-8 col-md-offset-2 main">

    <h2 class="sub-header">Comment</h2>
    <div class="table-responsive">
    <form method="post" action="<?base_url()?><?=$comment['id']?>">
        <div class="form-group">
            <label>Текст</label>
            <textarea class="form-control" rows="1" name="comment"><?=$comment['comment']?></textarea>
        </div>
        <div class="form-group">
            <label>Автор</label>
            <textarea class="form-control" rows="1" name="author"><?=$comment['author']?></textarea>
        </div>
        <div class="form-group">
            <label>Стаття</label>
            <select class="form-control" name="note_id">
                <option disabled><b>Обрана стаття: <?=$comment['category']?></b></option>
                <?php foreach ($articles as $row):?>
                    <?php if ($row['title_en'] == $comment['note_id']){
                        echo "<option selected value=".$row['title_en']." >".$row['title_en']."</option>";
                    }else{
                        echo "<option  value=".$row['title_en']." >".$row['title_en']."</option>";
                    } ?>
                <?php endforeach; ?>
            </select>
            <label>Hidden</label>
            <textarea class="form-control" rows="1" name="hidden"><?=$comment['hidden']?></textarea>
        </div>
        <input name="date" type="text" hidden value="<?=date("Y-m-d")?>">
        <input name="time" type="text" hidden value="<?=date("H-i")?>">
        <input class="btn btn-default" name="custom" type="submit" value="Редагувати">
    </form>
    
</div>
</div>
