<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssemblySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assembly-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sound_card_id') ?>

    <?= $form->field($model, 'video_card_id') ?>

    <?= $form->field($model, 'ram_id') ?>

    <?= $form->field($model, 'processor_id') ?>

    <?php  echo $form->field($model, 'hard_disc_id') ?>

    <?php  echo $form->field($model, 'driver_id') ?>

    <?php  echo $form->field($model, 'motherboard_id') ?>

    <?php echo $form->field($model, 'power_supply_id') ?>

    <?php  echo $form->field($model, 'cooling_system_id') ?>

    <?php  echo $form->field($model, 'corpus_id') ?>

    <?php  echo $form->field($model, 'network_card_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
