<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <!-- <a href="http://yii2base/index.php?r=task/create" class="btn btn-success">Добавить задачу</a> -->
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
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
                    <td><?=($model->id)?></td>
                    <td><?=($model->name)?></td>
                    <td>
                        <a href="http://yii2base/index.php?r=task/task" class="btn btn-info">
                            Show
                        </a>
                        <a href="http://yii2base/index.php?r=task/edit" class="btn btn-warning">
                            Edit
                        </a>
                        <a onclick="return confirm('are you sure?');" href="http://yii2base/index.php?r=task/tasks" class="btn btn-danger">Delete</a>
                    </td>
                    <td><?=($model->responsible_id)?></td>
                    <td><?=($model->deadline)?></td>
                    <td><?=($model->status_id)?></td>
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