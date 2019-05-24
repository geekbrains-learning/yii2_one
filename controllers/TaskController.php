<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Task;

class TaskController extends Controller
{

    public function actionTasks()
    {     
        return $this->render('tasks',
       
         [            
         ]
        );
        
    }

    public function actionTask()
    {
       
        
        return $this->render('task',
       
         [
         ]
        );
        
    }

    public function actionEdit()
    {
        
        return $this->render('edit',
       
         [
         ]
        );
        
    }   

    public function actionCreate()
    {
        $model = new Task();        
        $model-> title = 'Добавить Задачу';        
        $model-> content = 'Не дайте заскучать своим подчинённым!';
        $model-> number = 13;                 
        $model->validate();        
        
        // var_dump($model->getErrors());
        // die;

        return $this->render('create',
       
         [
            'model' => $model,
         ]
        );
        
        
    }
}