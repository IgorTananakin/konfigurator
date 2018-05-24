<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Processor */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Процессоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="processor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'socket_id',
            'price',
            'frequency',
            'digit_capacity',
            'keh_memory',
            'load',
            'power',
            //'image',
        ],
    ]) ?>

</div>
<h3>Изображение товара</h3>
<?=$model->getImageUrl()?>
