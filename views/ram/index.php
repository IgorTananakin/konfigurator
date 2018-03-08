<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Оперативная память';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ram-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать оперативную память', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'manufacturer',
            'price',
            'frequency',
            'sze',
             'power',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
