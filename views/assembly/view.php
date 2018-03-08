<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Assembly */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Сборки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assembly-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'sound_card_id',
            'video_card_id',
            'ram_id',
            'processor_id',
            'hard_disc_id',
            'driver_id',
            'motherboard_id',
            'power_supply_id',
            'cooling_system_id',
            'corpus_id',
            'network_card_id',
        ],
    ]) ?>

</div>
