<?php

namespace app\models\tables;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string $name Название задачи
 * @property string $description
 * @property int $creator_id
 * @property int $responsible_id
 * @property string $deadline
 * @property int $status_id
 * 
 * @property int $status
 * @property string $creator
 * @property int $responsible
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['creator_id', 'responsible_id', 'status_id'], 'integer'],
            [['deadline'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'creator_id' => 'Creator ID',
            'responsible_id' => 'Responsible ID',
            'deadline' => 'Deadline',
            'status_id' => 'Status ID',
        ];
    }



    public function creatorId() 
    {
        return $this->hasOne(Users::className(), ['id' => 'creator_id']);
    }

    public function responsibleId() 
    {
        return $this->hasOne(Users::className(), ['id' => 'responsible_id']);
    }

    public function getCreator() 
    {
        return $this->hasOne(Users::className(), ['id' => 'creator_id']);
    }

    public function getResponsible() 
    {
        return $this->hasOne(Users::className(), ['id' => 'responsible_id']);
    }
}
