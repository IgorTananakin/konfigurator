<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VideocardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="videocard-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'graphical_scheme') ?>

    <?= $form->field($model, 'video_controler') ?>

    <?php echo $form->field($model, 'size_video_memory') ?>

    <?php echo $form->field($model, 'pci_count') ?>

    <?php  echo $form->field($model, 'pcie_count') ?>

    <?php  echo $form->field($model, 'power') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
