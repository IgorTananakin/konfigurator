<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NetworkcardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Networkcards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="networkcard-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Networkcard', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'power',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
