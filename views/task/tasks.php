<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Все Задачи</h1>
            <a href="http://yii2base/index.php?r=task/create" class="btn btn-success">Добавить задачу</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Заголовок</th>
                    <th>Действия</th>
                    <th>Исполнитель</th>
                    <th>Крайний срок</th>
                    <th>Статус</th>
                    <th>Изменить статус</th>
                </tr>
                </thead>

                <tbody>
                
                <tr>
                    <td>30</td>
                    <td>static:Купить собаке корм</td>
                    <td>
                        <a href="http://yii2base/index.php?r=task/task" class="btn btn-info">
                            Show
                        </a>
                        <a href="http://yii2base/index.php?r=task/edit" class="btn btn-warning">
                            Edit
                        </a>
                        <a onclick="return confirm('are you sure?');" href="http://yii2base/index.php?r=task/tasks" class="btn btn-danger">Delete</a>
                    </td>
                    <td>Студент GeekBrains</td>
                    <td>25.05.2019</td>
                    <td>В работе</td>
                    <td>
                    <a onclick="return confirm('are you sure?');" href="http://yii2base/index.php?r=task/tasks" class="btn btn-success">
                            Done!
                        </a>
                    </td>
                </tr>
                

                </tbody>
            </table>
        </div>
    </div>
</div>