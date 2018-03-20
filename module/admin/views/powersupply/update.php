<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Powersupply */

$this->title = 'Изменить блок питания: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Блоки питания', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="powersupply-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
