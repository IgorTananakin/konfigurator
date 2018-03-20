<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Networkcard */

$this->title = 'Изменить севую карту: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Сетевые карты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="networkcard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
