<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BasketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Корзина';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basket-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <p>
        <?//= Html::a('Create Basket', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],

            'id',
            'название товар',
            'товар',
            'количество',
            'цена',
            // 'driver_id',
            // 'video_card_id',
            // 'cooling_system_id',
            // 'sound_id',
            // 'power_supply_id',
            // 'network_card_id',
            // 'corpus_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <p>
    <?= Html::a('Оформить заказ', ['creates'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
