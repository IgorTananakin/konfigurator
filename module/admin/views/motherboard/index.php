<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MotherboardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Материнские платы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motherboard-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать материнскую плату', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'price',
            'sound',
            'pci_count',
            'ide_count',
             'graphical_scheme',
             'socket_id',
             'power',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
