<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Assembly */

$this->title = 'Изменить сборку с названием: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Сборки', 'url' => ['index']];

$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="assembly-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
