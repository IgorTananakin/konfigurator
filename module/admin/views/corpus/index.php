<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CorpusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Corpuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="corpus-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Corpus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'price',
            'size',
            'size_hard_disc',
            'power',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
