<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Test;

class TaskController extends Controller
{
    //public $layout = false; //вариант 1

    public function actionTask()
    {
        // $model = new Test();
        // $model-> title = 'Yii2';
        // $model-> content = 'Hello from Yii2!!';

        // $model->validate();

        

        //var_dump($model->getErrors());
        //exit;

        return $this->render('task',
       
         [
            // 'title' => 'Yii2',
            // 'content' => 'Hello from Yii2!!',
            //'model' => $model,
         ]
        )        ;
        //return $this->renderPartial('test'); //вариант 2 (без public $layout)
    }
}