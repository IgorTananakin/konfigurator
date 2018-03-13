<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VideocardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Видеокарты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="videocard-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создаь видеокарту', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'price',
            'graphical_scheme',
            'video_controler',
            'size_video_memory',
             'pci_count',
             'pcie_count',
             'power',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
