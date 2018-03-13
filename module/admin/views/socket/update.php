<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Socket */

$this->title = 'Изменить сокет: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Сокеты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="socket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
