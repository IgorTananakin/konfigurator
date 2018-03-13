<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Networkcard */

$this->title = 'Create Networkcard';
$this->params['breadcrumbs'][] = ['label' => 'Networkcards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="networkcard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
