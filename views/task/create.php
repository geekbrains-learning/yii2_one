<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <h1><?=$model->title?></h1>
            <p><?=$model->content?></p>
            <p>Тикет №<?=$model->number?></p>
            <form action="http://yii2base/index.php?r=task/tasks" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <textarea name="content" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Отправить</button>
                </div>
                <a href="http://yii2base/index.php?r=task/tasks">Назад</a>
            </form>
        </div>
    </div>
</div>