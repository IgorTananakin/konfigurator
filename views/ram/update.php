<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ram */

$this->title = 'Изменить оперативную память: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Оперативная память', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="ram-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
