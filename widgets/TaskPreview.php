<?php
namespace app\widgets;
use app\models\tables\Tasks;
use yii\bootstrap\Widget;

class TaskPreview extends Widget
{    
    public $model;

    public function run() 
    {
        if(is_a($this->model, Tasks::class)){
            return $this->render('task_preview', ['model'=>$this->model]);
        }
        throw new \Exception("Модель должна быть класса Task");
        
    }
}