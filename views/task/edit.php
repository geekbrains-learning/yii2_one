<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Task</h1>
            <form action="http://yii2base/index.php?r=task/tasks" method="post">

                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="Купить собаке корм">
                </div>

                <div class="form-group">
                    <textarea name="content" class="form-control">Купить собаке корм не на рынке, а в магазе</textarea>
                </div>

                <div class="form-group">
                    <textarea name="implementer" class="form-control">Студент GeekBrains</textarea>
                </div>

                <div class="form-group">
                    <textarea name="deadline" class="form-control">25.05.2019</textarea>
                </div>

                <div class="form-group">
                    <textarea name="status" class="form-control">в работе</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-warning" type="submit">Submit</button>
                </div>
                <a href="http://yii2base/index.php?r=task/tasks">Назад</a>
            </form>
        </div>
    </div>
</div>