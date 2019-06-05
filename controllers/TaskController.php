<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Task;
use yii\data\ActiveDataProvider;
use app\models\tables\Tasks;


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

    // public function actionCreate()
    // {
    //     $model = new Task();        
    //     $model-> title = 'Добавить Задачу';        
    //     $model-> content = 'Не дайте заскучать своим подчинённым!';
    //     $model-> number = 13;                 
    //     $model->validate();        
        
    //     // var_dump($model->getErrors());
    //     // die;

    //     return $this->render('create',
       
    //      [
    //         'model' => $model,
    //      ]
    //     );


        
        
    // }

    public function actionIndex() 
    {        
        $dataProvider = new ActiveDataProvider([
           'query' => Tasks::find()
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
    
}