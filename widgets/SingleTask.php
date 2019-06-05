<?php

namespace app\widgets;
use yii\base\Widget;

class SingleTask extends Widget
{   
    public $name;

    public function init() 
    {
        if ($this->name === null) $this->name = 'Пустое значение';
    }


    public function run() 
    {
        return $this->render('task', ['name'=> $this->name]);
    }

    
}
