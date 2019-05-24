<?php
namespace app\validators;
use yii\validators\Validator;

class MainValidator extends Validator 
{    

    public function validateAttribute($model, $attribute) 
    {
                   
        if ($model->$attribute == 13) {
            $this->addError($model, $attribute, "Плохо, число равно ч...й дюжине");                       
        }
        
    }
}