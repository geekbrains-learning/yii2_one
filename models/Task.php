<?php
namespace app\models;
use yii\base\Model;
use app\validators\MainValidator;

class Task extends Model 
{	
    public $title;
    public $content;
    public $number;
    

    public function rules()
	{
        return [
            
            [['title', 'content', 'number'], 'required'],
            ['number', MainValidator::class],              
        ];
    }

    
}