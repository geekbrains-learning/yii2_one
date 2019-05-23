<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Task;

class TaskController extends Controller
{
    //public $layout = false; //вариант 1

    public function actionTasks()
    {
        // $model = new Test();
        // $model-> title = 'Yii2';
        // $model-> content = 'Hello from Yii2!!';

        // $model->validate();

        

        //var_dump($model->getErrors());
        //exit;

        return $this->render('tasks',
       
         [
            // 'title' => 'Yii2',
            // 'content' => 'Hello from Yii2!!',
            //'model' => $model,
         ]
        )        ;
        //return $this->renderPartial('test'); //вариант 2 (без public $layout)
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
}