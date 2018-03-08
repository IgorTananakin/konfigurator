<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CoolingsystemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Кулеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coolingsystem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать кулер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'price',
            'socket_id',
            'power',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
