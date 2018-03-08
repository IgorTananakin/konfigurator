<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProcessorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="processor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'socket_id') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'frequency') ?>

    <?php  echo $form->field($model, 'digit_capacity') ?>

    <?php  echo $form->field($model, 'keh_memory') ?>

    <?php  echo $form->field($model, 'load') ?>

    <?php  echo $form->field($model, 'power') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
