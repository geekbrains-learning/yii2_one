<?php

namespace app\widgets;
use yii\base\Widget;
use app\models\tables\Tasks;



class SingleTask extends Widget
{   
    public $model;

    public function init() 
    {
        if ($this->model === null) $this->model = 'Ничего не передано из БД!!!';
    }


    public function run() 
    {
        return $this->render('view', ['model'=> $this->model]);
    }

    
}