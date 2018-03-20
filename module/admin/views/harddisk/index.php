<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HarddiskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Жёсткие диски';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="harddisk-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать жёсткий диск', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'price',
            'socket_id',
            'power',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
