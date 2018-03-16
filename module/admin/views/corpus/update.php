<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Corpus */

$this->title = 'Изменить корпус: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Корпуса', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="corpus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
