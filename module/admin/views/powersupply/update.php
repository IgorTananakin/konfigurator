<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Powersupply */

$this->title = 'Update Powersupply: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Powersupplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="powersupply-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
