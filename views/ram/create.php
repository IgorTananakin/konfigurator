<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ram */

$this->title = 'Создать оперативную память';
$this->params['breadcrumbs'][] = ['label' => 'Оперативная память', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ram-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
