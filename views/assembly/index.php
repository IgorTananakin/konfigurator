<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AssemblySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сборки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assembly-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать сборку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'soundCard.title',
            'videocard.title',
            'ram.title',
            'processor.title',
            'harddisc.title',
             'driver.title',
             'motherboard.title',
            'powersupply.title',
             'coolingsystem.title',
             'corpus.title',
             'networkcard.title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
