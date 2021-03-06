<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProcessorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Процессоры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="processor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать процессор', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'socket_id',
            'price',
            'frequency',
            'digit_capacity',
            'keh_memory',
            'load',
            'power',
            //'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
