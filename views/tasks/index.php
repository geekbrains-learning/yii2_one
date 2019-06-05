<?php

use app\models\tables\Tasks;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\tables\SearchT */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Все задачи';
$this->params['breadcrumbs'][] = $this->title;

$dataProvider = new ActiveDataProvider([
    'query' => Tasks::find()->orderBy('creator_id'),
    'pagination' => [
        'pageSize' => 2,
    ],
]);
?>


<div class="tasks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить задачу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?=ListView::widget([
        'itemView' => 'view',
        'dataProvider' => $dataProvider,
        'viewParams' => [
            'hide' => 'true'
        ]
    ])
    ?>
    <!-- <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description',
            'creator_id',
            'responsible_id',
            //'deadline',
            //'status_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?> -->

 <?= ListView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'itemView' => '_list',
    ]);
?>

</div>
