<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Basket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="basket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'assembly_id')->textInput() ?>

    <?= $form->field($model, 'processor_id')->textInput() ?>

    <?= $form->field($model, 'ram_id')->textInput() ?>

    <?= $form->field($model, 'hard_disk_id')->textInput() ?>

    <?= $form->field($model, 'driver_id')->textInput() ?>

    <?= $form->field($model, 'video_card_id')->textInput() ?>

    <?= $form->field($model, 'cooling_system_id')->textInput() ?>

    <?= $form->field($model, 'sound_id')->textInput() ?>

    <?= $form->field($model, 'power_supply_id')->textInput() ?>

    <?= $form->field($model, 'network_card_id')->textInput() ?>

    <?= $form->field($model, 'corpus_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
