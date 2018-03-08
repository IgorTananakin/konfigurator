<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Assembly */
/* @var $form ActiveForm */
?>
<div class="site-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'sound_card_id') ?>
        <?= $form->field($model, 'video_card_id') ?>
        <?= $form->field($model, 'ram_id') ?>
        <?= $form->field($model, 'processor_id') ?>
        <?= $form->field($model, 'hard_disc_id') ?>
        <?= $form->field($model, 'driver_id') ?>
        <?= $form->field($model, 'motherboard_id') ?>
        <?= $form->field($model, 'power_supply_id') ?>
        <?= $form->field($model, 'cooling_system_id') ?>
        <?= $form->field($model, 'corpus_id') ?>
        <?= $form->field($model, 'network_card_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-index -->
