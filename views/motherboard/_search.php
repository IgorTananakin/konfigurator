<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MotherboardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="motherboard-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'sound') ?>

    <?= $form->field($model, 'pci_count') ?>

    <?php echo $form->field($model, 'ide_count') ?>

    <?php echo $form->field($model, 'graphical_scheme') ?>

    <?php  echo $form->field($model, 'socket_id') ?>

    <?php echo $form->field($model, 'power') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
