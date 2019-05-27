<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\tables\Tasks;

class DbController extends Controller
{

    

    public function actionIndex() 
    {
        $db = \Yii::$app->db;
       /* $db->createCommand(
            "INSERT INTO `depart` VALUES (19, 'Контроль кач-ва', 0, NULL);"
                )-> execute();
                */
        $id = 1;
        $result = $db->createCommand("SELECT * FROM `depart` WHERE `id` = :id")
        -> bindValue(':id', $id)
        -> queryOne();
        //$result = $db->createCommand("SELECT `id` FROM `depart`")-> queryColumn(); 
        // var_dump($result);
        // die;   
    }


    public function actionAr() 
    {
       /* $model = new Tasks();
        $model->name = "Task1";
        $model->description = "Install Framework";
        $model->creator_id = 1;
        $model->responsible_id = 2;
        $model->deadline = date("Y-m-d");
        $model->status_id =1;

        $model->save(); */

        $result = Tasks::findOne(['name' =>  'Task2']);
        //$result = Tasks::findAll([]);
        //$result = Tasks::find()->all();
        // $result = Tasks::findOne(['name' =>  'Task2']);
        // $result->status_id = 2;
        // $result->save();
        
        // $result = Tasks::findOne(['name' =>  'Task3']);
        // $result->delete();

        var_dump($result); 
         die;
           

    }
}