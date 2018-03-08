<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Videocard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="videocard-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'graphical_scheme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video_controler')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size_video_memory')->textInput() ?>

    <?= $form->field($model, 'pci_count')->textInput() ?>

    <?= $form->field($model, 'pcie_count')->textInput() ?>

    <?= $form->field($model, 'power')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
